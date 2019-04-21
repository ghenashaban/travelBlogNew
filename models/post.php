<?php
class Post {
    public $id;
    public $user_id;
    public $body;
    public $published;
    public $created_at;
    public $updated_at;
    public $category_id;
    public $first_name;
    public $image;
    public $title;
        
    public function __construct($title, $id, $body, $image) {
        $this->title=$title;
        $this->id=$id;
        $this->body=$body;
        $this->image=$image;
       
       
    }
    
//    ,$body,$id, $published, $image_name
//             $this->body=$body;
//        $this->id=$id;
//        $this->title=$published;
//        $this->image=$image;
//    public function __construct($id, $user_id, $title, $body, $published, $created_at, $updated_at, $category_id){
//        $this->id=$id;
//        $this->user_id= $user_id;
//        $this->title=$title;
//        $this->body=$body;
//        $this->published=$published;
//        $this->created_at=$created_at;
//        $this->updated_at=$updated_at;
//        $this->category_id=$category_id;
//    }
    
    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query("select * from post ");
      // we create a list of Product objects from the database results

       foreach($req->fetchAll() as $post) {
          $list[] = new Post($post['title'], $post['id'],$post['body'], $post['image']); 

         
       }
      return $list;
   
    }
      public static function search($searchTerm) { // find by user lne 137
      $list = [];
      $db = Db::getInstance();
      $req = $db->query("SELECT * FROM post WHERE title LIKE '%$searchTerm%'");
      // we create a list of posts where the search temr was found - UPDATE it with body date etc

       foreach($req->fetchAll() as $post) {
         $list[] = new Post($post['title'], $post['id'],$post['body'], $post['image']); 
          
       }
      return $list;
   
    }
    
    
    
    
    public static function remove($id) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('delete FROM post WHERE id = :id');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
  }
  
  public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("insert into post( title, body, image ) values ( :title, :body, :image)");

$req->bindParam(':title', $title);
$req->bindParam(':body', $body);
$req->bindParam(':image', $image);

    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['body'])&& $_POST['body']!=""){
        $filteredBody = filter_input(INPUT_POST,'body', FILTER_SANITIZE_SPECIAL_CHARS);
    }
//    if(isset($_POST['image'])&& $_POST['image']!=""){
//        $filteredimage = filter_input(INPUT_POST,'image', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
$title = $filteredTitle;
$body = $filteredBody;
//$image = $filteredimage;
$req->execute();

Post::uploadFile($title);
    }

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myUploader';

public static function uploadFile(string $title) {

	if (empty($_FILES[self::InputKey])) {
		//die("File Missing!");
                trigger_error("File Missing!");
	}

	if ($_FILES[self::InputKey]['error'] > 0) {
		trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
	}


	if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
	}

	$tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "C:/xampp/htdocs/travelBlog/views/images/";
	$destinationFile = $path . $title . '.jpeg';

	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
}

  public static function find($id) {
      $db = Db::getInstance();
       $id = intval($id);
      $req = $db->prepare('select * from post where id = :id ');
      $req->execute(array('id' => $id));
      $post = $req->fetch();
if($post){
      return new Post ($post['title'], $post['id'],$post['body'],$post['image']);
    }
    else
    {
        throw new Exception('A real exception should go here');
    }
    }
 public static function update($id) {
    $db = Db::getInstance();
    $req = $db->prepare("Update post set title=:title, body=:body where id=:id");
    $req->bindParam(':id', $id);
    $req->bindParam(':title', $title);
    $req->bindParam(':body', $body);


    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['body'])&& $_POST['body']!=""){
        $filteredBody = filter_input(INPUT_POST,'body', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$title = $filteredTitle;
$body = $filteredBody;
$req->execute();


        if (!empty($_FILES[self::InputKey]['title'])) {
		Product::uploadFile($title);
	}

    }


}


    
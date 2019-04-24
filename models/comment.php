
       <?php
class Comment {
   public $id;
    public $user_id;
    public $post_id;
    public $content;
     public $date;
    
      public function __construct($user_id, $id, $post_id, $content, $date) {
        $this->user_id=$user_id;
        $this->id=$id;
        $this->post_id=$post_id;
        $this->date=$date;
        $this->content=$content;
       
       
    }
    
    public static function addComment() {
    $db = Db::getInstance();
    $req = $db->prepare("insert into comment( post_id, content, user_id) values (:post_id, :content, :user_id)");

$req->bindParam(':post_id', $post_id);
$req->bindParam(':content', $content);
$req->bindParam(':user_id', $user_id);

if (isset($_POST['content'])) {
            $filteredContent = $_POST['content'];
            $content=$filteredContent;
        }
    if(isset($_POST['post_id'])&& $_POST['post_id']!=""){
        $filteredID = filter_input(INPUT_POST,'post_id', FILTER_SANITIZE_SPECIAL_CHARS);
    $post_id=$filteredID;}
    
     if(isset($_POST['user_id'])&& $_POST['user_id']!=""){
        $filteredUser = filter_input(INPUT_POST,'user_id', FILTER_SANITIZE_SPECIAL_CHARS);
    $user_id=$filteredUser;}
    
//    if(isset($_POST['image'])&& $_POST['image']!=""){
//        $filteredimage = filter_input(INPUT_POST,'image', FILTER_SANITIZE_SPECIAL_CHARS);
//    }


//$image = $filteredimage;
$req->execute();
    
}
public static function findByPostId($post_id) {
       $list = [];
        $db = Db::getInstance();
        //use intval to make sure $id is an integer
        $post_id = intval($post_id);
        $req = $db->prepare('select * from comment where post_id = :post_id; ');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('post_id' => $post_id));
      foreach ($req->fetchAll() as $comment) {
          
             $list[]= new  Comment($comment['user_id'], $comment['id'], $comment['post_id'], $comment['content'], $comment['date']);
      } return $list ;  
    }
   
      public static function remove($post_id) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $post_id = intval($post_id);
      $req = $db->prepare('delete FROM liketotal WHERE post_id = :post_id; delete from post_like where post_id=:post_id; delete from comment where post_id=:post_id');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('post_id' => $post_id));
  }
    
    }
     
    
     

    
     



  

 

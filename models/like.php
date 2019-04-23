<?php
class Like {
   public $id;
//    public $user_id;
    public $post_id;
public $totalCount;
public $like_count;

    
      public function __construct( $id, $post_id, $totalCount) {
//        $this->user_id=$user_id;
        $this->id=$id;
        $this->post_id=$post_id;
        $this->totalcount=$totalCount;
      
       }
       
       public static function addLike() {
    $db = Db::getInstance();
    $req = $db->prepare("insert into post_like( post_id, like_count, user_id) values (:post_id, :like_count, :user_id); update liketotal
set totalcount = (SELECT count(*) from post_like where post_id=:post_id)
where Post_id=:post_id;");

$req->bindParam(':post_id', $post_id);
$req->bindParam(':like_count', $like_count);
$req->bindParam(':user_id', $user_id);

if (isset($_POST['like_count'])) {
            $filteredLike = $_POST['like_count'];
            $like_count=$filteredLike;
        }
if(isset($_POST['post_id'])&& $_POST['post_id']!=""){
        $filteredID = filter_input(INPUT_POST,'post_id', FILTER_SANITIZE_SPECIAL_CHARS);
    $post_id=$filteredID;}
    
//      if (isset($_POST['user_id'])) {
//            $filteredUser = $_POST['user_id'];
//            $user_id=$filteredUser;
//        }
       
        $user_id=$_SESSION['id'];
    
$req->execute();
    
}

    
    public static function findByPostId ($post_id){
        $db = Db::getInstance();
       $id = intval($post_id);
      $req = $db->prepare('SELECT * from liketotal where post_id=:post_id; ');
      $req->execute(array('post_id' => $post_id));
      $like = $req->fetch();
     
if($like){
      return new Like ("", "", $like['totalCount']);
    }
    else
    {
        throw new Exception('A real exception should go here');
    }
    }
    
    
    
       }
       
       
<?php

class Like {
   public $post_id;
    public $user_id;
    public $like_count;
    
    
      public function __construct($post_id, $user_id, $like_count) {
        $this->post_id=$post_id;
        $this->user_id=$user_id;
        $this->like_count=$like_count;           
       
    }
    
    public static function addLike() {
    $db = Db::getInstance();
    $req = $db->prepare("insert into post_like( post_id, user_id, like_count) values (:post_id, :user_id, :like_count)");

$req->bindParam(':post_id', $post_id);
$req->bindParam(':user_id', $user_id);
$req->bindParam(':like_count', $like_count);

$action=$_POST['submit'];
if ($action=='submit'){
 $sql=$dbh->prepare("SELECT * FROM post_like WHERE post_id=? and user_id=?");
 $sql->execute(array($post_id,$user_id));
 $matches=$sql->rowCount();
 if($matches==0){
 $sql=$dbh->prepare("INSERT INTO post_like (post_id, user_id) VALUES(?, ?)");
 $sql->execute(array($post_id,$user_id));
 $sql=$dbh->prepare("UPDATE post_like SET like_count=like_count+1 WHERE like_count=?");
 $sql->execute(array($post_id));
}
}
    }
}
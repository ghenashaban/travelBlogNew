
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
        $this->content=$date;
       
       
    }
    
    public static function addComment() {
    $db = Db::getInstance();
    $req = $db->prepare("insert into comment( content ) values ( :content)");

//$req->bindParam(':post_id', $post_id);
$req->bindParam(':content', $content);


    if(isset($_POST['content'])&& $_POST['content']!=""){
        $filteredContent = filter_input(INPUT_POST,'content', FILTER_SANITIZE_SPECIAL_CHARS);
    }
//    if(isset($_POST['post_id'])&& $_POST['post_id']!=""){
//        $filteredID = filter_input(INPUT_POST,'post_id', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
    
//    if(isset($_POST['image'])&& $_POST['image']!=""){
//        $filteredimage = filter_input(INPUT_POST,'image', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
$content = $filteredContent;
//$post_id=$filteredID;
//$image = $filteredimage;
$req->execute();
    
}
}

  

 

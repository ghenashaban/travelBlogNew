<?php
class PostController {
    public function readAll() {
       $posts = Post::all();
       
      require_once('views/posts/readAll.php'); 
    }
    
    public function delete() {
        require_once 'models/comment.php';
        Comment::remove($_GET['id']);
            Post::remove($_GET['id']);
            
            
            $posts = Post::all();
            require_once('views/posts/readAll.php');
      }
      
      public function create() {
   
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/posts/create.php');
      }
      else { 
            Post::add();
             
            $posts = Post::all(); 
            require_once('views/posts/readAll.php');
      }
      
    }
    
    public function search() {
  if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/posts/search.php');
      }
      else { 
            Post::search();
             
            $posts = Post::all(); 
            require_once('views/posts/readAll.php');
            
    }}

   Public function read() {
if (!isset($_GET['id'])) {
        return call('pages', 'error');
} try {
      $posts = Post::find($_GET['id']);
      require_once 'models/comment.php';
      $comments=Comment::findByPostId($_GET['id']);
       require_once 'models/like.php';
        $likes=Like::findByPostId($_GET['id']);
       require_once 'models/post.php';
//            $PopularPostCOM = Post::PopularPostCOM();
//            $PopularPostLIKE = Post::PopularPostLIKE();
//            $RecentPosts = Post::RecentPost();
            $RecentPostDes = Post::RecentPostDes();
            $RecentPostEco = Post::RecentPostEco();
            $RecentPostFam = Post::RecentPostFam();
            $RecentPostIns = Post::RecentPostIns();
            $RecentPostTip = Post::RecentPostTip();
            $postLikeDes=Post::postLikeDes();
            $postLikeEco=Post::postLikeEco();
            $postLikeFam=Post::postLikeFam();
            $postLikeIns=Post::postLikeIns();
            $postLikeTip=Post::postLikeTip();
    require_once 'views/posts/read.php';
   
   
    } catch (Exception $ex) {
            return call('pages', 'error');
    }
     if (!empty($_REQUEST["content"])) {
//        require_once 'models/comment.php';
         Comment::addComment(); 
//         require_once 'views/posts/read.php';
           $comments=Comment::findByPostId($_GET['id']);     
           header('location: http://localhost/travelBlogNew/index.php?controller=post&action=read&id='.$_GET["id"]);
      }
    if (!empty($_REQUEST["like_count"])) {
//        require_once 'models/like.php';
         Like::addLike();
//         require_once 'views/posts/read.php';
         $likes=Like::findByPostId($_GET['id']);
          header('location: http://localhost/travelBlogNew/index.php?controller=post&action=read&id='.$_GET["id"]);
       
      }
  }

  Public function readByCat() {


      $posts = Post::findByCat($_GET['categoryID']);
    
       
    require_once 'views/posts/readByCat.php';
   
  
     
  }
  
    

  
  
  
public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['id']))
        return call('pages', 'error');

        $post = Post::find($_GET['id']);
      
        require_once('views/posts/update.php');
        }
      else
          { 
            $id = $_GET['id'];
            Post::update($id);
                        
            $posts = Post::all();
            require_once('views/posts/readAll.php');
      }
      
    }
}


// function addComment() {
//if (isset($_POST['submit'])) {
//
//                Comment::addComment();
//               
//                
//            } else {
//                $new= new PostController;
//                $new->read();
//                Post::find($_GET['id']);
//                require_once('views/posts/read.php');
//            }
//
//}
//function addComment(){
//    if($_SERVER['REQUEST_METHOD'] == 'GET'){
//          require_once('views/posts/.php');
//      }
//      else { 
//          require_once('views/posts/read.php');
//          require_once('models/comment.php');
//            Comment::addComment();
//             
//          
//      require_once('views/posts/read.php');
//      }
//      
//    }
//

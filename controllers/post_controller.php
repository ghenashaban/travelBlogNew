<?php
class PostController {
    public function readAll() {
       $posts = Post::all();
      require_once('views/posts/readAll.php'); 
    }
    
    public function delete() {
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


  Public function read() {

if (!isset($_GET['id'])) 
        return call('pages', 'error');

//      try{
      // we use the given id to get the correct post
      $posts = Post::find($_GET['id']);
      require_once 'models/comment.php';
      $comments=Comment::findByPostId($_GET['id']);
      Comment::addComment();
      // added this again so i can see the comment right away
       $comments=Comment::findByPostId($_GET['id']); 
      require_once 'views/posts/read.php';
//      }
// catch (Exception $ex){
//     return call('pages','error');
// }
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
      }
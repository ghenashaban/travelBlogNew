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

      try{
      // we use the given id to get the correct post
      $posts = Post::find($_GET['id']);
      require_once('views/posts/read.php');
      }
 catch (Exception $ex){
     return call('pages','error');
 }
    }

 
    
    
}
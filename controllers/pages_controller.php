<?php

class PagesController {
   
    public function home() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//require_once 'models/post.php';
//            $PopularPosts = Post::PopularPosts();
//            $RecentPosts = Post::RecentPosts();
            require_once('views/pages/home1.php');
        } else {
            require_once 'models/post.php';
            $search = $_POST['search'];
           $posts = Post::search($search);

            require_once('views/pages/searchResult.php');
        }
    }

    public function error() {
      require_once('views/pages/error.php');
      
    }
    
}

<?php

class PagesController {
   
    public function home() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
require_once 'models/post.php';
//            $PopularPostCOM = Post::PopularPostCOM();
//            $PopularPostLIKE = Post::PopularPostLIKE();
//            $RecentPosts = Post::RecentPost();
            $RecentPostDes = Post::RecentPostDes();
            $RecentPostEco = Post::RecentPostEco();
            $RecentPostFam = Post::RecentPostFam();
            $RecentPostIns = Post::RecentPostIns();
            $RecentPostTip = Post::RecentPostTip();
//            require_once 'views/pages/mostRecent.php';
            require_once 'views/pages/home1.php';
//           
              
            
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

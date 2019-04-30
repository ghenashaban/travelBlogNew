<?php

require_once 'models/Exception.php';

use function models\Exception\logException;

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
                $postLikeDes = Post::postLikeDes();
                $postLikeEco = Post::postLikeEco();
                $postLikeFam = Post::postLikeFam();
                $postLikeIns = Post::postLikeIns();
                $postLikeTip = Post::postLikeTip();

                require_once 'views/pages/home1.php';
            } else if (!empty($_POST['search'])) {
                require_once 'models/post.php';
                $search = $_POST['search'];
                $RecentPostDes = Post::RecentPostDes();
                $RecentPostEco = Post::RecentPostEco();
                $RecentPostFam = Post::RecentPostFam();
                $RecentPostIns = Post::RecentPostIns();
                $RecentPostTip = Post::RecentPostTip();
                $postLikeDes = Post::postLikeDes();
                $postLikeEco = Post::postLikeEco();
                $postLikeFam = Post::postLikeFam();
                $postLikeIns = Post::postLikeIns();
                $postLikeTip = Post::postLikeTip();
                $posts = Post::search($search);

                require_once('views/pages/searchResult.php');
            } else {
                echo "hello";
                
            }

    }

    public function error() {
      
            require_once 'models/post.php';
            $RecentPostDes = Post::RecentPostDes();
            $RecentPostEco = Post::RecentPostEco();
            $RecentPostFam = Post::RecentPostFam();
            $RecentPostIns = Post::RecentPostIns();
            $RecentPostTip = Post::RecentPostTip();
            $postLikeDes = Post::postLikeDes();
            $postLikeEco = Post::postLikeEco();
            $postLikeFam = Post::postLikeFam();
            $postLikeIns = Post::postLikeIns();
            $postLikeTip = Post::postLikeTip();
            require_once('views/pages/error.php');
            
     
    }

    public function contactUS() {
        try {
            require_once 'models/post.php';
            $RecentPostDes = Post::RecentPostDes();
            $RecentPostEco = Post::RecentPostEco();
            $RecentPostFam = Post::RecentPostFam();
            $RecentPostIns = Post::RecentPostIns();
            $RecentPostTip = Post::RecentPostTip();
            $postLikeDes = Post::postLikeDes();
            $postLikeEco = Post::postLikeEco();
            $postLikeFam = Post::postLikeFam();
            $postLikeIns = Post::postLikeIns();
            $postLikeTip = Post::postLikeTip();
            require_once('views/pages/contactUs.php');
        }catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public function aboutUs() {
        try {
            require_once 'models/post.php';
            $RecentPostDes = Post::RecentPostDes();
            $RecentPostEco = Post::RecentPostEco();
            $RecentPostFam = Post::RecentPostFam();
            $RecentPostIns = Post::RecentPostIns();
            $RecentPostTip = Post::RecentPostTip();
            $postLikeDes = Post::postLikeDes();
            $postLikeEco = Post::postLikeEco();
            $postLikeFam = Post::postLikeFam();
            $postLikeIns = Post::postLikeIns();
            $postLikeTip = Post::postLikeTip();
            require_once('views/pages/aboutUs.php');
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

}

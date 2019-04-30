<?php

require_once 'models/Exception.php';

use function models\Exception\logException;

class PagesController {

    public function home() {
        try {
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
            } else {
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
            }
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public function error() {
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
            require_once('views/pages/error.php');
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
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

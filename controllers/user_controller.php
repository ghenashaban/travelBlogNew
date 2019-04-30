<?php
require_once 'models/Exception.php';

use function models\Exception\logException;

require_once 'models/post.php';

class UserController {

    public function readAll() {
        try{
       
        $users = User::all();
     
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
        require_once('views/users/readAll.php');
        } catch (Exception $e) {
        call ('pages','error');
               logException($e);
    }

    }
    
    public function allBloggers() {
       try{
        $users = User::allBloggers();
     
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
        require_once('views/users/readBloggers.php');
        } catch (Exception $e) {
        call ('pages','error');
               logException($e);
    }

    }

    Public function read() {
        try{
        if (!isset($_GET['id']))
            return call('pages', 'error');
        try {
            $users = User::find($_GET['id']);
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
            require_once('views/users/read.php');
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
        } catch (Exception $e) {
        call ('pages','error');
               logException($e);
    }

    }
    
    Public function readAccount() {
        if (!isset($_GET['id']))
            return call('pages', 'error');
        try {
            $users = User::find($_SESSION['id']);
             $users = User::find($_GET['id']);
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
            require_once('views/users/userAccount.php');
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }

    public function delete() {
        try{
        User::remove($_GET['id']);

        $users = User::all();
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
        require_once('views/users/readAll.php');
        } catch (Exception $e) {
        call ('pages','error');
               logException($e);
    }

    }



public function login() {
    try{
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
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
        require_once('views/users/login.php');
        }
      else
          { 
       User::login($_POST['username']) ;

// require_once('index.php');
      }
} catch (Exception $e) {
        call ('pages','error');
               logException($e);
    }
  
    }
    
    
    Function logout () {
        try{
    User::logout();
   
   header("location:index.php");
   } catch (Exception $e) {
        call ('pages','error');
               logException($e);
    }

}

    public function register () {
        try{
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
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
            require_once ('views/users/register.php');
//            require_once ('views/pages/uploadPage.php');
        }
         else 
         {
            User::register(); 
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
            require_once('views/users/confirmation.php'); }
            } catch (Exception $e) {
        call ('pages','error');
               logException($e);
    }

     }
      public function registerAdmin () {
          try{
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
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
            require_once ('views/users/registerAdmin.php');
        }
         else 
         {
            User::registerAdmin(); 
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
            require_once('views/users/confirmation.php'); }
            } catch (Exception $e) {
        call ('pages','error');
               logException($e);
    }

     } 
     
   public function update() {
        try{
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['id']))
        return call('pages', 'error');

        $user = User::find($_GET['id']);
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
        require_once('views/users/update.php');
        }
      else
          { 
            $id = $_GET['id'];
            User::update($id);
                        
            $users = User::all();
//            require_once('views/users/readAll.php');
            header('location:index.php');
      }
      } catch (Exception $e) {
        call ('pages','error');
               logException($e);
    }

    }
    
     public function updatePassword() {
        try{
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['id']))
        return call('pages', 'error');

        $user = User::find($_GET['id']);
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
        require_once('views/users/resetPassword.php');
         
           
        }
      else
          { 
            $id = $_GET['id'];
            User::updatePassword($id);
                        
            $users = User::all();
            
//            require_once('views/pages/home1.php');
//            header('location:index.php');
      }
      } catch (Exception $e) {
        call ('pages','error');
               logException($e);
    }

    }
      public function loginPopUp() {
          try{
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
          
        require_once('views/pages/popUp.php');
        }
      else
          { 
       User::login($_POST['username']) ;
// require_once('index.php');
      }
      } catch (Exception $e) {
        call ('pages','error');
               logException($e);
    }

      }



}

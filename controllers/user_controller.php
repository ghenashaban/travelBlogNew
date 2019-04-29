<?php

 require_once 'models/post.php';
class UserController {

    public function readAll() {
       
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
    }
    
    public function allBloggers() {
       
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
    }

    Public function read() {
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
    }



public function login() {
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
      
    }
    
    
    Function logout () {
    User::logout();
   
   header("location:index.php");
}

    public function register () {
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
     }
      public function registerAdmin () {
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
     } 
     
   public function update() {
        
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
      
    }
    
     public function updatePassword() {
        
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
      
    }
      public function loginPopUp() {
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
          
        require_once('views/pages/popUp.php');
        }
      else
          { 
       User::login($_POST['username']) ;
// require_once('index.php');
      }
      }



}

<?php

class UserController {

    public function readAll() {
        $users = User::all();
        require_once('views/users/readAll.php');
    }

    Public function read() {
        if (!isset($_GET['id']))
            return call('pages', 'error');
        try {
            $users = User::find($_GET['id']);
            require_once('views/users/read.php');
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }

    public function delete() {
        User::remove($_GET['id']);

        $users = User::all();
        require_once('views/users/readAll.php');
    }

}

public function login() {
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
          
        require_once('views/users/login.php');
        }
      else
          { 
       User::login($_POST['username']) ;
 require_once('views/pages/home1.php');
      }
      
    }



}

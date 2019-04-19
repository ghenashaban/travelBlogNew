<?php

class UserController {

    public function readAll() {
        $users = User::all();
        require_once('views/users/readAll.php');
    }


    Public function read(){
    if (!isset($_GET['id']))
        return call('pages', 'error');
    try {
        $users = User::find($_GET['id']);
        require_once('views/users/read.php');
    } catch (Exception $ex) {
        return call('pages', 'error');
    }
}
}

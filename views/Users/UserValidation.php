<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//this file can be run in php to determine if a given username
//has already been used in the blog database, the chosen user name
//is passed to this file as a query parameter (e.g. ?chosenUserName="tess")
//this file makes use of a db connection object and the user class to check
//existing users in the blog database

require_once('./../../connection.php');
require_once('./../../models/user.php');
$userchoice = $_REQUEST ["chosenUserName"];
$ret = User::userNameExists($userchoice);
echo $ret;
?>

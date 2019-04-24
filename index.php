<!DOCTYPE html>
<?php
session_start();

ob_start(); ?>

<html>
    <head>
        <meta charset="UTF-8">
<!--        <link href="views/css/socialMedia.css" rel="stylesheet" type="text/css"/>-->
        <title>Travel Blog</title>
    </head>
    <body>
        <?php
    require_once('connection.php');
        
    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
  } else {
        $controller = 'pages';
        $action     = 'home';
  }


//if (isset($_GET['action']) && ($_GET['action']!='login')){
// require_once('views/layout1.php');   
//}else {
//    require_once('routes.php');
//}
  

   require_once('views/layout1.php');

    
  ob_flush();
  ?>

    </body>
</html>

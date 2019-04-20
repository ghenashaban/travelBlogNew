<?php 
session_start();
 $username=$_SESSION['username'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="views/css/search.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div class="home">
      
   <div class="caption text-center">
     <h1>Welcome to our Travel Blog</h1>
     <h3>Start your journey today</h3>
   
   
  
</div>
        
           <div class="container">
  <input type="text" placeholder="Search...">
  <div class="search"></div>
</div>   
       
        <?php
      
       
        if(!empty($_SESSION)){
            echo $_SESSION['username'];
            echo $_SESSION['password'];
         echo  "<a href='?controller=user&action=read&id=$username' class='btn btn-primary'>logout</a>";
           
           echo "<br>";
         
          
        }else{
            echo "Welcome Guest";
            echo "<br>";
   echo "<a href='?controller=usert&action=register' class='btn btn-primary'>register</a>";
          echo "<br>";
         echo "<a href='?controller=usert&action=register 'class='btn btn-primary'>register</a>";
        }
        ?>
        </div>

    </body>
</html>  
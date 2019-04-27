
<link href="views/css/search.css" rel="stylesheet" type="text/css"/>

    <div class="caption text-center">
        <h3> Welcome! أهلا بك! Bem Vinda! Failte! Bienvenido! </h3>
        <h1> Joined at the trip!</h1>
      
        <form method="POST">
        <div class="container">
            <input type="text" placeholder="Search.." name="search">
            <div class="search"></div>

        </div>
        </form>       
<!--
         <h2>Recent Posts</h2>
        <h3><?php // echo $RecentPost->title; ?> </h3>
        <h5> <?php // echo $RecentPost->body; ?></h5>
   
        -->
<h2>Recent by cat</h2>
<?php echo $RecentPostDes->title; ?>

<h2>Recent by Eco</h2>
<?php echo $RecentPostEco->title; ?>
<h2>Recent by fam</h2>
<?php echo $RecentPostFam->title; ?>
<h2>Recent by Ins</h2>
<?php echo $RecentPostIns->title; ?>
<div> 
<?php require 'views/pages/popUp.php';?>
</div>
   













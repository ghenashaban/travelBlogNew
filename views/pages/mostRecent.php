<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        
        <h2>Recent Posts</h2>
        <h3><?php echo $RecentPost->title; ?> </h3>
        <h5> <?php echo $RecentPost->body; ?></h5>
   
        
<h2>Recent by cat</h2>
<?php echo $RecentPostDes->title; ?>

<h2>Recent by Eco</h2>
<?php echo $RecentPostEco->title; ?>
<h2>Recent by fam</h2>
<?php echo $RecentPostFam->title; ?>
<h2>Recent by Ins</h2>
<?php echo $RecentPostIns->title; ?>
    </body>
</html>

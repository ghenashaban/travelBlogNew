<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>list of  matching posts</h1>
  

   <?php
   if (is_array($list))
        foreach ($posts as $post)  {       
        echo "<a href='post.php?title=" .$row['title']."&published=" .$row['published']."'<div class='article-box'>
                              <h3>" .$row['title']."</h3>
                              <p>" .$row['body']."</p> 
                              <p>" .$row['published']."</p>
                            </div></a>";
                            
                             } ?>
        

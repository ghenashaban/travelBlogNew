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
        

        !DOCTYPE html>


        <h3>List of all registered Users</h3>
        <?php
        foreach ($users as $user) { ?>
        <?php echo "$user->first_name" . "$user->last_name"; ?>           
        <a href='?controller=user&action=readAll' class='btn btn-primary'>View all registered users.</a>     
        <?php } ?>
        
        
 <div id="destination" class="offset">
     <p> hello </p>  
    
</div>
        


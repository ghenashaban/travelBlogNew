<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
 
    </head>
    <body>
        
        <?php if (!empty($_SESSION) ){
echo'
        <form action=""  method="POST" class="w3-container" enctype="multipart/form-data">
    
 
   
       
        <input class="w3-input" type="hidden" name="post_id" value="<?php echo $posts->id; ?>">
         <input class="w3-input" type="hidden" name="user_id" value="<?php echo $_SESSION["id"] ?>">
         <input class="w3-input" type="text" name="content" required>
        
      
 

              <input class="w3-btn w3-pink" type="submit" value="comment">
       </form> ';
} else {
     echo "<a href='?controller=user&action=login'><button>comment</button> </a>";
    }  
      ?> 
        




</body>
</html>
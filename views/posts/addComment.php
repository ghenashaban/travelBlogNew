<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <?php echo 'welcome'.$_SESSION["id"]?>
        <form action=""  method="POST" class="w3-container" enctype="multipart/form-data">
    
 
    <p>
       
        <input class="w3-input" type="hidden" name="post_id" value="<?= $posts->id; ?>">
         <input class="w3-input" type="hidden" name="user_id" value="<?php $_SESSION['id'] ?>">
        <input class="w3-input" type="text" name="content" required autofocus>
         <input class="w3-btn w3-pink" type="submit" value='Comment'>
 </p>
       </form>
        
    </body>
</html>

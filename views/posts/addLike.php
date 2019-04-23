<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
       
        <form action=""  method="POST" class="w3-container" enctype="multipart/form-data">
    
        <input class="w3-input" type="hidden" name="post_id" value="<?php echo $posts->id; ?>">
         <input class="w3-input" type="hidden" name="user_id" value="<?php echo $_SESSION['id'] ?>">
                  <input class="w3-input" type="hidden" name="like_count" value="1">
        <input class="w3-btn w3-pink" type="submit" value='Like'>
       </form>
    </body>
</html>

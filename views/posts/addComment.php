<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      
        <form action=""  method="POST" class="w3-container" enctype="multipart/form-data">
    
 
    <p>
        <label>Add comment</label>
        <input class="w3-input" type="hidden" name="post_id" value='<?php $posts->id ?>'>
        <input class="w3-input" type="text" name="content" required autofocus>
        
    </p>
     <p>
          <input class="w3-btn w3-pink" type="submit" value='add comment'>
  </p>
       </form>
    </body>
</html>

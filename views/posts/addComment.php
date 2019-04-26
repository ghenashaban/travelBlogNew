<!--<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
 
    </head>
    <body>-->
        
        <?php // if (!empty($_SESSION) ){
//echo'
//        <form action=""  method="POST" class="w3-container" enctype="multipart/form-data">
//    
// 
//   
//       
//        <input class="w3-input" type="hidden" name="post_id" value="<?php echo $posts->id; ?>">
<!--//         <input class="w3-input" type="hidden" name="user_id" value="<?php echo $_SESSION["id"] ?>">
//         <input class="w3-input" type="text" name="content" required>-->
//        
//      
// 
<!--//               <input class="w3-btn w3-pink" type="submit" value='Comment'>
//       </form> '
            ?>
                    
      
       <script src="views/js/js/jquery.min.js" type="text/javascript"></script>
        <script src="views/js/plugin/tinymce/tinymce.min.js" type="text/javascript"></script>
        <script src="views/js/plugin/tinymce/init-tinymce.js" type="text/javascript"></script>-->



<!--              <input class="w3-btn w3-pink" type="submit" value="comment">
       </form> ';-->
<!--} else {
     echo "<a href='?controller=user&action=login'><button>comment</button> </a>";
    }  
      ?> -->
        




<!--</body>
</html>-->
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").load("views/posts/viewComment.php");
  });
});
</script>
</head>
<body>

<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

<button>Get External Content</button>

</body>
</html>

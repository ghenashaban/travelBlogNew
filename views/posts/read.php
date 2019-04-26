<html>
    <head>
<<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").toggle();
  });
});
</script>
    </head>
</body>
<div id="banner">

<h3><?php echo $posts->title; ?> </h3>
<h5> <?php echo $posts->body; ?></h5>


<?php 
$file1 = 'views/images/' .$posts->title .".jpg";
$file2 = 'views/images/' .$posts->title .".jpeg";

if(file_exists($file1) ){
    $img = "<img src='$file1' width='150' />";
    echo $img;
    
}
else if (file_exists($file2)) {
  $img = "<img src='$file2' width='150' />";
echo $img;   } 
//} else {
//    // we can put a default image
//    echo "No picture found";
//}



   
     


   
     
 
  echo "<br>";
   echo "likes:";
 echo $likes->totalcount; 

    
      require_once 'views/posts/addLike.php';
       require_once 'views/posts/addComment.php';
      
   ?>

<button>view comments</button>

<p>
   <?php 
    echo "these are the comments:";
foreach ($comments as $comment) { ?>

      <td>   <?php echo $comment->content; ?> </td>
   <?php echo "<br>";} 
    ?>
</p>

</div>

</body>
    </html>
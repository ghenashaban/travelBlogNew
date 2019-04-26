<html>
    <head>
<!--       <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").load("viewComment.php");
  });
});
</script>-->
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



   
     
echo "these are the comments:";
foreach ($comments as $comment) { ?>

     <p>  <td>   <?php echo $comment->content; ?> </td>
   <?php } 

   
     
 
  echo "<br>";
   echo "likes:";
 echo $likes->totalcount; 

    
      require_once 'views/posts/addLike.php';
       require_once 'views/posts/addComment.php';
      
   ?>

<!--     <div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

<button>Get Comments</button>-->
</div>

</body>
    </html>
<p>This is the requested post:</p>

<p>Title: <?php echo $posts->title; ?></p>
<p>Post Body: <?php echo $posts->body; ?></p>

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



// foreach ($comments as $comment) { 
// echo $comment->content;
// }
   
     
echo "these are the comments:";
foreach ($comments as $comment) { ?>
     <p>  <td>   <?php echo $comment->content; ?> </td>
   <?php } 
   
   require_once 'views/posts/addComment.php';
   ?>
 
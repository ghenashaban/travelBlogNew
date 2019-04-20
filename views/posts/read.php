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
    echo $img;  
} else {
    // we can put a default image
    echo "No picture found";
}

?>

<!-- <a href='?controller=post&action=addComment' class='btn btn-primary'>Add comment</a> -->
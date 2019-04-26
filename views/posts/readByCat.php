
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="banner">
        <h3>list of all posts</h3>
  

   <?php foreach ($posts as $post) { ?>
   
      <p>   
   
   
  <?php $file1 = 'views/images/' .$post->title .".jpg";
$file2 = 'views/images/' .$post->title.".jpeg";

if(file_exists($file1) ){
    $img = "<img src='$file1' width='150' />";
    echo "<a href='?controller=post&action=read&id=" . $post->id . "'>$img </a>";
    
}
else if (file_exists($file2)) {
  $img = "<img src='$file2' width='150' />";
echo "<a href='?controller=post&action=read&id=" . $post->id . "'>$img </a>";
  } 
                    
  ?>    
      <?php echo $post->title; ?>    
    <a href='?controller=post&action=read&id=<?php echo $post->id; ?>' class='btn btn-primary'>Read More..</a>                    
                  
</p>
                        <?php } ?>
                            
    
  
     <script>
                        function ConfirmDelete() {
                            var txt;
                            var r = confirm("Are you sure you want to delete this post?");
                            if (r == true) {
                                txt = "You pressed OK! ";
                                window.location.href = ("?controller=post&action=delete&id=<?php echo $post->id; ?>");
                            } else {
                                txt = "You pressed Cancel!";
                            }
                            document.getElementById("demo").innerHTML = txt;
                        }
                    </script>  
                    </div>
    </body>
</html>
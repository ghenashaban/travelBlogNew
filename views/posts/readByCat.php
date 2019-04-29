
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="banner">
        <h3>Blogs</h3>
 
 
       
   <?php foreach ($posts as $post) { ?>
   
      <p>   
   
    <?php // echo $post->categories; ?> 
          <div class="row">
              <div class="col-5">
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
              </div>
              <div class="col-3">
      <?php echo $post->title; ?> 
                  </div>
              <div class="col-2">
              
    <a href='?controller=post&action=read&id=<?php echo $post->id; ?>' class='btn btn-primary'>Read More..</a>                    
          </div>        
</p>
          </div>

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
            
<?php require_once 'views/pages/divs.php'; ?>      
    </body>
</html>
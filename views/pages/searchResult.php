
<html>
    <head>
        <link href="views/css/search.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
        <div id="banner">
               <h2> <?php echo "Search results for "?>"<?php echo $_POST['search']; ?>"</h2>
               <br>

                   

                        <?php foreach ($posts as $post) {
               $file1 = 'views/images/' .$post->title .".jpg";
$file2 = 'views/images/' .$post->title.".jpeg";

if(file_exists($file1) ){
    $img = "<img src='$file1' width='400' />";
    echo "<a href='?controller=post&action=read&id=" . $post->id . "' >$img </a>";
    
}
else if (file_exists($file2)) {
  $img = "<img src='$file2' width='400' />";
echo "<a href='?controller=post&action=read&id=" . $post->id . "' >$img </a>";
  } 
                    
                            
                        
    
                        ?>
                     
                       
                         <h5><?php echo $post->title; ?> 
                        <a class="btn btn-secondary active" href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read more</a> </td>  &nbsp; &nbsp;
                       </h5>
 <?php }?> 
                    
    </div>
        <?php  require_once 'views/pages/divs.php'; ?>
    </body>
</html>


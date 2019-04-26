<html>

    <body>
       
        <div  class = "container" >     <div class="col-md-7">           <div style="overflow-x:auto;">

                    <h4>Search results for "<?php echo $_POST['search']; ?>"</h4></div>

                <table>
                    <tr>

                        <?php foreach ($posts as $post) {
               $file1 = 'views/images/' .$post->title .".jpg";
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
                        &nbsp; &nbsp;
                       
                        <td>  <?php echo $post->title; ?> </td> &nbsp; &nbsp;
                        <td>   <a class="btn btn-secondary active" href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read more</a> </td>  &nbsp; &nbsp;
                        <?php }?>

                    </tr> </table></div>
        </div> </div>
        
</body>
</html>
<html>
    <div id="bannerA">
<!-- <div class="caption text-center">-->
     
           
<p>Fill in the following form to update an existing post:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data"> 
    <h2>Update article</h2>
    <p>
<label>Title</label>
        <input class="w3-input" type="text" name="title" value="<?= $post->title; ?>">
        
    </p>
<!--  <label>Body</label>
        <input class="w3-input" type="text" name="body" value="//<?= $post->body; ?>" >-->
      
      <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
     <p>
                <label>Body</label>
                <center>  <div style="width:900px">
                <textarea  class="tinymce" id="texteditor" type="body" name="body" value="" > <?php echo $post->body; ?> 
           
                </textarea> 
                  
                    </div> </center>
            </p>
            

<?php 
$file1 = 'views/images/' .$post->title .".jpg";
$file2 = 'views/images/' .$post->title .".jpeg";

if(file_exists($file1) ){
    $img = "<img src='$file1' width='150' />";
    echo $img;
    
}
else if (file_exists($file2)) {
  $img = "<img src='$file2' width='150' />";
echo $img;   } 

?>
  <br/>
  <input type="file" name="myUploader" class="w3-btn w3-pink" />
  <p>
    <input class="w3-btn w3-gray" type="submit" value="Update Post">
    </p>
    </form>
<!-- </div>-->
    </div>

<script src="views/js/js/jquery.min.js" type="text/javascript"></script>
        <script src="views/js/plugin/tinymce/tinymce.min.js" type="text/javascript"></script>
        <script src="views/js/plugin/tinymce/init-tinymce.js" type="text/javascript"></script>
</html>

<?php require_once 'views/pages/divs.php'; ?>
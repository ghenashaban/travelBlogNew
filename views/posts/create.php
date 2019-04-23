<html>
<p>Fill in the following form to create a new article:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
   
    <p>
        <label>Title</label>
    <input class="w3-input" type="text" name="title" required autofocus>
        
    </p>
    <p>
     
    <input class="w3-input" type="hidden" name="user_id" value=<?php echo $_SESSION['id']?>>
        
    </p>
      
     <p>
                <label>Body</label>
     <center>  <div style="width:900px">
                <textarea  class="tinymce" id="texteditor" type="text" name="body" required>
           
                </textarea> 
         </div> </center>
            </p>
            
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <input type="file" name="myUploader" class="w3-btn w3-pink" required />
  <p>
    <input class="w3-btn w3-pink" type="submit" value="Add Article">
  </p>
</form>
<script src="views/js/js/jquery.min.js" type="text/javascript"></script>
        <script src="views/js/plugin/tinymce/tinymce.min.js" type="text/javascript"></script>
        <script src="views/js/plugin/tinymce/init-tinymce.js" type="text/javascript"></script>
</html>
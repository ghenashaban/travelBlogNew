<html>
    <div id="bannerA">
        <div class="row">
                <div class="col-2">
                    <button onclick="goBack()" class="previous"> &laquo; Back</button> </div>    
                <div class="col-8"><h2>Fill in the following form to create a new article:</h2>   
                </div> </div>

<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
   
    <p>
        <label>Title</label>
    <input class="w3-input" type="text" name="title" required autofocus>
        
    </p>
    <p>
     
    <input class="w3-input" type="hidden" name="user_id" value=<?php echo $_SESSION['id']?>>
        
    </p>
    
     <p>
     <label>category</label>
          <select name="categories">
    <option  value="Destination">Destination</option>
    <option  value="Eco-travel">Eco-Travel</option>
    <option  value="Family-Travel">Family Travel</option>
    <option  value="INSPIRATION">INSPIRATION</option>
    <option  value="Practical-tips">Practical-tips</option>
  </select>
        
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
<script>
function goBack() {
  window.history.back();
}

                    </script> 
    </html>
</div>
    
    <?php require_once 'views/pages/divs.php'; ?>
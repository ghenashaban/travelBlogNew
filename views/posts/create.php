<p>Fill in the following form to create a new article:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    
 
</
    <p>
        <label>Title</label>
        <input class="w3-input" type="text" name="title" required autofocus>
        
    </p>
        <p>
            <label>Body</label>
        <input class="w3-input" type="text" name="body" required>
        
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


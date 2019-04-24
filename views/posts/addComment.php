<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            #inputText {
    height : 50px;
    
            }
        </style>
    </head>
    <body>
      
        <form action=""  method="POST" class="w3-container" enctype="multipart/form-data">
    
 
   
       
        <input class="w3-input" type="hidden" name="post_id" value="<?php echo $posts->id; ?>">
         <input class="w3-input" type="hidden" name="user_id" value="<?php echo $_SESSION['id'] ?>">
         <input class="w3-input" type="text" name="content" required>
        
      
<!-- 
    <center>  <div id="inputText" style="width:700px; height:100px;">
            <textarea  class="tinymce" id="texteditor" type="text" name="content" required> 
           
                </textarea> -->
                 <input class="w3-btn w3-pink" type="submit" value='Comment'>
       </form> 
                    </div> </center>
      
       <script src="views/js/js/jquery.min.js" type="text/javascript"></script>
        <script src="views/js/plugin/tinymce/tinymce.min.js" type="text/javascript"></script>
        <script src="views/js/plugin/tinymce/init-tinymce.js" type="text/javascript"></script>

    </body>
</html>

<!--<!DOCTYPE html>
<html>
     
<body>

<div id="demo">
<h2>The XMLHttpRequest Object</h2>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "views/posts/ajax.txt", true);
  xhttp.send();
}
</script>

</body>
</html>-->


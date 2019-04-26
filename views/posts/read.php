<html>
    <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
<style> 
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
}
</style>
</body>
<div id="banner">

<h3><?php echo $posts->title; ?> </h3>
<h5> <?php echo $posts->body; ?></h5>


<?php 
$file1 = 'views/images/' .$posts->title .".jpg";
$file2 = 'views/images/' .$posts->title .".jpeg";

if(file_exists($file1) ){
    $img = "<img src='$file1' width='150' />";
    echo $img;
    
}
else if (file_exists($file2)) {
  $img = "<img src='$file2' width='150' />";
echo $img;   } 
//} else {
//    // we can put a default image
//    echo "No picture found";
//}



   
     


   
     
 
  echo "<br>";
   echo "likes:";
 echo $likes->totalcount; 

    
      require_once 'views/posts/addLike.php';
       require_once 'views/posts/addComment.php';
      
   ?>




<div id="flip">Comments</div>
<div id="panel"><p>
    <?php 
   
    echo "these are the comments:";
foreach ($comments as $comment) { ?>

      <td>   <?php echo $comment->content; ?> </td>
   <?php echo "<br>";} 
    ?>
</p></div>
</div>
 <div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

<button id=button name='getComment' onclick='comment(<?php echo $post->id; ?>)' >Get External Content</button>
<script>
function comment(id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("button").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "index.php?controller=post&action=read&id="+id, true);
  xhttp.send();}
</script>
</body>
    </html>
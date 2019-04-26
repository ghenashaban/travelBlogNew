
        <form action=""  method="POST" class="w3-container" enctype="multipart/form-data">
    
        <input class="w3-input" type="hidden" name="post_id" value="<?php echo $posts->id; ?>">
         <input class="w3-input" type="hidden" name="user_id" value="<?php echo $_SESSION['id'] ?>">
                  <input class="w3-input" type="hidden" name="like_count" value="1">
        <input class="w3-btn w3-pink" type="submit" value='Like'>
       </form>




<!DOCTYPE html>
<!--<html>
<head>
    
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">  
<style>
.fa {
  font-size: 50px;
  cursor: pointer;
  user-select: none;
}

.fa:hover {
  color: darkblue;
}

</style>
</head>
<body>


<i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>

<script>
function myFunction(x) {
  x.classList.toggle("fa-thumbs-down");
}
</script>-->


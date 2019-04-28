<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
       <style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  height: 175px;
  border-radius: 20px;
}
</style>
    </head>
    <div id="banner">
    <body>
         <div class="row">
<div class="col-sm-3">
    <?php
    $file1 = 'views/images/' .$users->username .".jpg";
$file2 = 'views/images/' .$users->username .".jpeg";

if(file_exists($file1) ){
//   $img= "<img src='$file1'  class='avatar'>";
    $img = "<img src='$file1' class='sticky' />";
    echo $img;
    
}
else if (file_exists($file2)) {
//    $img= "<img src='$file2'  class='avatar'>";
  $img = "<img src='$file2' class='sticky' />";
echo $img;  

}else{
    $img="<img src='views/images/avatar.jpg' class='sticky' />";
echo $img;
}?> 
</div>    
             <div class="col-sm-6">
        <h3>Your account details: </h3>
        <br>
        <h6>Update your account here:</h6>
        <a href='?controller=user&action=update&id=<?php echo $_SESSION["id"]; ?>'class='btn btn-primary'>Update</a>
             </div>
         </div>
        
    
 <div class="row">
   <div class="col-sm-3">         
</div> 
      <div class="col-sm-7">         

<table style="width:100%">
  <tr>
    <td>First Name</td>
    <td><?php echo "$users->first_name" ?></td>
  </tr>
  <tr><td>Surname</td> 
   <td><?php echo "$users->surname" ?> </td></tr>
    <tr><td>User Name</td>
    <td><?php echo $users->username ?> <br></td></tr>
    <tr><td>Email</td>
    <td><?php echo $users->email ?> <br></td></tr>
    <tr><td>Password</td>
    <td><?php echo $users->password ?> <br></td></tr>
    <tr><td>Jointed Date</td>
    <td><?php echo $users->created_at ?></td></tr>
  
</table>
      </div>
 </div>

        
<!--// FOR USE IF USERS HAVE AVATARS
//$file1 = 'views/images/' .$posts->title .".jpg";
//$file2 = 'views/images/' .$posts->title .".jpeg";
//if(file_exists($file1) ){
//    $img = "<img src='$file1' width='150' />";
//    echo $img;    
//}
//else if (file_exists($file2)) {
//  $img = "<img src='$file2' width='150' />";
//    echo $img; 
//} else {
//    // we can put a default image
//    echo "No picture found";
//}
//?>-->

    </div>
       
    </body>
</html>

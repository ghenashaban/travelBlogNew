<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h3>Your account details: </h3>
        <br>
        
       
        <h6>Update your account here:</h6>
<a href='?controller=user&action=update&id=<?php echo $_SESSION["id"]; ?>'class='btn btn-primary'>Update</a>


<?php // echo $users->role ?> <br>

<?php // echo $users->updated_at ?> <br>
<?php // echo $users->country_id ?> <br>
<?php
$file1 = 'views/images/' .$users->username .".jpg";
$file2 = 'views/images/' .$users->username .".jpeg";

if(file_exists($file1) ){
    $img = "<img src='$file1' width='150' />";
    echo $img;
    
}
else if (file_exists($file2)) {
  $img = "<img src='$file2' width='150' />";
echo $img;   } ?>



<input type="submit" value="" />
<input type="submit" value="" />

<table style="width:100%">
  <tr>
    <td>First Name</td>
    <td><?php echo "$users->first_name" ?></td>
  </tr>
  <tr><td>Surname</td> 
   <td><?php echo "$users->surname" ?> </td></tr>
    <tr><td>User ID</td>
    <td><?php echo $users->id ?> <br></td></tr>
    <tr><td>Email</td>
    <td><?php echo $users->email ?> <br></td></tr>
    <tr><td>Password</td>
    <td><?php echo $users->password ?> <br></td></tr>
    <tr><td>Jointed Date</td>
    <td><?php echo $users->created_at ?></td></tr>
  
</table>

        
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


       
    </body>
</html>

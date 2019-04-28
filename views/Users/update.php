<div id="banner">
<p>Fill in the following form to update the user:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Update User</h2>
    <p>
<label>first_name</label>
        <input class="w3-input" type="text" name="first_name" value="<?= $user->first_name; ?>">
        
    </p>
    <p>
  <label>surname</label>
        <input class="w3-input" type="text" name="surname" value="<?= $user->surname; ?>" >
      
    </p>
    <label>username</label>
        <input class="w3-input" type="text" name="username" value="<?= $user->username; ?>" >
      
        </p>
     
    </p>
     <label>password</label>
<!--        <input class="w3-input" type="text" name="password"  >-->

     
        
    <a href='?controller=user&action=updatePassword&id=<?php echo $_SESSION["id"]; ?>'class='btn btn-primary'>Reset Password</a>
      
    </p>
    <label>email</label>
        <input class="w3-input" type="text" name="email" value="<?= $user->email; ?>" >
      
    </p>
     <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<?php 
    $file1 = 'views/images/' .$user->username .".jpg";
$file2 = 'views/images/' .$user->username .".jpeg";

if(file_exists($file1) ){
//   $img= '<img src="$file1"  class="avatar">';
    $img = "<img src='$file1' class='sticky' width='200px' />";
    echo $img;
    
}
else if (file_exists($file2)) {
//    $img= '<img src="$file2"  class="avatar">';
  $img = "<img src='$file2' class='sticky' width='200px' />";
echo $img;  

}else{
    $img="<img src='views/images/avatar.jpg' class='sticky' width='200px' />";
echo $img;
}?> 


  <br/>
  <input type="file" name="myUploader" class="w3-btn w3-pink" />
            

  <p>
    <input class="w3-btn w3-gray" type="submit" value="Update user">
    </p>
</form>


</div>



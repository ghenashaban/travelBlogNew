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

<div id="banner">
    <div class="row">
         <div class="col-sm-3">       

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
         </div>
        <div class="col-sm-6">
             <h3>Fill the following to update: </h3>
        </div>
    </div>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
<div class="col-sm-12">
    <p>
<label>first name</label>
        <input class="w3-input" type="text" name="first_name" value="<?= $user->first_name; ?>">
        
    </p>
        </div>
    <div class="col-sm-12">
    <p>
  <label>surname</label>

     <input class="w3-input" type="text" name="surname" value="<?= $user->surname; ?>">
    </p>
    </div>
  
    <div class="col-sm-12">
    <label>username</label>
        <input class="w3-input" type="text" name="username" value="<?= $user->username; ?>" >
      
        </p>
    </div>
     
    <div class="col-sm-12">
     <label>password</label>
<!--        <input class="w3-input" type="text" name="password"  >-->
   
     
        
    <a href='?controller=user&action=updatePassword&id=<?php echo $_SESSION["id"]; ?>'class='btn btn-primary'>Reset Password</a>
      
    </p>
    </div>
    <div class="col-sm-12">
    <label>email</label>
        <input class="w3-input" type="text" name="email" value="<?= $user->email; ?>" >
      
    </p>
    </div>
    <div class="col-sm-12">
     <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />



  <br/>
   
  <input type="file" name="myUploader" class="w3-btn w3-pink" />
            

  <p>
    <input class="w3-btn w3-gray" type="submit" value="Update user">
    </p>
    </div>

</form>

       

    <div class="row">
                <div class="col-2">
                    <button onclick="goBack()" class="previous"> &laquo; Back</button> </div>    
                <div class="col-8">  
                </div> </div>
</div>
 <script>
function goBack() {
  window.history.back();
}

                    </script> 

<?php require_once 'views/pages/divs.php'; ?>
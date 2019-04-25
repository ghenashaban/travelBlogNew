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
//   $img= '<img src="$file1"  class="avatar">';
    $img = "<img src='$file1' class='sticky' />";
    echo $img;
    
}
else if (file_exists($file2)) {
//    $img= '<img src="$file2"  class="avatar">';
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
        <h6>Update this users account here:</h6>
        <a href='?controller=user&action=update&id=<?php echo $users->id; ?>'class='btn btn-primary'>Update</a>
             <a href='?controller=user&action=delete&id=<?php echo $users->id; ?>' class='btn btn-primary' onclick="ConfirmDelete()">Delete User</a>
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
    <tr><td>User ID</td>
    <td><?php echo $users->id ?> <br></td></tr>
    <tr><td>Email</td>
    <td><?php echo $users->email ?> <br></td></tr>
<!--    <tr><td>Password</td>
    <td><?php echo $users->password ?> <br></td></tr>-->
    <tr><td>Jointed Date</td>
    <td><?php echo $users->created_at ?></td></tr>
  
</table>
      </div>
 </div>

     

      
 </div>
       
    </body>
        <script>
            function ConfirmDelete() {
                var txt;
                var r = confirm("Are you sure you want to delete this user?");
                if (r === true) {
                    txt = "You pressed OK! ";
                    window.location.href = ("?controller=user&action=delete&id=<?php echo
                    $user->id;
                ?>");
                } else {
                   txt = "You pressed Cancel!";
               }
               document.getElementById("demo").innerHTML = txt;
           }
            
            </script>
          
   

   
</html>

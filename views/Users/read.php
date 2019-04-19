<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        See below for full details of this registered User:
        <br>
<?php echo "$users->first_name" ?>  
<?php echo "$users->surname" ?>  <br>

<?php echo $users->id ?> <br>
<?php echo $users->email ?> <br>
<?php echo $users->role ?> <br>
<?php echo $users->password ?> <br>
<?php echo $users->created_at ?> <br>
<?php echo $users->updated_at ?> <br>
<?php echo $users->country_id ?> <br>
        
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

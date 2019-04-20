<p>Fill in the following form to Register:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    
 
</
    <p>
        <label>First_name</label>
        <input class="w3-input" type="text" name="first_name" required autofocus>
        
    </p>
        <p>
            <label>surname</label>
        <input class="w3-input" type="text" name="surname" required> 
    </p>
     <p>
            <label>username</label>
        <input class="w3-input" type="text" name="username" required>
        
    </p>
    <p>
       <label>email</label>
        <input class="w3-input" type="text" name="email" required>
        
    </p>
    <p>
     <label>password</label>
        <input class="w3-input" type="text" name="password" required>
        
    </p>
    <p>
         <label>role</label>
        <input class="w3-input" type="text" name="role" required>
        
    </p>
            
  <p>
    <input class="w3-btn w3-pink" type="submit" value="Register">
  </p>
</form>

<?php $username=$_POST["username"];

echo $username;

?>



           
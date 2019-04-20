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
     <label>password</label>
        <input class="w3-input" type="text" name="password" value="<?= $user->password; ?>" >
      
    </p>
    <label>email</label>
        <input class="w3-input" type="text" name="email" value="<?= $user->email; ?>" >
      
    </p>
     
            

  <p>
    <input class="w3-btn w3-gray" type="submit" value="Update Post">
    </p>
</form>

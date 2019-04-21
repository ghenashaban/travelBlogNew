<!-- signup for for view/ user/ update-->
        p>Fill in the following form to update your data:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Update Userdata</h2>
    <p>
        <input class="w3-input" type="text" name="first_name value="<?= $user->first_name; ?>">
        <label>First Name</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="surname" value="<?= $user->surname; ?>">
        <label>Surame</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="username" value="<?= $user->username; ?>">
        <label>Username</label>
    </p>
    <p>
        <input class="w3-input" type="text" email="name" value="<?= $user->email; ?>">
        <label>Email</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="role" value="<?= $user->role; ?>">
        <label>Role</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="password" value="<?= $user->password; ?>" >
        <label>Password</label>
    </p>
            
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<?php 

/*
  1 Updated  routes in line 31 : 'user' =>['register', 'update']
 
 2  Add to user controller the following:
foreach ($users as $user) { ?>
<p>  <td>   <?php echo $user>username; ?> </td>
<a href='controller=user&action=read&id=<?php echo $user->id; ?>' “ class='btn btn-primary'>Update your details ….</a>
<a href='?controller=user&action=update&id=<?php echo $user->id; ?>'class='btn btn-primary'>Update</a>
<a href='' “class='btn btn-primary'>Delete</a>
</p>
<?php } ?>
                            
 <a href=''” class='btn btn-primary'>Add new user.</a> 

 3 in model /user.php add public function update
 *   public static function update($id) {
    $db = Db::getIstance();
    $req = $db->prepare("insert into user( first_name, surname, username, email, role, password ) values ( :first_name, :surname, :username, :email, :role, :password");
        $$req->bindParam(':first_name', $first_name, PDO::PARAM_STR);
          $req->bindParam(':surname', $surname, PDO::PARAM_STR);
          $req->bindParam(':username', $username, PDO::PARAM_STR);
          $req->bindParam(':email', $email, PDO::PARAM_STR);
         $req->bindParam(':role', $role, PDO::PARAM_STR);
         $req->bindParam(':password', $password, PDO::PARAM_STR)

  if(isset($_POST['first_name'])&& $_POST['first_name']!=""){
        $filteredFirst_name = filter_input(INPUT_POST,'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['surname'])&& $_POST['surname']!=""){
        $filteredSurname = filter_input(INPUT_POST,'surname', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['username'])&& $_POST['username']!=""){
        $filteredUsername = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['email'])&& $_POST['email']!=""){
        $filteredEmail = filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['role'])&& $_POST['role']!=""){
        $filteredRole = filter_input(INPUT_POST,'role', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['password'])&& $_POST['password']!=""){
        $filteredPassword = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);
    }


$first_name = $filteredFirst_name;
$surname = $filteredSurname;
$username = $filteredUsername;
$email = $filteredEmail;
$role = $filteredRole;
$password = $filteredPassword;

$req->execute();


    }

 * 
 * 
 * 
 *  */





    
        // put your code here
        ?>
    </body>
</html>

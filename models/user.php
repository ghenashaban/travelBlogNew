<?php

//require_once 'models/Exception.php';
//
use function models\Exception\logException;

class User {

    public $id;
    public $first_name;
    public $surname;
    public $username;
    public $email;
    public $role;
    private $password;
    public $created_at;
    public $updated_at;
    public $country_id;
    public $country;

    public function __construct($id, $first_name, $surname, $username, $email, $role, $password, $created_at, $updated_at, $country_id, $country) {

        $this->id = $id;
        $this->first_name = $first_name;
        $this->surname = $surname;
        $this->username = $username;
        $this->email = $email;
        $this->role = $role;
        $this->password = $password;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->country_id = $country_id;
        $this->country = $country;
    }

//hash the password so it is not visible in db
//call the hash function passing in clear password that was passed in
//returns hashedpassword
    public static function internal_hash($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public static function all() {
        try {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query("select * from user where role='User' ");
            foreach ($req->fetchAll() as $user) {
                $list[] = new User($user['id'], $user['first_name'], $user['surname'], $user['username'], $user['email'], $user['role'], $user['password'], $user['created_at'], $user['updated_at'], $user['country_id'], "");
            }
            return $list;
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function allBloggers() {
        try {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query("select * from user where role='Admin'  ");
            foreach ($req->fetchAll() as $user) {
                $list[] = new User($user['id'], $user['first_name'], $user['surname'], $user['username'], $user['email'], $user['role'], $user['password'], $user['created_at'], $user['updated_at'], $user['country_id'], "");
            }
            return $list;
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

//function checks if there are existing
//records in user table for a given username
    public static function userNameExists($userName) {
        try {

            $db = Db::getInstance();
            $req = $db->prepare('select count(username) from user where username = :username ');
            $req->execute(array('username' => $userName));
            $count = (int) $req->fetch()[0];
            if ($count > 0)
                return true;
            return false;
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

//function checks if there are existing
//records in user table for a given email
    public static function emailExists($email) {
        try {

            $db = Db::getInstance();
            $req = $db->prepare('select count(email) from user where email = :email ');
            $req->execute(array('email' => $email));
            $count = (int) $req->fetch()[0];
            if ($count > 0)
                return true;
            return false;
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function find($id) {
        try {
            $db = Db::getInstance();
            $id = intval($id);
            $req = $db->prepare('select * from user where id = :id ');
            $req->execute(array('id' => $id));
            $user = $req->fetch();
            if ($user) {
                return new User($user['id'], $user['first_name'], $user['surname'], $user['username'], $user['email'], $user['role'], $user['password'], $user['created_at'], $user['updated_at'], $user['country_id'], $user['image'], "");
            } else {
                throw new Exception('A real exception should go here');
            }
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function login() {
        try {
            $db = Db::getInstance();
            if (isset($_POST['submit'])) {
                $sqlquery = "SELECT username, password, role, id from user WHERE username=:username";
                $querystring = $db->prepare($sqlquery);
                $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
                $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                $querystring->bindParam(':username', $username, PDO::PARAM_INT);
                $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);
//             $querystring->bindParam(':password', $password, PDO::PARAM_INT);
                $querystring->execute(
                        array(
                            'username' => $_POST["username"])
                );

                $count = $querystring->rowCount();

                if ($count > 0) {

                    $result = $querystring->fetch();


                    if (password_verify($_POST["password"], $result['password'])) {
                        $_SESSION["username"] = $result['username'];
                        $_SESSION["role"] = $result['role'];
                        $_SESSION["password"] = $result['password'];
                        $_SESSION["id"] = $result['id'];

                        header("location:index.php");
                    } else {
                        echo ' <div class="container"> <div id="logo" class="text-center"> 
                        <h2>invalid username or password!</h2><p></p>
                    </div></div>';
                    }
                } else {
                    echo '
        <div class="container"> <div id="logo" class="text-center"> 
                        <h2>Whoops, you are not registered yet!</h2><p></p>
                    </div></div>';
                }
            }
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    Public static function logout() {
        try {
            unset($_SESSION["username"]);
            unset($_SESSION["id"]);
            session_destroy();
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function register() {
        try {
            $db = Db::getInstance();
            $req = $db->prepare("insert into user(first_name, surname, username, password, email, role, country_id, image ) values (( :first_name),( :surname), (:username), ( :password),( :email), (:role),((select id from country where country=:country)),(:image) )");

            $req->bindParam(':first_name', $first_name);
            $req->bindParam(':surname', $surname);
            $req->bindParam(':username', $username);
            $req->bindParam(':email', $email);
            $req->bindParam(':role', $role);
            $req->bindParam(':country', $country);
            $req->bindParam(':password', $password);
            $req->bindParam(':image', $image);

            if (isset($_POST['first_name']) && $_POST['first_name'] != "") {
                $filteredFirst = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['role']) && $_POST['role'] != "") {
                $filteredRole = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['country']) && $_POST['country'] != "") {
                $filteredCountry = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['surname']) && $_POST['surname'] != "") {
                $filteredSecond = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['username']) && $_POST['username'] != "") {
                $filteredUser = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['email']) && $_POST['email'] != "") {
                $filteredEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
            }

            if (isset($_POST['password']) && $_POST['password'] != "") {
                $filteredPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
            }

            $role = $filteredRole;
            $country = $filteredCountry;
            $first_name = $filteredFirst;
            $surname = $filteredSecond;
            $username = $filteredUser;
            $email = $filteredEmail;

            $password = User::internal_hash($filteredPassword);

            $req->execute();
            User::uploadFile($username);
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function update($id) {
        try {
            $db = Db::getInstance();
            $req = $db->prepare("Update user set first_name=:first_name ,  surname=:surname , username=:username , email=:email  where id=:id");
            $req->bindParam(':first_name', $first_name);
            $req->bindParam(':surname', $surname);
            $req->bindParam(':username', $username);
            $req->bindParam(':email', $email);
         
            $req->bindParam(':id', $id);


            if (isset($_POST['username']) && $_POST['username'] != "") {
                $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
                $username = $filteredUsername;
            }
            if (isset($_POST['first_name']) && $_POST['first_name'] != "") {
                $filteredFirst_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
                $first_name = $filteredFirst_name;
            }
            if (isset($_POST['surname']) && $_POST['surname'] != "") {
                $filteredSurname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_SPECIAL_CHARS);
                $surname = $filteredSurname;
            }
            if (isset($_POST['email']) && $_POST['email'] != "") {
                $filteredEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
                $email = $filteredEmail;
            }
           



            $req->execute();

            User::uploadFile($username);
            if (!empty($_FILES[self::InputKey]['username'])) {
                User::uploadFile($username);
            }
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function updatePassword($id) {
        try {
            $db = Db::getInstance();
            $req = $db->prepare("Update user set password=:password where id=:id");

            $req->bindParam(':password', $password);
            $req->bindParam(':id', $id);


            if (isset($_POST['password']) && $_POST['password'] != "") {
                $filteredPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
                $password = User::internal_hash($filteredPassword);
            }
            $oldPassword = $_POST["oldPassword"];
            $hashedOld = User::internal_hash($oldPassword);
            $sessionID = $_SESSION['id'];

            if (password_verify($_POST["oldPassword"], $_SESSION['password'])) {
                 echo '<div id="banner">';
                echo "<h2>Password Reset Successfully</h2>";
                echo "<img src=views/images/tick.png>";
                echo '</div>';
                $req->execute();
            } else {
                echo '<div id="banner">';
                echo "<h2>Sorry, you have entered a wrong password";
                
                echo "<br> Please try again! </h2>";
                echo '<a href="?controller=user&action=updatePassword&id= ' . $sessionID . '" class="btn btn-primary"> Reset Password</a>';
                 echo '</div>';
                exit();
            }
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function remove($id) {
        try {
            $db = Db::getInstance();
//make sure $id is an integer
            $id = intval($id);
            $req = $db->prepare('delete FROM user WHERE id = :id');
// the query was prepared, now replace :id with the actual $id value
            $req->execute(array('id' => $id));
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    public static function registerAdmin() {
        try {
            $db = Db::getInstance();
            $req = $db->prepare("insert into user(first_name, surname, username, password, role, email, country_id ) values (( :first_name),( :surname),( :username),(  :password),( :role),( :email),(select id from country where country=:country))");

            $req->bindParam(':first_name', $first_name);
            $req->bindParam(':surname', $surname);
            $req->bindParam(':username', $username);
            $req->bindParam(':email', $email);
            $req->bindParam(':role', $role);
            $req->bindParam(':password', $password);
            $req->bindParam(':country', $country);

            if (isset($_POST['first_name']) && $_POST['first_name'] != "") {
                $filteredFirst = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['surname']) && $_POST['surname'] != "") {
                $filteredSecond = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['username']) && $_POST['username'] != "") {
                $filteredUser = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['email']) && $_POST['email'] != "") {
                $filteredEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['country']) && $_POST['country'] != "") {
                $filteredCountry = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['role']) && $_POST['role'] != "") {
                $filteredRole = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_SPECIAL_CHARS);
            }

            if (isset($_POST['password']) && $_POST['password'] != "") {
                $filteredPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
            }

            $country = $filteredCountry;
            $role = $filteredRole;
            $first_name = $filteredFirst;
            $surname = $filteredSecond;
            $username = $filteredUser;
            $email = $filteredEmail;

            $password = User::internal_hash($filteredPassword);

            $req->execute();

            User::uploadFile($username);
            if (!empty($_FILES[self::InputKey]['username'])) {
                User::uploadFile($username);
            }
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

    const AllowedTypes = ['image/jpeg', 'image/jpg', 'image/bmp', 'image/png'];
    const InputKey = 'myUploader';

    public static function uploadFile(string $username) {
        try {

            if (empty($_FILES[self::InputKey])) {
//die("File Missing!");
                trigger_error("File Missing!");
            }

//	if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
//		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
//	}

            $tempFile = $_FILES[self::InputKey]['tmp_name'];
            $path = "C:/xampp/htdocs/travelBlogNew/views/images/";
            $destinationFile = $path . $username . '.jpg';
            $imagePath = "uploads/" . $username . '.jpg';

            if (!move_uploaded_file($tempFile, $destinationFile)) {
                return $imagePath;
            }



            if (file_exists($tempFile)) {
                unlink($tempFile);
            }
            return $imagePath;
        } catch (Exception $e) {
            call('pages', 'error');
            logException($e);
        }
    }

}

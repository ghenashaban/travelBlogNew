<?php

class User {

    public $id;
    public $first_name;
    public $surname;
    public $username;
    public $email;
    public $role;
    public $password;
    public $created_at;
    public $updated_at;
    public $country_id;

    public function __construct($id, $first_name, $surname, $username, $email, $role, $password, $created_at, $updated_at, $country_id) {

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
    }

    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query("select * from user ");
        foreach ($req->fetchAll() as $user) {
            $list[] = new User($user['id'], $user['first_name'], $user['surname'], $user['username'], $user['email'], $user['role'], $user['password'], $user['created_at'], $user['updated_at'], $user['country_id']);
        }
        return $list;
    }

    public static function find($id) {
        $db = Db::getInstance();
        $id = intval($id);
        $req = $db->prepare('select * from user where id = :id ');
        $req->execute(array('id' => $id));
        $user = $req->fetch();
        if ($user) {
            return new User($user['id'], $user['first_name'], $user['surname'], $user['username'], $user['email'], $user['role'], $user['password'], $user['created_at'], $user['updated_at'], $user['country_id']);
        } else {
            throw new Exception('A real exception should go here');
        }
    }
    public static function login() {
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



                if (($_POST["password"]== $result['password'])) {

                     $_SESSION["username"] = $result['username'];
                    $_SESSION["role"] = $result['role'];
                    $_SESSION["id"]=$result['id'];
                   
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
    }
    
    Public static function logout() {
unset($_SESSION["username"]);
unset($_SESSION["id"]);
        session_destroy();

}
public static function register() {
$db = Db::getInstance();
$req = $db->prepare("insert into user(first_name, surname, username, password, email ) values ( :first_name, :surname, :username,  :password, :email)");

$req->bindParam(':first_name', $first_name);
          $req->bindParam(':surname', $surname);
          $req->bindParam(':username', $username);
          $req->bindParam(':email', $email);
        
         $req->bindParam(':password', $password);

    if(isset($_POST['first_name'])&& $_POST['first_name']!=""){
        $filteredFirst = filter_input(INPUT_POST,'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
    }
     if(isset($_POST['surname'])&& $_POST['surname']!=""){
        $filteredSecond = filter_input(INPUT_POST,'surname', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['username'])&& $_POST['username']!=""){
        $filteredUser = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
    }
     if(isset($_POST['email'])&& $_POST['email']!=""){
        $filteredEmail = filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
     if(isset($_POST['password'])&& $_POST['password']!=""){
        $filteredPassword = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);
    }

$first_name = $filteredFirst;
$surname = $filteredSecond;
$username = $filteredUser;
$email = $filteredEmail;

$password = $filteredPassword;

$req->execute();
}

  public static function update($id) {
    $db = Db::getInstance();
    $req = $db->prepare("Update user set first_name=:first_name ,  surname=:surname , username=:username , email=:email , password=:password where id=:id");
    $req->bindParam(':first_name', $first_name);
    $req->bindParam(':surname', $surname);
    $req->bindParam(':username', $username);
    $req->bindParam(':email', $email);
    $req->bindParam(':password', $password);
    $req->bindParam(':id', $id);


    if(isset($_POST['username'])&& $_POST['username']!=""){
        $filteredUsername = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['first_name'])&& $_POST['first_name']!=""){
        $filteredFirst_name = filter_input(INPUT_POST,'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
    }
if(isset($_POST['surname'])&& $_POST['surname']!=""){
        $filteredSurname = filter_input(INPUT_POST,'surname', FILTER_SANITIZE_SPECIAL_CHARS);
    }
if(isset($_POST['email'])&& $_POST['email']!=""){
        $filteredEmail = filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS);
    }
if(isset($_POST['password'])&& $_POST['password']!=""){
        $filteredPassword = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);
    }

$username=$filteredUsername;
$first_name=$filteredFirst_name;
$surname=$filteredSurname;
$email=$filteredEmail;
$password=$filteredPassword;


$req->execute();



    }
  public static function remove($id) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('delete FROM user WHERE id = :id');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
  }
    
}
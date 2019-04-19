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
            
            } else
            {
            throw new Exception('A real exception should go here');
        }
    }

}

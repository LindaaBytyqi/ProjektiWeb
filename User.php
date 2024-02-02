<?php

class User{
    private $id;
    private $name;
    private $email;
    private $password;
    private $phonenumber;
    private $role;

    private $isAdmin;

    function __construct($id,$name,$email,$password,$phonenumber,$role){
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->phonenumber = $phonenumber;
            $this->role = $role;
    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
    function getPhoneNumber(){
        return $this->phonenumber;
    }
    function getRole(){
        return $this->role;
    }

    public function getIsAdmin() {
        return $this->isAdmin;
    }

    public static function createUser($id, $name, $email, $password, $phonenumber, $isAdmin = 0) {
        return new self($id, $name, $email, $password, $phonenumber, $isAdmin);
    }

}

?>
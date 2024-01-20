<?php

class user{
    private $id;
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $birthday;
    private $password;
    private $confirm;

    function __construct($id,$name,$surname,$phone,$birthday,$email,$password,$confirm){
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->birthday = $birthday;
        $this->confirm = $confirm;
    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getSurname(){
        return $this->surname;
    }
    function getEmail(){
        return $this->email;
    }
    function getBirthday(){
        return $this->birthday;
    }
    function getPassword(){
        return $this->password;
    }
    function getPhone(){
        return $this->phone;
    }
    function getConfirm(){
        return $this->confirm;
    }
}
?>
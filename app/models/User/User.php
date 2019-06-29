<?php


class User
{
    private $id;
    public $username;
    public $email;

    public function __construct()
    {
//        $this->id = $_val->userID;
//        $this->username = $_val->username;
//        $this->email = $_val->email;
    }

    public static function isLogged(){
        return isset($_SESSION['logged']);
    }

    public function getUserStatus(){

    }

    public function userUpdateStatus(){

    }

    public function getImage(){

    }

    public function userUpdateImage(){

    }
}
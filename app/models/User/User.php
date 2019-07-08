<?php

class User
{
    private $id;
    public $username;
    public $email;
    public $statusID;
    public $statusName;

    public static function isLogged(){
        return isset($_SESSION['logged']);
    }

    public function GetUserInfo(){

    }
}
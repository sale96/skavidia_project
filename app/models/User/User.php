<?php

class User
{
    public static function isLogged(){
        return isset($_SESSION['logged']);
    }

    public static function setUser($id){
        $_SESSION['logged'] = $id;
    }

    public static function GetUserInfo(){
        if(isset($_SESSION['logged'])){
        }
    }
}
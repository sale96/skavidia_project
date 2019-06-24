<?php
/**
 * Created by PhpStorm.
 * User: Sale
 * Date: 6/24/2019
 * Time: 9:58 PM
 */

class User
{
    private $id;
    public $username;
    public $email;

    public function __construct($_val)
    {
        $this->id = $_val->userID;
        $this->username = $_val->username;
        $this->email = $_val->email;

        
    }
}
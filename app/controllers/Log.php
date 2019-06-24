<?php

require '../app/lib/Controller.php';

class Log extends Controller {
    public function login(){
        $this->view('log/login/login');
    }

    public function register(){
        if(isset($_POST['register-submit'])){
            $username = $_POST['register_name'];
            $password = $_POST['register_password'];
            $email = $_POST['register_email'];
            $rep_pass = $_POST['register_rep_password'];

            if(empty($username) || empty($password) || empty($email) || empty($rep_pass)){
                echo "Fileds are not supposed to be empty";
            }else{

            }
        }
        $this->view('log/register/register');
    }

    public function forgotPassword(){
        $this->view('log/forgotPassword/forgotPassword');
    }
}
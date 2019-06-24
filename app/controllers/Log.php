<?php

require '../app/lib/Controller.php';

class Log extends Controller {
    public function Login(){
        $this->view('log/login/login');
    }

    public function Register(){
        if(isset($_POST['register_submit'])){
            echo '123';
        }
        $this->view('log/register/register');
    }

    public function ForgotPassword(){
        $this->view('log/forgotPassword/forgotPassword');
    }
}
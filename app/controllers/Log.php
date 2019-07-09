<?php

require '../app/lib/Controller.php';

class Log extends Controller {

    public $user;

    public function __construct()
    {
        $this->user = $this->model('User', 'User');

        if(User::isLogged()){
            header("Location: ". URL_ROOT);
            exit();
        }
    }

    public function login(){
        $this->view('log/login/login');
    }

    public function register(){
        $data['error'] = [];
        if(isset($_POST['register-submit'])){
            $username = $_POST['register_name'];
            $password = $_POST['register_password'];
            $email = $_POST['register_email'];
            $rep_pass = $_POST['register_rep_password'];

            if(empty($username) || empty($password) || empty($email) || empty($rep_pass)){
                echo "Fileds are not supposed to be empty";
            }else{
                require APP_ROOT.'/helpers/regulars.php';

                if(!preg_match($usernameRegular, $username)){
                    array_push($data['error'], 'Username is not valid.');
                }

                if(!preg_match($passwordRegular, $password)){
                    array_push($data['error'], 'Password must contain at least 8 characters, at least 1 letter, at least 1 number.');
                }

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    array_push($data['error'], 'Your email address is not valid.');
                }

                if(count($data['error']) == 0){
                    $conn = $database->getConnection();
                }
            }
        }

        $this->view('log/register/register');
    }

    public function forgotPassword(){
        $this->view('log/forgotPassword/forgotPassword');
    }
}
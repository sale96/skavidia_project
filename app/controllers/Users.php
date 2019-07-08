<?php

require '../app/lib/Controller.php';

class Users extends Controller
{
    public $user;

    public function __construct()
    {
        $this->user = $this->model('User', 'User');

        if(!User::isLogged()){
            header('Location: '. URL_ROOT);
            exit();
        }

    }

    public function profile(){
        $this->view('user/inbox/inbox');
    }

    public function inbox(){
        $this->view('user/profile/profile');
    }

}
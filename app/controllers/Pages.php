<?php
require '../app/lib/Controller.php';

class Pages extends Controller
{
    public $user;

    public function __construct()
    {
        $user = $this->model('User','User');
    }

    public function index(){
        $data['param'] = 'index';
        $this->view('index/index', $data);
    }

    public function about(){
        $data['param'] = 'about';
        $user = $this->model('User','User');
        $this->view('about/about', $data);
    }
}
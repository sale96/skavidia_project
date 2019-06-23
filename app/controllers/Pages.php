<?php
require '../app/lib/Controller.php';

class Pages extends Controller
{
    public function index(){
        $data['param'] = 'index';
        $this->view('index/index', $data);
    }

    public function about(){
        $data['param'] = 'about';
        $this->view('about/about', $data);
    }
}
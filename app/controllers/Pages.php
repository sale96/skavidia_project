<?php
require '../app/lib/Controller.php';

class Pages extends Controller
{
    public function index(){
        $this->view('index/index');
    }

    public function about(){
        $this->view('about/about');
    }
}
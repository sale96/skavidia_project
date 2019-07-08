<?php


class Controller{
    public function model($folder ,$model){
        require_once "../app/models/{$folder}/{$model}.php";

        return new $model;
    }

    public function view($view, $data = []){
        require "../app/views/fixed/header.php";
        if(file_exists("../app/views/pages/{$view}.php")){
            require "../app/views/pages/{$view}.php";
        }else{
            die("View {$view} : does not exist");
        }
        require "../app/views/fixed/footer.php";
    }
}
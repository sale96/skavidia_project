<?php


class Controller{
    public function model($model){
        require_once "models/{$model}.php";

        return new $model;
    }

    public function view($view, $data = []){
        if(file_exists("views/pages/{$view}.php")){
            require "views/pages/{$view}.php";
        }else{
            die("View {$view} : does not exist");
        }
    }
}
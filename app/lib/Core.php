<?php

class Core{
    protected $current_controller = 'Pages';
    protected $current_method = 'index';
    protected $args = [];

    public function __construct(){
        $arr = $this->getParams();

        if(file_exists("../app/controllers/{$arr[0]}.php")){
            $this->current_controller = $arr[0];
            unset($arr[0]);
        }

        require "../app/controllers/{$this->current_controller}.php";
        $this->current_controller = new $this->current_controller;

        if(isset($arr[1])){
            if(method_exists($this->current_controller, $arr[1])){
                $this->current_method = $arr[1];
                unset($arr[1]);
            }
        }

        $this->args = $arr ? array_values($arr) : [];

        call_user_func_array([$this->current_controller, $this->current_method], $this->args);

    }

    private function getParams(){
        if(isset($_GET['Page'])){
            $arr = trim($_GET['Page'], '');
            $arr = filter_var($arr, FILTER_SANITIZE_URL);
            $arr = explode('/', $arr);

            return $arr;
        }
    }
}
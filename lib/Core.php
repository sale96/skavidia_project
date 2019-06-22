<?php

class Core{
   protected $current_controller = 'Pages';
   protected $current_method = 'index';
   protected $args = [];

   public function __construct(){
      $arr = getParams();

      if(file_exists("controllers/{$arr[0]}.php")){
         $this->current_controller = $arr[0];
         unset($arr[0]);
      }

      require "controllers/{$this->current_controller}.php";
      $this->current_controller = new $this->current_controller;

      
   }

   public function getParams(){
      if(isset($_GET['Page'])){
         $arr = trim($_GET['Page'], '');
         $arr = filter_var($arr, FILTER_SANITIZE_URL);
         $arr = explode('/', $arr);

         return $arr;
      }
   }
}
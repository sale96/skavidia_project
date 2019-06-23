<?php
session_start();
require 'config/config.php';
spl_autoload_register(function ($class){
    require_once "lib/{$class}.php";
});


$core = new Core();
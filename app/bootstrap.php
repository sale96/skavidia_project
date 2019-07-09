<?php
session_start();
require 'config/config.php';
require 'config/Database.php';
spl_autoload_register(function ($class){
    require_once "lib/{$class}.php";
});
$database = new Database();
$database->writeLog();

$core = new Core();
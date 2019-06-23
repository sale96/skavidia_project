<?php
define('SITE_NAME', 'skaVidia');


define('URL_ROOT', 'http://localhost:8080/skavidia_project/');

//Important files
define('ENV_FILE', URL_ROOT.'config/.env');
define('LOG_FILE', URL_ROOT.'data/log.txt');

//Database configuration
define('DBNAME', Env('DBNAME'));
define('HOST', Env('HOST'));
define('USER', Env('USER'));
define('PASS', Env('PASS'));

function Env($name){
    $file = file(ENV_FILE);
    $values = '';

    foreach($file as $key => $val){
        $conf = explode('=', $val);
        if($conf[0] == $name){
            $values = trim($conf[1]);
        }
    }

    return $values;
}
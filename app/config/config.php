<?php
define('SITE_NAME', 'SkaVidia');


define('URL_ROOT', 'http://localhost/skavidia_project/');
define('APP_ROOT', dirname(dirname(__FILE__)));

//Important files
define('ENV_FILE', APP_ROOT.'\config\.env');
define('LOG_FILE', APP_ROOT.'\data\log.txt');

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
<?php
class Database{
    private $conn;

    public function __construct()
    {
        try{
            $dsn = 'mysql:host='.HOST.';dbname='.DBNAME.';charset=utf8';
            $this->conn = new PDO($dsn, USER, PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }catch(PDOException $e){
            echo 'ERROR: '. $e->getMessage();
        }
    }

    public function getConnection(){
        return $this->conn;
    }

    public function executeQuery($query){
        return $this->getConnection()->query($query)->fetchAll();
    }

    public function writeLog(){
        $open = fopen(LOG_FILE, 'a');

        if($open){
            $getRequest = isset($_GET['Page']) ? $_GET['Page'] : 'index';
            fwrite($open, "{$_SERVER['REMOTE_ADDR']} \t {$_SERVER['REQUEST_METHOD']} \t {$getRequest}\n");
            fclose($open);
        }
    }
}
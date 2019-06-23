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
}
<?php
    class Database{
        private $dsn = "mysql:host=localhost;dbname=php_oop_crud";
        private $user = "root";
        private $pass = "";
        public $conn;
        public function __construct(){
            try {
                $this->conn = new PDO($this->dsn,$this->user,$this->pass);
            } catch (PDOException $pe) {
                echo $pe->getMessage();
            }
        }
    }
    $obj = new Database();
?>
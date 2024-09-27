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
        public function insert($username, $name, $email, $phone){
            $sql="INSERT INTO users (username, name, email, phone) VALUES (:username, :name, :email, :phone)";
            $stmt=$this->conn->prepare($sql);
            $stmt->execute(['username'=>$username, 'name'=>$name, 'email'=>$email, 'phone'=>$phone]);
            return true;
        }
    }
    $obj = new Database();
?>
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
            $sql = "INSERT INTO users (username, name, email, phone) VALUES (:username, :name, :email, :phone)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['username'=>$username, 'name'=>$name, 'email'=>$email, 'phone'=>$phone]);
            return true;
        }
        public function read(){
            $data = array();
            $sql = "SELECT * FROM users";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $row){
                $data[] = $row;
            }
            return $data;
        }
        public function getUserById($id){
            $sql = "SELECT * FROM users WHERE id = :id";
            $stmt = $this->conn-prepare($stmt);
            $stmt->execute(['id'=>$id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        public function update($id, $username, $name, $email, $phone){
            $sql = "UPDATE users SET username=:username, name=:name, email=:email, phone=:phone WHERE id=:id";
            $stmt = $this->conn->prepare($sql);
            $stmt->exacute(['username'=>$username, 'name'=>$name, 'email'=>$email, 'phone'=>$phone]);
            return true;
        }
        public function delete($id){
            $sql = "DELETE users WHERE id=:id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['id'=>$id]);
            return true;
        }
        public function totalRowCount(){
            $sql = "SELECT * FROM users";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $t_row = $stmt->rowCount();
            return $t_row;
        }
    }
    $obj = new Database();
?>
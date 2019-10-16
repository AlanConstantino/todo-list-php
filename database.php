<?php
    class Database{
        private $connection;

        function __construct(){
            $this->connection = new mysqli("localhost", "root", "root", "todoList");
            $this->verifyConnection($this->connection);
        }

        function __destruct(){
            $this->connection->close();
        }

        private function verifyConnection($connection){
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            } 
            // for debugging
            /*
            else{
                echo "Successful connection";
            }
            */
        }

        function getConnection(){
            return $this->connection;
        }

        function queryDatabase($sqlQuery){
            return $this->connection->query($sqlQuery);
        }

        function closeConnection(){
            return $this->connection->close();
        }
    }

    // populate database quickly
    
    // $db = new Database();
    // for($i = 1; $i < 30; $i++){
    //     $result = $db->queryDatabase("INSERT INTO Tasks (title, date, description) VALUES ('Some title', '2019-10-16', '" . $i .  "')");
    // }
    // if(!$result){
    //     echo 'Not successful query.';
    // } else{
    //     echo 'Successful query.';
    // }
?>
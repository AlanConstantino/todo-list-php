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
?>
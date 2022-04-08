<?php
    class Database {
        
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "project2";

        protected function connect() {
            return new mysqli($this->host, $this->username, $this->password, $this->database); 
        }
    }
?>
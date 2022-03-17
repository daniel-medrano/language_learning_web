<?php
    class SqlConnection {
        
        private $sqlConnection;
        private $isConnectionUp;
        private $db_server;
        private $db_user;
        private $db_password;
        private $db_name;

        function __construct() {
            $this->db_server = "localhost";
            $this->db_user = "root";
            $this->db_password = "";
            $this->db_name = "project_progra3";
        }



        function connectDB() {
            $this->sqlConnection = new mysqli($this->db_server, $this->db_user, $this->db_password, $this->db_name);

            if (!$this->sqlConnection) {
                $this->isConnectionUp = false;
                echo "Error connecting with DB.";
                return;
            }
            $this->isConnectionUp = true;
            return $this->sqlConnection;
        }


        function disconnectDB() {
            $this->sqlConnection->close();
        }

        public function isConnectionUp() {
            return $this->isConnectionUp;
        }
    }
?>
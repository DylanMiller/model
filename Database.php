<?php
    class database {
        private $connection;
        private $host;
        private $username;
        private $password;
        private $database;
        
        public function __construct($host, $username, $password, $database) {
            $this->host =$host;
            $this->username =$username;
            $this->password =$password;
            $this->database =$database;
        }
        public function openConnection() {
            //to make this reference to the right connection i had to put $this->
            $this->connection = new mysqli($this->$host, $this->$username, $this->$password, $this->$database);
            if($this->connection->connect_error) {
                die("Error: " . $this->connection->connect_error);
}
        }
        
        public function closeConnection() {
            //isset checks to see if there is information present
            if(isset ($this->connection)) {
                $this->connection->close();
            }
        }
        
        public function query($string) {
            
        }
    }
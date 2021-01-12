<?php
    class Dbh {
        private $host = 'localhost';
        private $user = 'root';
        private $pwd = '';
        private $dbName = 'garage_oop';

        public function connect(){
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            
        }
    }
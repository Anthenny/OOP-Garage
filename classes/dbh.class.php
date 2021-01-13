<?php
    class Dbh {
        private $host = 'localhost';
        private $user = 'root';
<<<<<<< HEAD
        private $pwd = 'Anthennyanna1997';
        private $dbName = 'garage';

        public function connect(){
            $dsn = 'mysql:host=' .$this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }

=======
        private $pwd = '';
        private $dbName = 'garage_oop';

        public function connect(){
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            
        }
>>>>>>> c1240f7bf442984a034ff9b3e7398b0f05aa71b1
    }
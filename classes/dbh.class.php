<?php
    class Dbh {
        // Deze 4 gegevens zijn nodig om verbinding te maken met je datbase we maken de properties private maar de method public.
        private $host = 'localhost';
        private $user = 'root';
        private $pwd = '';
        private $dbName = 'garage';

            
        public function connect(){
            $dsn = 'mysql:host=' .$this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
    }
?>

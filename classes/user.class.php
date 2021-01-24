<?php

include 'dbh.class.php';

// Class voor de auto's deze word geextend omdat we ook verbinding willen met de datbase.
class User extends Dbh {

        // Method om users/gebruikers toe te voegen eerst ontvang je de gegevens dan connect je met de database vervolgens prepare je het en als het veilig is wordt het geexecute.
        public function createUser($name, $email, $pwd){
            $sql = "INSERT INTO logingegevens(userName, userEmail, userPwd) VALUES (?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name, $email, $pwd]);
            header('location: login.php');
        }


        public function emptyInputLogin($name, $pwd){
            $result;
            if(empty($name) || empty($pwd)){
            $result = true;
            }
            else {
                $result = false;
            }
            return $result;
        }

        // Methode om te checken  of de username in de databse staat als dit zo is check of het matched met het wachtwoord als dat zo is is de user ingelogt.
        public function loginUser($name, $pwd){
            $pwd = $_POST['pwd'];
            $sql = "SELECT * FROM logingegevens WHERE userName = ? AND userPwd = ? ";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name, $pwd]);

            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            // print_r($user);

            if($user['userName']){
                if($user['userPwd']){
                    header('location: succes.php');
                }
                }else{
                    header('location: login.php?error=verkeerdelogin');
                }
        }
}
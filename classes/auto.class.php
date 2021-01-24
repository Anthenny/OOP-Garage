<?php

// Class voor de auto's deze word geextend omdat we ook verbinding willen met de datbase.
class Auto extends Dbh {

  //Method om auto's uit mijn database te laten zien.
    public function getAuto(){
      $sql = "SELECT * FROM autogegevens";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
  
     while($result = $stmt->fetchAll()){
       return $result;
     }
    }

    // Method om auto's toe te voegen eerst ontvang je de gegevens dan connect je met de database vervolgens prepare je het en als het veilig is wordt het geexecute.
    public function addAuto($autokenteken, $automerk, $autotype, $autokmstand, $klantid){
      $sql = "INSERT INTO autogegevens(autokenteken, automerk, autotype, autokmstand, klantid) VALUES (?, ?, ?, ?, ?)";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$autokenteken, $automerk, $autotype, $autokmstand, $klantid]);
      header('location: readAuto.php');
    }

    // Selecteer een auto om deze vervolgens te update.
    public function editAuto($autokenteken){
        $sql = "SELECT * FROM autogegevens WHERE autokenteken=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$autokenteken]);
        $result = $stmt->fetch();
        return $result;
    }

    // De geselecteerde auto update prepare en execute vervolgens stuur je de gebruiker terug naar de read pagina.
    public function updateAuto($automerk, $autotype, $autokmstand, $klantid, $autokenteken){
        $sql = "UPDATE autogegevens SET automerk = ?, autotype = ?, autokmstand = ?, klantid = ? WHERE autokenteken = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$automerk, $autotype, $autokmstand, $klantid, $autokenteken]);
        header('location: readAuto.php');
    }

    // De geselecteerde auto wordt geprepared en daarna verwijderd.
    public function deleteAuto($autokenteken){
      $sql = "DELETE FROM autogegevens WHERE autokenteken = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$autokenteken]);
      header('location: readAuto.php');
    }
}
?>
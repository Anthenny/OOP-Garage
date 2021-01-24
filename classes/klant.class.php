<?php

// Class voor de klant deze word geextend omdat we ook verbinding willen met de datbase.
class Klant extends Dbh {

//Method om klanten uit mijn database te laten zien.
  public function getKlanten(){
    $sql = "SELECT * FROM klantgegevens";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

   while($result = $stmt->fetchAll()){
     return $result;
   }
  }

   // Method om klanten toe te voegen eerst ontvang je de gegevens dan connect je met de database vervolgens prepare je het en als het veilig is wordt het geexecute.
  public function addKlant($klantnaam, $klantadres, $klantpostcode, $klantplaats){
    $sql = "INSERT INTO klantgegevens(klantnaam, klantadres, klantpostcode, klantplaats) VALUES (?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$klantnaam, $klantadres, $klantpostcode, $klantplaats]);
    header('location: readKlant.php');
  }

  // Selecteer een klant om deze vervolgens te update.
  public function editKlant($klantid){
      $sql = "SELECT * FROM klantgegevens WHERE klantid=?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$klantid]);
      $result = $stmt->fetch();
      return $result;
  }

  // De geselecteerde klant update prepare en execute vervolgens stuur je de gebruiker terug naar de read pagina.
  public function updateKlant($klantnaam, $klantadres, $klantpostcode, $klantplaats, $klantid){
      $sql = "UPDATE klantgegevens SET klantnaam = ?, klantadres = ?, klantpostcode = ?, klantplaats = ? WHERE klantid = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$klantnaam, $klantadres, $klantpostcode, $klantplaats, $klantid]);
      header('location: readKlant.php');
  }

  // De geselecteerde klant wordt geprepared en daarna verwijderd.
  public function deleteKlant($klantid){
      $sql = "DELETE FROM klantgegevens WHERE klantid = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$klantid]);
      header('location: readKlant.php');
  }

}
?>
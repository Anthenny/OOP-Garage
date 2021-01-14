<?php
class Post extends Dbh{


  public function getKlant(){
    $sql = "SELECT * FROM klantgegevens";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

   while($result = $stmt->fetchAll()){
     return $result;
   }
  }

  public function addKlant($klantnaam, $klantadres, $klantpostcode, $klantplaats){
    $sql = "INSERT INTO klantgegevens(klantnaam, klantadres, klantpostcode, klantplaats) VALUES (?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$klantnaam, $klantadres, $klantpostcode, $klantplaats]);
    header('location: read.php');
  }
  public function editKlant($id){
      $sql = "SELECT * FROM klantgegevens WHERE id=$id";
      $stmt = $this->connect()->query($sql);
      if($stmt->num_rows > 0){
        $klant = $stmt->fetch();
        return $klant;
      }
    }
  }

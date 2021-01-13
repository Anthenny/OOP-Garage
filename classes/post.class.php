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
  public function editKlant($klantid){

    $sql = "SELECT * FROM klantgegevens WHERE klantid = :klantid";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(["klantid"=> $klantid]);
    $klanten = $stmt->fetch();
  }
}

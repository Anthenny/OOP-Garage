<?php

class Auto extends Dbh{

    public function getAuto(){
      $sql = "SELECT * FROM autogegevens";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
  
     while($result = $stmt->fetchAll()){
       return $result;
     }
    }
  
    public function addAuto($autokenteken, $automerk, $autotype, $autokmstand, $klantid){
      $sql = "INSERT INTO autogegevens(autokenteken, automerk, autotype, autokmstand, klantid) VALUES (?, ?, ?, ?, ?)";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$autokenteken, $automerk, $autotype, $autokmstand, $klantid]);
    }
}
?>
<?php
    include 'includes/class-autoload.inc.php';
    require_once 'templates/header.php';

    $klanten = new Klant();
    echo "<tabel>";
    foreach($klanten->getKlant() as $klant){
            echo "<tr>"; 
            echo "<div style='margin-top: 20px; margin-bottom: -30px; border: 1px solid #dedede; border-radius: 5px; background-color: #dedede;' class='container'>Klantid: " . $klant["klantid"] . "<br/>";
            echo "<td>"."Klantnaam: " . $klant["klantnaam"] . "</td>"."<br/>";
            echo "<td>"."Klantadres: " . $klant["klantadres"] . "</td>"."<br/>";
            echo "<td>"."Klantpostcode: " . $klant["klantpostcode"] . "</td>"."<br/>";
            echo "<td>"."Klantplaats: " . $klant["klantplaats"] . "</td>"."<br/>"."<br/>";
            echo "</br></div>";
             echo "<div class='container'>
            <button style='margin-top: -30px;'type='button' class='btn btn-success'><a style='color: white; text-decoration: none;' 
            href=editForm.php?klantid=$klant[klantid]>Bewerken</a></button>";
            echo "<button style='margin-left: 10px; margin-top: -30px;' type='button' class='btn btn-danger'><a style='color: white; text-decoration: none;' href='post.process.php?klantid=$klant[klantid]&send=del'>Verwijderen</a></button></div>";
            echo "</br>";
    }    
    echo "</tabel>";
    echo "<div class='container'><style'margin-top: 20px; margin-bottom: 60px; margin-left: 20px' type='button' class='btn btn-primary'><a style='color: white; text-decoration: none' href='public/auto.html'>Terug naar menu</a></style></div>";   

    require_once 'templates/footer.php';
<?php
    include 'includes/class-autoload.inc.php';
    $klant = new Read;

    if(isset($_POST['submit'])){
        $klantnaam = $_POST['klantnaam'];
        $klantadres = $_POST['klantadres'];
        $klantpostcode = $_POST['klantpostcode'];
        $klantplaats = $_POST['klantplaats'];

        $klant->addKlant($klantnaam, $klantadres, $klantpostcode, $klantplaats);
    }






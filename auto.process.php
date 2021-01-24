<?php

include 'includes/class-autoload.inc.php';
$auto = new Auto;

// Als er geklikt is op update slaat die de informatie op en voert die de method updateAuto uit.
if(isset($_POST['update'])){
    $autokenteken = $_GET['autokenteken'];
    $automerk = $_POST['automerk'];
    $autotype = $_POST['autotype'];
    $autokmstand = $_POST['autokmstand'];
    $klantid = $_POST['klantid'];

    $auto->updateAuto($automerk, $autotype, $autokmstand, $klantid, $autokenteken);
} else if($_GET['send'] ==='del'){
    $autokenteken = $_GET['autokenteken'];

    $auto->deleteAuto($autokenteken);
}

?>
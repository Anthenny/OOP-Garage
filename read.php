<?php
    include 'includes/class-autoload.inc.php';
    require_once 'templates/header.php';

    $klanten = new Read;
    $klanten->getKlant();
?>





<?php
    require_once 'templates/footer.php';
?>
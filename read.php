<?php
    include 'includes/class-autoload.inc.php';
    require_once 'templates/header.php';

    $klanten = new Post;
    $klanten->getKlant();
    
    require_once 'templates/footer.php';
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

    include 'includes/class-autoload.inc.php';
    require_once 'templates/header2.php';

    $autos = new Auto;
    $auto = $autos->editAuto($_GET['autokenteken']);

    $autokenteken = $auto['autokenteken'];
    $automerk = $auto['automerk'];
    $autotype = $auto['autotype'];
    $autokmstand = $auto['autokmstand'];
    $klantid = $auto['klantid'];
?>
<div class="container">
        <form class="needs-validation" action="auto.process.php?autokenteken=<?= $autokenteken; ?>" method="post">
            <div class="form-row">
                <div style="margin-top: 50px" class="col-md-12 mb-4">
                    <label for="validationCustom01">Nieuwe Autokenteken</label>
                    <input type="text" class="form-control" id="autokenteken" name="autokenteken" value="<?= $autokenteken; ?>">
                </div>
                <div class="col-md-12 mb-4">
                    <label for="validationCustom02">Nieuw Automerk</label>
                    <input type="text" class="form-control" id="automerk" name="automerk" value="<?= $automerk; ?>">
                </div>
                <div class="col-md-12 mb-4">
                    <label for="validationCustom03">Nieuwe Autotype</label>
                    <input type="text" class="form-control" id="autotype" name="autotype" value="<?= $autotype; ?>">
                </div>
                <div class="col-md-12 mb-4">
                    <label for="validationCustom05">Nieuwe Autokmstand</label>
                    <input type="text" class="form-control" id="autokmstand" name="autokmstand" value="<?= $autokmstand; ?>">
                </div>
                <div class="col-md-12 mb-4">
                    <label for="validationCustom05">Nieuwe Klantid</label>
                    <input type="text" class="form-control" id="klantid" name="klantid" value="<?= $klantid; ?>">
                </div>
            </div>
            <button class="btn btn-success" name="update" type="submit">Update</button>
        </form>
     </div>
<?php
    require_once 'templates/footer.php';
?>
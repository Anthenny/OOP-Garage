<?php
    include 'includes/class-autoload.inc.php';
    require_once 'templates/header.php';

    $klant = new Read();
    $klant->editKlant();
?>
    <div class="container">
        <form class="needs-validation" action = "create.process.php" method="post">
            <div class="form-row">
                <div style="margin-top: 50px" class="col-md-12 mb-4">
                    <label for="validationCustom01">Klant naam</label>
                    <input type="text" class="form-control" id="klantnaam" name="klantnaam"  placeholder="Voer hier het nieuwe voornaam in">
                </div>
                <div class="col-md-12 mb-4">
                    <label for="validationCustom02">Klant Adres</label>
                    <input type="text" class="form-control" id="klantadres" name="klantadres" placeholder="Voer het nieuwe adres in">
                </div>
                <div class="col-md-12 mb-4">
                    <label for="validationCustom03">Klant Postcode</label>
                    <input type="text" class="form-control" id="klantpostcode" name="klantpostcode" placeholder="Voer hier de nieuwe postcode in">
                </div>
                <div class="col-md-12 mb-4">
                    <label for="validationCustom05">Klant Plaats</label>
                    <input type="text" class="form-control" id="klantplaats" name="klantplaats" placeholder="Voer hier de nieuwe plaats in">
                </div>
            </div>
            <button class="btn btn-success" name="submit" type="submit">Update</button>
        </form>
     </div>
<?php
    require_once 'templates/footer.php';
?>


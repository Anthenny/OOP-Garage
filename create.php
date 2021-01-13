<?php
    include 'includes/class-autoload.inc.php';
    require_once 'templates/header.php';
?>
    <!-- Verzend formulier -->
    <div class="container">
        <form class="needs-validation" action = "create.process.php" method="post">
            <div class="form-row">
                <div style="margin-top: 50px" class="col-md-12 mb-4">
                    <label for="validationCustom01">Voornaam</label>
                    <input type="text" class="form-control" id="klantnaam" name="klantnaam"  placeholder="Voer uw voornaam in">
                </div>
                <div class="col-md-12 mb-4">
                    <label for="validationCustom02">Adres</label>
                    <input type="text" class="form-control" id="klantadres" name="klantadres" placeholder="Voer uw adres hier in">
                </div>
                <div class="col-md-12 mb-4">
                    <label for="validationCustom03">Postcode</label>
                    <input type="text" class="form-control" id="klantpostcode" name="klantpostcode" placeholder="Voer uw postcode hier in">
                </div>
                <div class="col-md-12 mb-4">
                    <label for="validationCustom05">Plaats</label>
                    <input type="text" class="form-control" id="klantplaats" name="klantplaats" placeholder="Voer uw plaats hier in">
                </div>
            </div>
            <button class="btn btn-success" name="submit" type="submit">Verzenden</button>
        </form>
     </div>
<?php
    require_once 'templates/footer.php';
?>
<?php
    include 'includes/class-autoload.inc.php';
    require_once 'templates/header.php';

    // $klant = new Post;
    // $klant = $klant->editKlant($id);
    // print_r($klant);
    $obj = new Post();
    //fetch record
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $myRecord = $obj->editKlant($id);
        print_r($myRecord);
    }
    
    $klantnaam = $klant['klantnaam'];
    $klantadres = $klant['klantadres'];
    $klantpostcode = $klant['klantpostcode'];
    $klantplaats = $klant['klantplaats'];
?>
<div class="container">
        <form class="needs-validation" action = "post.process.php" method="post">
            <div class="form-row">
                <div style="margin-top: 50px" class="col-md-12 mb-4">
                    <label for="validationCustom01">Voornaam</label>
                    <input type="text" class="form-control" id="klantnaam" name="klantnaam" value="<?= $klantnaam; ?>">
                </div>
                <div class="col-md-12 mb-4">
                    <label for="validationCustom02">Adres</label>
                    <input type="text" class="form-control" id="klantadres" name="klantadres" value="<?= $klantadres; ?>">
                </div>
                <div class="col-md-12 mb-4">
                    <label for="validationCustom03">Postcode</label>
                    <input type="text" class="form-control" id="klantpostcode" name="klantpostcode" value="<?= $klantpostcode; ?>">
                </div>
                <div class="col-md-12 mb-4">
                    <label for="validationCustom05">Plaats</label>
                    <input type="text" class="form-control" id="klantplaats" name="klantplaats" value="<?= $klantplaats; ?>">
                </div>
            </div>
            <button class="btn btn-success" name="submit" type="submit">Update</button>
        </form>
     </div>
<?php
    require_once 'templates/footer.php';
?>
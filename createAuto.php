<?php
    include 'includes/class-autoload.inc.php';
    require_once 'templates/header2.php';
    require_once 'classes/validateAuto.class.php';

    if(isset($_POST['submit'])){
        //validate entries
        $validation = new ValidateAuto($_POST);
        $errors = $validation->validateForm(); 
            if(!$errors){
            
                $auto = new Auto;

                $autokenteken = $_POST['autokenteken'];
                $automerk = $_POST['automerk'];
                $autotype = $_POST['autotype'];
                $autokmstand = $_POST['autokmstand']; 
                $klantid = $_POST['klantid'];
                
                $auto->addAuto($autokenteken, $automerk, $autotype, $autokmstand, $klantid);
            }
    }

?>
    
<!-- Verzend formulier -->
<div class="container">
    <form class="needs-validation" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-row">
            <div style="margin-top: 50px" class="col-md-12 mb-4">
                <label for="validationCustom01">Autokenteken:</label>
                <input type="text" class="form-control" name="autokenteken"
                    value="<?php echo $_POST['autokenteken'] ?? '' ?>" placeholder="Voer uw autokenteken hier in">
                <div class="error">
                    <?php echo $errors['autokenteken'] ?? '' ?>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <label for="validationCustom02">Automerk:</label>
                <input type="text" class="form-control" name="automerk" value="<?php echo $_POST['automerk'] ?? '' ?>"
                    placeholder="Voer uw automerk hier in">
                <div class="error">
                    <?php echo $errors['automerk'] ?? '' ?>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <label for="validationCustom03">Autotype:</label>
                <input type="text" class="form-control" name="autotype" value="<?php echo $_POST['autotype'] ?? '' ?>"
                    placeholder="Voeautotype hier in">
                <div class="error">
                    <?php echo $errors['autotype'] ?? '' ?>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <label for="validationCustom05">Auto kilometer stand:</label>
                <input type="text" class="form-control" name="autokmstand"
                    value="<?php echo $_POST['autokmstand'] ?? '' ?>" placeholder="Voer uw auto kilometerstand hier in">
                <div class="error">
                    <?php echo $errors['autokmstand'] ?? '' ?>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <label for="validationCustom05">Klant id:</label>
                <input type="text" class="form-control" name="klantid" value="<?php echo $_POST['klantid'] ?? '' ?>"
                    placeholder="Voer uw klantid hier in">
                <div class="error">
                    <?php echo $errors['klantid'] ?? '' ?>
                </div>
            </div>
        </div>
        <button class="btn btn-success" name="submit" type="submit">Verzenden</button>
    </form>
</div>
<!-- Einde Verzend formulier -->
<?php
    require_once 'templates/footer.php';
?>



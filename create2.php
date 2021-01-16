<?php
    include 'includes/class-autoload.inc.php';
    require_once 'templates/navbar.php';
?>
    <div class="container">
    <form class="needs-validation" action = "post.process.php" method="post" novalidate>
     <div style="margin-top: 50px" class="form-row">
         <div class="col-md-12 mb-4">
               <label for="validationCustom01">Autokenteken</label>
         <input type="text" class="form-control" id="autokenteken" name="autokenteken"  placeholder="Voer het kenteken nummer in" required>
         <div class="invalid-feedback">
            Autokenteken klopt niet
         </div>
         </div>
         <div class="col-md-12 mb-4">
               <label for="validationCustom02">Automerk</label>
         <input type="text" class="form-control" id="automerk" name="automerk" placeholder="Voer het automerk in" required>
         <div class="invalid-feedback">
            Automerk klopt niet
         </div>
         </div>
           <div class="form-row">
         <div class="col-md-12 mb-4">
               <label for="validationCustom03">Autotype</label>
         <input type="text" class="form-control" id="autotype" name="autotype" placeholder="Voer het type auto in." required>
         <div class="invalid-feedback">
            Type auto klopt niet
         </div>
         </div>
         <div class="col-md-12 mb-4">
               <label for="validationCustom05">Auto kilometer stand</label>
         <input type="text" class="form-control" id="autokmstand" name="autokmstand" placeholder="Voer de kilometer stand van de auto in" required>
         <div class="invalid-feedback">
            Kilometer stand klopt niet
         </div>
         </div>
         <div class="col-md-12 mb-4">
               <label for="validationCustom05">Klant id</label>
         <input type="text" class="form-control" id="klantid" name="klantid" placeholder="Voer hier de klantid in" required>
         <div class="invalid-feedback">
            Klantid klopt niet
         </div>
         </div>
     </div>
     <button class="btn btn-primary" name="submit" type="submit">Verzenden</button>
     </form>
    </div>
<?php
    require_once 'templates/footer.php';
?>
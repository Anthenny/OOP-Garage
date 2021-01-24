<?php
    include 'includes/class-autoload.inc.php';
    require_once 'templates/header1.php';
?>
<div class="container">
  <div style="margin-top: 50px" class="jumbotron">
    <h1 class="display-4">Welkom bij uw dashboard</h1>
    <p class="lead">Dit is een beheersysteem van het garage</p>
    <hr class="my-4">
    <p>U kan vanaf hier autos's en klanten beheren</p>
    <p class="lead">
    </p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="card-body">
        <h5 class="card-title">Gegevens toevoegen</h5>
        <p class="card-text">Hier kunt u auto's of klanten aanmaken</p>
        <a href="createKlant.php" class="btn btn-success">Create</a>
      </div>
    </div>
    <div class="col-sm">
      <div class="card-body">
        <h5 class="card-title">Gegevens lezen</h5>
        <p class="card-text">Hier kunt u auto's of klanten aflezen</p>
        <a href="readKlant.php" class="btn btn-primary">Read</a>
      </div>
    </div>
    <div class="col-sm">
      <div class="card-body">
        <h5 class="card-title">Gegevens wijzigen</h5>
        <p class="card-text">Hier kunt u auto's of klanten wijzigen</p>
        <a href="readKlant.php" class="btn btn-secondary">Update</a>
      </div>
    </div>
    <div class="col-sm">
      <div class="card-body">
        <h5 class="card-title">Gegevens verwijderen</h5>
        <p class="card-text">Hier kunt u auto's of klanten verwijderen</p>
        <a href="readKlant.php" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>

<?php
    require_once 'templates/footer.php';
?>


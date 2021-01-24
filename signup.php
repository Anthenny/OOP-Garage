<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Persoonlijke Css -->
    <link rel="stylesheet" href="login.css">
    <title>CRUD | Klant</title>
</head>

<?php
    require_once 'classes/user.class.php';
    require_once 'classes/dbh.class.php';
    require_once 'classes/uservalidator.class.php';
    require_once 'templates/header1.php';

    // Als er op de login knop is ingedrukt voert die validatie uit en vervolgens methode.
    if(isset($_POST['signIn'])){
      //validate entries
      $validation = new RegistratieValidator($_POST);
      $errors = $validation->validateForm(); 
          if(!$errors){
          
              $user = new User();

              $name = $_POST['name'];
              $email = $_POST['email'];
              $pwd = $_POST['pwd'];
              $pwdRepeat = $_POST['pwdRepeat'];
              
              $user->createUser($name, $email, $pwd);
          }
    }
?>

    <div class="container-1">
      <h2>Signup formulier</h2>
        <form class="form-container-1" action="<?php echo $_SERVER['PHP_SELF']  ?>" method="POST">
          <label for=""><b>Gebruikersnaam</b></label>
          <input type="text" name="name" placeholder="Voer uw gebruikernaam in" value="<?php echo $_POST['name'] ?? '' ?>">
          <div class="error">
            <?php echo $errors['name'] ?? '' ?>
          </div>
          <br>
          <label for=""><b>Email</b></label>
          <input type="text" name="email" placeholder="Voer uw email in" value="<?php echo $_POST['email'] ?? '' ?>">
          <div class="error">
            <?php echo $errors['email'] ?? '' ?>
          </div>
          <br>
          <label for=""><b>Wachtwoord</b></label>
          <input type="password" name="pwd" placeholder="Voer uw wachtwoord in" value="<?php echo $_POST['pwd'] ?? '' ?>">
          <div class="error">
            <?php echo $errors['pwd'] ?? '' ?>
          </div>
          <br>
          <label for=""><b>Herhaal Wachtwoord</b></label>
          <input type="password" name="pwdRepeat" placeholder="Herhaal wachtwoord in" value="<?php echo $_POST['pwdRepeat'] ?? '' ?>">
          <div class="error">
            <?php echo $errors['pwdRepeat'] ?? '' ?>
          </div>
          <br>
          <button type="submit" name="signIn">Sign in</button>
        </form>

    </div>
<?php
  require_once 'templates/footer.php';
?>
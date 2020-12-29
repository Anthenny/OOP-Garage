<?php  

$mysqli = new mysqli('localhost', 'root', '', 'php_garage') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $car = $_POST['car'];
    $join = $_POST['join'];
}
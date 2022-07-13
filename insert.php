<?php
$user = 'root';
$pass = '';
$db = 'register';

$con = mysqli_connect("localhost", $user, $pass, $db);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$firstName = $_POST['firstName'];
$surname = $_POST['surname'];
$initials = $_POST['initials'];
$postalCode = $_POST['postalCode'];
$houseNumber = $_POST['houseNumber'];
$email = $_POST['email'];
$telNumber = $_POST['telNumber'];
$passw = $_POST['passw'];

  $passwordmd5 = md5($passw);  
  $sql = "INSERT INTO register (firstName,surname,initials,postalCode,houseNumber,email,telNumber, passw)
     VALUES ('$firstName','$surname','$initials','$postalCode','$houseNumber','$email','$telNumber', '$passwordmd5')";
     echo "You have succesfully registered!";
     mysqli_query($con, $sql);

     header("Location: index.php"); 

print_r($firstName, $surname, $initials, $postalCode, $houseNumber, $email, $telNumber, $passw);

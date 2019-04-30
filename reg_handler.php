<?php
session_start();


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



$username = test_input($_POST['username']);
$password = test_input($_POST['password']);
$password2= test_input($_POST['password2']);

$salt = 'ThisIsMyPasswordSalt8675309';

$saltedPW = $password . $salt;

$hashedPW = hash('sha256', $saltedPW);



$valid = true;
$messages = array();


if (empty($username)) {
  array_push($messages, "Please enter a username");
  $valid = false;
}


if ( !preg_match('/^[A-Za-z0-9]{5,31}$/', $username) ) {
  array_push($messages, "Alphanumeric, 5-31 characters");
  $valid = false;
}

if ($password != $password2) {
  array_push($messages, "Passwords do not match");
  $valid = false;
}

if (!$valid) {
  $_SESSION['good'] = false;
  $_SESSION['message'] = $messages;
  header("Location: register.php");
  exit();
}


require_once 'dao.php';

$dao = new Dao();  

$sql = $dao->getUser($username);

if ($sql->rowCount()>=1 ) {
  $_SESSION['good'] = false;
  $_SESSION['regmessage'] = "Sorry, username already taken";
  header("Location: register.php");
  exit();
}

$dao->createLogin ($username, $hashedPW);
$_SESSION['good'] = true;
$_SESSION['regmessage'] = "Great, you're registered!";
header("Location: register.php");
exit();
?>

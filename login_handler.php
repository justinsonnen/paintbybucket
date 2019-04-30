<?php
session_start();


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



  // Get values from login.php 
$username = test_input($_POST['username']);
$password = test_input($_POST['password']); 

$salt = 'ThisIsMyPasswordSalt8675309';

$saltedPW = $password . $salt;

$hashedPW = hash('sha256', $saltedPW);


if(empty($username)) {
  $_SESSION['good']=false;
  $_SESSION['message'] = "Username is empty";
  header("Location: signin.php");
  exit();
}




  // sql injection prevention
require_once 'dao.php';
$dao = new Dao();


$loginMatch = $dao->logUserin($username, $hashedPW);




if ($loginMatch['Username'] == $username && $loginMatch['Password'] == $hashedPW){
  $_SESSION['good'] = true;
  $_SESSION['message'] = "Contrats, you're logged in";
  $_SESSION['logged_in'] = true;
  header("Location: signin.php");
  exit();
} else {
  $_SESSION['good'] = false;
  $_SESSION['message'] = "Incorrect username" .  "<br>" . "or password";
  header("Location: signin.php");
  exit();  
}

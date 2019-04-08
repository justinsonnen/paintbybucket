<?php
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password']; 
  require_once 'dao.php';
  $dao = new Dao();

  $password_in_db = $dao->getPassword($username); 

  if ($password_in_db != $password) {
    $_SESSION['message'] = "Incorrect password";
    header("Location: signin.php");
    exit();
  } else {
    $_SESSION['message'] = "Contrats, you're logged in";
    header("Location: index.php");
    exit();
  }

<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];
  $password2= $_POST['password2'];

  $valid = true;
  $messages = array();

  if (empty($username)) {
    $messages[] = "Please enter a username";
    $valid = false;
  } 
  if ($password != $password2) {
    $messages[] = "Passwords do not match";
    $valid = false;
  }
  if (!$valid) {
    $_SESSION['messages'] = $messages;
    header("Location: signin.php");
    exit();
  }

  require_once 'dao.php';
  $dao = new Dao();
  
  $sql = $dao->getUser($username);

  if ($sql->rowCount()>=1 ) {
    $_SESSION['message'] = "Sorry, username already taken";
    header("Location: signin.php");
    exit();
}
  
  $dao->createLogin ($username, $password);
    header("Location: index.php");
  exit();
  ?>

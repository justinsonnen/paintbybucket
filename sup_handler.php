<?php
session_start();


$comment = $_POST['comment'];
$username = $_POST['username'];


// Good place to validate
if (120 < strlen($comment)) {
	$_SESSION['good']= false;
	$_SESSION['message']= "comment was too long. please shorten it.";
	header("Location: support.php");
	exit;
}


if (0 >= strlen($comment)) {
	$_SESSION['good'] = false;
	$_SESSION['message'] = "Please enter a comment";
	header("Location: support.php");
	exit;
}


require_once 'dao.php';

$dao = new Dao();

$dao->saveComment($username, $comment);

$_SESSION['message'] = "Thank you for your feedback!";
$_SESSION['good'] = true;
header('Location: support.php');
exit();

?>

<?php $thisPage="gallery"; 
session_start();
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
  header("Location: signin.php");
  $_SESSION['message'] = "login required";
  exit();
}?>

<html>
<head>
  <link rel="stylesheet" href="pxb.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
</head>

<body>
  <hr>
  <div>
    <img class="bg" src="images/canvas.jpg" alt="">
  </div>

  <div>
    <a href="index.php">
      <img class="logo" src="images/logo.png" alt="logo" width="100%" height="100%"/>
    </a>
  </div>

  <?php include("navigation.php"); ?>

</hr>

<div class="picBoxFrame">
  <div class="picFrame">
            <div id="slider">
                <ul class="slides">
                    <li class="slide"><img src="pics/slider2.jpg"/></li>
                    <li class="slide"><img src="pics/slider3.jpg"/></li>
                    <li class="slide"><img src="pics/slider4.jpg"/></li>
                    <li class="slide"><img src="pics/slider5.jpg"/></li>
                    <li class="slide"><img src="pics/slider6.jpg"/></li>
                    <li class="slide"><img src="pics/slider7.jpg"/></li>
                </ul>
            </div>
          </div>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="slider.js"></script>
</body>
</html>

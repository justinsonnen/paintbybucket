<?php
session_start();
$thisPage="signin";
?>   

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

<div id="site_name_block_notindex">
  <h1>
    <p class="landing_text">
      <span class="black-highlight1A">Paint</span>
      <br>
      <span class="black-highlight2A">x</span>
      <br>
      <span class="black-highlight3A">Bucket</span>
    </p>
  </h1>
</div>

<div class= "loginboxframe">
  <div class="loginbox">

    <?php
    if (isset($_SESSION['message'])) {
      $sentiment = (isset($_SESSION['good']) && ($_SESSION['good'])) ? "good" : "bad";
      echo "<div class='message' id='" . $sentiment . "' >" . $_SESSION['message'] ." </div>";
    }
    unset($_SESSION['message']);
    ?>

    <form method="post" action="login_handler.php">  
      <label for="username">Username:</label>
      <input type="text" id="username" name="username">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">

      <div id="register_link">
        <a href="register.php">REGISTER</a>
      </div>
    </div>

    <div class="submitbox">
      <button class="BUTTON" >
        Submit
      </button>    
    </div>
  </form>
</div>
<script src="button.js"></script>
</body>
</html>

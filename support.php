<?php
session_start();
$thisPage="support";?>


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

<div class= "suggboxframe">
  <div class="suggbox">

    <?php
    if (isset($_SESSION['message'])) {
      $sentiment = (isset($_SESSION['good']) && ($_SESSION['good'])) ? "good" : "bad";
      echo "<div class='message' id='" . $sentiment . "' >" . $_SESSION['message'] ." </div>";
    }
    unset($_SESSION['message']);
    ?>

    <form method="post" action="sup_handler.php">  
      <label for="username">Username:</label>
      <input type="text" class="resizeduserbox" id="username" name="username">
      <label for="comment">Comments:</label>
      <input type="text" class="resizedcommentbox" id="comment" name="comment">


    <div>

         <?php
   require_once 'dao.php';
   $dao = new Dao();
   $comments = $dao->getComments();
   echo "<table id='comments'>";
   foreach ($comments as $comment) {
     echo "<tr><td>" . htmlspecialchars($comment['comment']) . "</td></tr>";
   }
   echo "</table>";
   ?>

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

<div class="footer">
  <p>©2019 Justin Sonnen</p>
</div>
</body>
</html>


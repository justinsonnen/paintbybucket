<?php
session_start();
?>

 <html>
  <head>
    <link rel="stylesheet" href="pxb.css"> 
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

    <div class=nav_menu>
      <ul id="nav_menu_right">
        <li><a href="signin.php">Sign in</a></li>
        <li><a href="support.php">Support</a></li>
      </ul>
    </div>
    <div class=nav_menu>
      <ul id="nav_menu_left">
        <li> <a href="instructions.php">instructions</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="pages.php">Pages</a></li>
      </ul>
    </div>
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


      <?php
      if (isset($_SESSION['message'])) {
        echo "<div class='message'>" . $_SESSION['message'] . "</div>";
      }
      unset($_SESSION['message']);
      ?>

    <div class="loginbox">
    <form method="post" action="reg_handler.php">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      <label for="password2">ConfirmPassword:</label>
      <input type="password" id="password2" name="password2">

    <div class="submitbox">
      <input type="submit" value="Submit">
    </div>
    </form>
    </div>

  </body>
</html>
~         

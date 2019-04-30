    <div id="right" class="nav_menu">
      <ul>
       <li<?php if ($thisPage=="logout")
       echo " id=\"currentpage\""; ?>><a href="logout.php">LOGOUT</a></li>

       <li<?php if ($thisPage=="signin") 
       echo " id=\"currentpage\""; ?>><a href="signin.php">LOG•IN | SIGN•UP</a></li>


     </ul>
   </div>

   <div id="left" class="nav_menu">
    <ul>
      <li<?php if ($thisPage=="instructions") 
      echo " id=\"currentpage\""; ?>> <a href="instructions.php">instructions</a></li>

      <li<?php if ($thisPage=="gallery") 
      echo " id=\"currentpage\""; ?>><a href="gallery.php">Gallery</a></li>

      <li<?php if ($thisPage=="pages") 
      echo " id=\"currentpage\""; ?>><a href="pages.php">Pages</a></li>

      <li<?php if ($thisPage=="support") 
       echo " id=\"currentpage\""; ?>><a href="support.php">Comments</a></li>
    </ul>
  </div>


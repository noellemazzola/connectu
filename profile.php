<?php 
  include "templates/header.php";
  include "display.php";

?>

    <div class="setgear">
    <a href="settings.php"><i class='bi bi-gear' style='font-size:36px'></i></a>
    </div>

    <div class="profilepic">
      <?php echo "<img src=$profile_img>" ?>
    </div>
    <!-- <div class="profilepic">
      <img src="Images/profile/alex-starnes-WYE2UhXsU1Y-unsplash.jpg">
    </div> -->

    <div class="mainprofile">
      <?php 
        session_start();
        echo "<h2>@". $_SESSION["firstname"]. "." . $_SESSION["lastname"]. "</h2>";
        // echo"<h4>$profile_bio</h4>"
      ?>
      <a href="clubprofile.php">Switch Account</a>
    </div>
    <!-- <div class="mainprofile">
      <h2>@isabella.monte</h2>
      <h4>Class of 24' | President of Campus Activities Board</h4>
      <a href="clubprofile.php">Switch Account</a>
    </div> -->

    <div class="friendslistbt">
      <a href="friendslist.php">Friends List</a>
    </div>

<?php 
  include "templates/navbar.php>";
  include "templates/footer.php>";
?>
   

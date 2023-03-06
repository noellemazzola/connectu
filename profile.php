<?php 
  include "templates/header.php";
  include "database.php";
  include "display.php";
  
  database_connect();

  session_start();
  if ($_SESSION["profile_type"] === "club") {
    if (isset($_POST["event_name"]) && isset($_POST["event_start_date"]) && isset($_POST["event_start_time"]) && isset($_POST["event_location"]) && isset($_POST["event_desc"])) {
      $name = htmlspecialchars($_POST["event_name"]);
      $start_date = htmlspecialchars($_POST["event_start_date"]);
      $start_time = htmlspecialchars($_POST["event_start_time"]);
      $end_date = (isset($_POST["event_end_date"])) ? htmlspecialchars($_POST["event_end_date"]) : "";
      $end_time = (isset($_POST["event_end_time"])) ? htmlspecialchars($_POST["event_end_time"]) : "";
      $location = htmlspecialchars($_POST["event_location"]);
      $description = htmlspecialchars($_POST["event_desc"]);
      $imgURL = "Images/events/default-event-img.png";
      
      // if (isset($_POST["event_img"])) {
        // echo "we in here turn up turn up";  
        $og_img_filepath = $_FILES["event_img"]["name"];
        $tempname = $_FILES["event_img"]["tmp_name"];
        $new_img_filepath = "Images/events/" . $og_img_filepath;

        if (move_uploaded_file($tempname, $new_img_filepath)) {
          $imgURL = $new_img_filepath;
        }
        // else
        //   echo "the image didnt move";
      // }
      // echo "$imgURL";

      
      $tags = "";
      $tagsArray = (isset($_POST["event_tags"])) ? $_POST["event_tags"] : array();
      if (count($tagsArray) > 0) {
        foreach($tagsArray as $tag) {
          $tags .= $tag . ", ";
        }
      }

      $organization = $_SESSION["clubname"];
      $is_promoted = isset($_POST["is_promoted"]) ? true : false;
      // echo "$is_promoted";

      database_addEvent($name, $start_date, $start_time, $end_date, $end_time, $location, $description, $imgURL, $tags, $organization, $is_promoted);
    }








    echo "
      <div class='clubicons'>
        <div class='cicon'>
          <a href='createpost.php'><i class='bi bi-plus-circle' style='font-size:36px'></i></a>
          <a href='settings.php'><i class='bi bi-gear' style='font-size: 36px'></i></a>
        </div>
      </div>
    ";

    $imgURL = database_getProfileImg($_SESSION["clubname"], $_SESSION["profile_type"]);
    echo "
      <div class='clubpic'>
        <img src=$imgURL>
      </div>
    ";

    $bio = database_getBio($_SESSION["clubname"], $_SESSION["profile_type"]);
    echo "
      <div class='clubprofile'>
        <h2>{$_SESSION["clubname"]}</h2>
        <h4>$bio</h4>
        <a href='profile.php'>Switch Account</a>
        <ul>
          <li><i class='bi bi-youtube' style='font-size:36px'></i></li>
          <li><i class='bi bi-instagram' style='font-size:36px'></i></li>
          <li><i class='bi bi-twitter' style='font-size:36px'></i></li>
          <li><i class='bi bi-facebook' style='font-size:36px'></i></li>
        </ul>
      </div>
    ";
    echo "<div class='clubpost'>";
    echo "<h2>Upcoming Events</h2>";
    display_events("club", $_SESSION["clubname"]);
    echo "</div>";
  }
  else if ($_SESSION["profile_type"] === "student") {
    echo "
    <div class='setgear'>
      <a href='settings.php'><i class='bi bi-gear' style='font-size:36px'></i></a>
    </div>
    ";

    $imgURL = database_getProfileImg($_SESSION["firstname"], $_SESSION["profile_type"]);
    echo "
      <div class='profilepic'>
        <img src=$imgURL>
      </div>
    ";

    $bio = database_getBio($_SESSION['firstname'], $_SESSION['profile_type']);
    echo "
      <div class='mainprofile'>
        <h2>@{$_SESSION['firstname']} {$_SESSION['lastname']}</h2>
        <h4>$bio</h4>
        <a href='clubprofile.php'>Switch Account</a>
      </div>
      <div class='friendslistbt'>
        <a href='friendslist.php'>Friends List</a>
      </div>
    ";
  }
?>
<!-- 
    <div class="profilepic">
      
    </div> -->
    <!-- <div class="profilepic">
      <img src="Images/profile/alex-starnes-WYE2UhXsU1Y-unsplash.jpg">
    </div> -->

  
    <!-- <div class="mainprofile">
      <h2>@isabella.monte</h2>
      <h4>Class of 24' | President of Campus Activities Board</h4>
      <a href="clubprofile.php">Switch Account</a>
    </div> -->

    <!-- <div class="friendslistbt">
      <a href="friendslist.php">Friends List</a>
    </div> -->

<?php 
  database_close();

  include "templates/navbar.php>";
  include "templates/footer.php>";
?>
   

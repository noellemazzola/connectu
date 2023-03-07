<?php 
    include "templates/header.php" ;
    include "database.php";
    include "display.php";

    database_connect();

    echo "club id is ". $_GET['id'];
    $club_info = database_getClubInfo($_GET["id"]);

?>
<div class="page-title">
    <a class="back-arrow"><i class="bi bi-chevron-left" onclick="history.back()"></i></a>
</div>
<img class="details--profile-pic" src="<?php echo $club_info["club_profile_img"]?>">

    <div class="clubprofile">
        <h2 class="text-center black mt-2"><?php echo $club_info["club_name"]?></h2>
        <h4><?php echo $club_info["club_profile_bio"]?></h4>
        <div class="d-block w-100 mt-4">
            <button class="follow d-block m-auto">FOLLOW</button>
        </div>
        <ul>
          <li><i class='bi bi-youtube' style='font-size:36px'></i></li>
          <li><i class='bi bi-instagram' style='font-size:36px'></i></li>
          <li><i class='bi bi-twitter' style='font-size:36px'></i></li>
          <li><i class='bi bi-facebook' style='font-size:36px'></i></li>
        </ul>
      </div>

    <div class="clubpost">
        <h2>Upcoming Events</h2>
        <?php display_events("club", $club_info["club_name"])?>
        <!-- <div class="event">
            <div class="event--grid-item">
                <img class="event--img" src="Images/clubs/cab.jpeg"/>
            </div>
            <div class="event--info">
                <p class="event--title">CAB Presents: Get Involved Session</p>
                <p class="event--date">Sun, Jan. 8 - 2PM</p>
                <p class="event--location">Key West Ballroom</p>
                <div class="event--icons">
                <a href="attendinglist.php"><i class='bi bi-person-check-fill'></i></a>
                    <i class="bi bi-share"></i>
                    <i class="bi bi-heart"></i>
                </div>
            </div>
        </div> -->
    </div>
<?php 
    database_close();
    include "templates/navbar.php>";
    include "templates/footer.php>";
?>
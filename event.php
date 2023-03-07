<?php 
    include "templates/header.php";
    include "database.php";
    include "display.php";

    database_connect();

    // echo "event id is". $_GET['id'];
    $event_info = database_getEventInfo($_GET["id"]);
?>
<img class="w-100" src="<?php echo $event_info["event_img"]?>"/>
<main class="p-3 remove-spacing">
    <div class="d-flex justify-content-between">
        <a class="back-arrow"><i class="bi bi-chevron-left" onclick="history.back()"></i></a>
        <div class="event--icons">
            <a href="attendinglist.php"><i class="bi bi-person-check-fill larger"></i></a>
            <i class="bi bi-share larger"></i>
            <i class="bi bi-heart larger"></i>
        </div>
    </div>
    <h3 class="details--title"><?php echo $event_info["event_name"]?></h3>
    <div class="align-items-center">
        <i class="bi bi-calendar details--icon"></i>
        <div class="d-block">
            <!-- todo: format date - day of week, month day, year -->
            <p class="details--info"><?php echo $event_info["event_start_date"]?></p> 
            <p class="details--info"><?php echo $event_info["event_start_time"]?></p>
        </div>
    </div>
    <div class="align-items-center mt-2">
        <i class="bi bi-geo-alt details--icon"></i>
        <p class="details--info"><?php echo $event_info["event_location"]?></p>
    </div>
    <h4 class="details--details">Details</h4>
    <p class="details--desc"><?php echo $event_info["event_desc"]?></p>

    <img class="details--profile-pic mt-4" src="<?php echo database_getProfileImg($event_info["event_organization"], "club")?>"/>
    <p class="text-center my-2 details--club-name"><?php echo $event_info["event_organization"]?></p>
    <button class="follow following d-block m-auto">FOLLOWING</button>

    <h3 class="details--more-events mt-5">More Events by<br><?php echo $event_info["event_organization"]?></h3>
    <?php display_events("club", $event_info["event_organization"]) ?>
    <!-- <div class="event">
        <div class="event--grid-item">
            <img class="event--img" src="Images/events/ucfvssmu.png"/>
        </div>
        <div class="event--info">
            <p class="event--title">Men's Basketball Game: UCF vs. SMU</p>
            <p class="event--date">Sun, Jan. 8 - 2PM</p>
            <p class="event--location">Addition Financial Arena</p>
            <div class="event--icons">
            <a href="attendinglist.php"><i class='bi bi-person-check-fill'></i></a>
                <i class="bi bi-share"></i>
                <i class="bi bi-heart"></i>
            </div>
        </div>
    </div> -->
</main>

<?php 
    database_close();
    include "templates/footer.php";
?>
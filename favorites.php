<?php include "templates/header.php" ?>
<div class="page-title">
    <h2>Favorites</h2>
</div>
<div class="favorites--navbar justify-content-around">
    <a class="active"><b>EVENTS</b></a>
    <a href="favoritesclubs.php">CLUBS</a>
</div>
<main class="p-3">
    <h2 class="favorites--date">Tue, Jan 17</h2>
    <div class="event">
        <div class="event--grid-item">
            <img class="event--img" src="Images/clubs/latinrhythm.jpg"/>
        </div>
        <div class="event--info">
            <p class="event--title">Latin Rhythm Salsa Class</p>
            <p class="event--date">Tues, Jan. 17 - 9PM</p>
            <p class="event--location">Student Union Key West Ballroom</p>
            <div class="event--icons">
            <a href="attendinglist.php"><i class='bi bi-person-check-fill'></i></a>
                <i class="bi bi-share"></i>
                <i class="bi bi-heart"></i>
            </div>
        </div>
    </div>

    <h2 class="favorites--date">Fri, Jan 20</h2>
    <div class="event">
        <div class="event--grid-item">
            <img class="event--img" src="Images/clubs/cab.jpeg"/>
        </div>
        <div class="event--info">
            <p class="event--title">CAB Presents: Get Involved Sessions</p>
            <p class="event--date">Fri, Jan. 20 - 6PM</p>
            <p class="event--location">Key West Ballroom</p>
            <div class="event--icons">
            <a href="attendinglist.php"><i class='bi bi-person-check-fill'></i></a>
                <i class="bi bi-share"></i>
                <i class="bi bi-heart"></i>
            </div>
        </div>
    </div>

    <h2 class="favorites--date">Mon, Jan 23</h2>
    <div class="event">
        <div class="event--grid-item">
            <img class="event--img" src="Images/clubs/KRT.jpg"/>
        </div>
        <div class="event--info">
            <p class="event--title">Involvement Week: Club Showcase</p>
            <p class="event--date">Mon, Jan. 23 - 10AM</p>
            <p class="event--location">Pegasus Ballroom</p>
            <div class="event--icons">
            <a href="attendinglist.php"><i class='bi bi-person-check-fill'></i></a>
                <i class="bi bi-share"></i>
                <i class="bi bi-heart"></i>
            </div>
        </div>
    </div>
</main>

<?php
    include "templates/navbar.php";
    include "templates/footer.php";
?>
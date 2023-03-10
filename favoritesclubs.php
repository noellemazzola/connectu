<?php 
    include "templates/header.php";
    include "database.php";
    include "display.php";
    
    database_connect();
?>
<div class="page-title">
    <h2>Favorites</h2>
</div>
<div class="favorites--navbar justify-content-around">
    <a href="favoritesevents.php"><b>EVENTS</b></a>
    <a class="active">CLUBS</a>
</div>
<div class="d-block noti-group">
    <?php 
        session_start();
        $favorite_clubs = database_getUserFavoriteClubs($_SESSION["firstname"]);
        // echo $favorite_clubs;
        display_favoriteClubs($favorite_clubs);
    ?>
    <!-- <div class="pt-3 py-2 px-4 d-flex justify-content-between align-items-center">
        <img class="noti-group--img" src="Images/clubs/cab.jpeg">
        <p class="noti-group--desc club">Our mission at UCF's Campus Activities Board (CAB) is to foster a sense of community on campus by hosting unique events that effectively cater to our diverse student body, and to the Orlando community.</p>
        <a href="clubdetails.php"><i class="bi bi-chevron-right ml-auto"></i></a>
    </div>
    <hr class="noti-hr"> -->
</div>

<?php
    database_close();
    include "templates/navbar.php";
    include "templates/footer.php";
?>
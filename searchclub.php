<?php include "templates/header.php" ?>

<main class="pt-4">
    <div class="dropdown d-block text-center">
        <button class="btn btn-secondary dropdown-toggle search-dropdown" type="button" data-toggle="dropdown" aria-expanded="false">
            Clubs
        </button>
        <div class="dropdown-menu">
            <button class="dropdown-item" type="button" style="border-bottom: 1px solid #000000;"><a href="searchevent.php">Events</a></button>
            <button class="dropdown-item" type="button">Clubs</button>
        </div>
    </div>
    <div class="py-4 justify-content-center">
        <i class="bi bi-search mr-2" style="color: #707070;"></i>
        <input class="search-input" type="text" placeholder="Search Clubs"/>
    </div>
    <button class="d-block m-auto filter-button"><i class="bi bi-funnel"></i> Filter</button>

    <p class="search-results m-2 pl-2">4 clubs</p>

    <div class="d-block noti-group">
        <hr class="noti-hr">
        <div class="py-2 px-4 d-flex justify-content-between align-items-center">
            <img class="noti-group--img" src="Images/clubs/cab.jpeg">
            <p class="noti-group--desc club">Our mission at UCF's Campus Activities Board (CAB) is to foster a sense of community on campus by hosting unique events that effectively cater to our diverse student body, and to the Orlando community.</p>
            <i class="bi bi-chevron-right ml-auto"></i>
        </div>
        <hr class="noti-hr">
        <div class="py-2 px-4 d-flex justify-content-between align-items-center">
            <img class="noti-group--img" src="Images/clubs/cab.jpeg">
            <p class="noti-group--desc club">Our mission at UCF's Campus Activities Board (CAB) is to foster a sense of community on campus by hosting unique events that effectively cater to our diverse student body, and to the Orlando community.</p>
            <i class="bi bi-chevron-right ml-auto"></i>
        </div>
        <hr class="noti-hr">
        <div class="py-2 px-4 d-flex justify-content-between align-items-center">
            <img class="noti-group--img" src="Images/clubs/cab.jpeg">
            <p class="noti-group--desc club">Our mission at UCF's Campus Activities Board (CAB) is to foster a sense of community on campus by hosting unique events that effectively cater to our diverse student body, and to the Orlando community.</p>
            <i class="bi bi-chevron-right ml-auto"></i>
        </div>
        <hr class="noti-hr">
        <div class="py-2 px-4 d-flex justify-content-between align-items-center">
            <img class="noti-group--img" src="Images/clubs/cab.jpeg">
            <p class="noti-group--desc club">Our mission at UCF's Campus Activities Board (CAB) is to foster a sense of community on campus by hosting unique events that effectively cater to our diverse student body, and to the Orlando community.</p>
            <i class="bi bi-chevron-right ml-auto"></i>
        </div>
        <hr class="noti-hr">
    </div>

</main>

<?php 
  include "templates/navbar.php>";
  include "templates/footer.php>";
?>
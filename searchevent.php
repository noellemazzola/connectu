<?php 
    include "templates/header.php";
    include "database.php";
    include "display.php";

    session_start();
    $_SESSION["event_query"] = "";

    if (isset($_POST["event_query"])) {
        $_SESSION["event_query"] = htmlspecialchars($_POST["event_query"]);
    }
?>

<main class="pt-4 px-2">
    <div class="dropdown d-block text-center">
        <button class="btn btn-secondary dropdown-toggle search-dropdown" type="button" data-toggle="dropdown" aria-expanded="false">
            Events
        </button>
        <div class="dropdown-menu">
            <button class="dropdown-item" type="button" style="border-bottom: 1px solid #000000;">Events</button>
            <button class="dropdown-item" type="button"><a href="searchclub.php">Clubs</a></button>
        </div>
    </div>
    <div class="pt-4 pb-2 justify-content-center">
        <i class="bi bi-search mr-2" style="color: #707070;"></i>
        <form action="searchevent.php" method="POST" id="search_event_form">
            <input class="search-input" type="text" name="event_query" placeholder="Search Events" />
        </form>
    </div>
    <button class="d-block m-auto filter-button"><a class="black-link" href="filters.php"><i class="bi bi-funnel"></i> Filter</a></button>
    <?php 
        database_connect();
        display_searchEvents($_SESSION["event_query"]);
        database_close();
    ?>

    <!-- <p class="search-results m-2">10 events</p>
    <div class="event">
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
  include "templates/navbar.php>";
  include "templates/footer.php>";
?>
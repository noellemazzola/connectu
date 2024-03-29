<?php 
    include "templates/header.php";
    include "database.php";
    include "display.php";

    session_start();
    $_SESSION["club_query"] = "";

    if (isset($_POST["club_query"])) {
        $_SESSION["club_query"] = htmlspecialchars($_POST["club_query"]);
    }

    $tags = "";

    $tagsArray = (isset($_POST["filter_categories"])) ? $_POST["filter_categories"] : array();
    if (count($tagsArray) > 0) {
        foreach($tagsArray as $tag) {
            $tags .= $tag . " , ";
        }
    }

    $tagsArray = (isset($_POST["filter_campus"])) ? $_POST["filter_campus"] : array();
    if (count($tagsArray) > 0) {
        foreach($tagsArray as $tag) {
            $tags .= $tag . " , ";
        }
    }

    $_SESSION["club_tags"] = $tags;

    // echo "the search is " . $_SESSION["club_query"] . " and the filters are $tags";
?>

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
    <div class="pt-4 pb-2 justify-content-center">
        <i class="bi bi-search mr-2" style="color: #707070;"></i>
        <form action="searchclub.php" method="POST" id="search_club_form">
            <input class="search-input" type="text" name="club_query" id="club_query" placeholder="Search Clubs"/>
            <button type="submit" style="width: fit-content; background-color: transparent; border: none;" id="clear">
                <i class="bi bi-x" style="font-size: 40px;" onclick="document.getElementById('club_query').value = '';"></i>
            </button>
        </form>
    </div>
    <button class="d-block m-auto filter-button"><a class="black-link" href="filterclub.php"><i class="bi bi-funnel"></i> Filter</a></button>
    <?php 
        database_connect();
        display_searchClubs($_SESSION["club_query"], $_SESSION["club_tags"]);
        database_close();
    ?>

    <!-- <p class="search-results m-2 pl-2">4 clubs</p>
    <div class="d-block noti-group">
        <hr class="noti-hr">
        <div class="py-2 px-4 d-flex justify-content-between align-items-center">
            <img class="noti-group--img" src="Images/clubs/cab.jpeg">
            <p class="noti-group--desc club">Our mission at UCF's Campus Activities Board (CAB) is to foster a sense of community on campus by hosting unique events that effectively cater to our diverse student body, and to the Orlando community.</p>
            <a href="clubdetails.php"><i class="bi bi-chevron-right ml-auto"></i></a>
        </div>
        <hr class="noti-hr">
    </div> -->

</main>

<?php include "templates/navbar.php"; ?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php include "templates/footer.php"; ?>
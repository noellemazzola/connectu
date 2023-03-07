<?php
// include "database.php";

function display_events($event_type, $clubname) {
    // database_connect();
    // $results = null;

    if ($event_type === "all")
        $results = database_getALLEvents();
    else if ($event_type === "promoted")
        $results = database_getPromotedEvents();
    else if ($event_type === "club") 
        $results = database_getClubEvents($clubname);

    while ($events = mysqli_fetch_assoc($results)) {
        $eventPageURL = "event.php?id=" . $events["id"];
        if ($event_type === "promoted") echo "<div class='scroll-item'>";
        echo "
            <div class='event'>
                <div class='event--grid-item'>
                    <img class='event--img' src='{$events['event_img']}'/>
                </div>
                <div class='event--info'>
                    <a class='event--title' href=$eventPageURL>{$events['event_name']}</a>
                    <p class='event--date'>{$events['event_start_date']} - {$events['event_start_time']}</p>
                    <p class='event--location'>{$events['event_location']}</p>
                    <div class='event--icons'>
                        <a href='attendinglist.php'><i class='bi bi-person-check-fill'></i></a>
                        <i class='bi bi-share'></i>
                        <i class='bi bi-heart'></i>
                    </div>
                </div>
            </div>
        ";
        if ($event_type === "promoted") echo "</div>";
    }

    // database_close();
}

function display_clubSpotlight() {
    $results = database_getClubSpotlight();

    while ($clubs = mysqli_fetch_assoc($results)) {
        $clubPageURL = "club.php?id=" . $clubs["id"];
        echo "
            <div class='scroll-item'>
                <div class='spotlight'>
                    <a class='spotlight--link' href=$clubPageURL>
                        <img class='spotlight--img' src='{$clubs['club_profile_img']}'/>
                        <p class='spotlight--club-name'>{$clubs['club_name']}</p>
                    </a>
                </div>
            </div>
        ";
    }
}

function display_searchEvents($query) {
    $results = database_getEventsFromQuery($query);

    if ($results !== null) {
        $num_results = mysqli_num_rows($results);
        
        echo "<p class='search-results m-2'>$num_results events</p>";
        
        while ($events = mysqli_fetch_assoc($results)) {
            $eventPageURL = "event.php?id=" . $events["id"];
            echo "
                <div class='event'>
                    <div class='event--grid-item'>
                        <img class='event--img' src='{$events['event_img']}'/>
                    </div>
                    <div class='event--info'>
                        <a class='event--title' href=$eventPageURL>{$events['event_name']}</a>
                        <p class='event--date'>{$events['event_start_date']} - {$events['event_start_time']}</p>
                        <p class='event--location'>{$events['event_location']}</p>
                        <div class='event--icons'>
                            <a href='attendinglist.php'><i class='bi bi-person-check-fill'></i></a>
                            <i class='bi bi-share'></i>
                            <i class='bi bi-heart'></i>
                        </div>
                    </div>
                </div>
            ";
        }
    }
}

function display_searchClubs($query) {
    $results = database_getClubsFromQuery($query);

    if ($results !== null) {
        $num_results = mysqli_num_rows($results);
        
        echo "<p class='search-results m-2 ml-3'>$num_results clubs</p>";
        echo "<div class='d-block noti-group'>";
        echo "<hr class='noti-hr'>";
    
        while ($clubs = mysqli_fetch_assoc($results)) {
            $clubPageURL = "club.php?id=" . $clubs["id"];
            echo "
                <div class='py-2 px-4 d-flex justify-content-between align-items-center'>
                    <img class='noti-group--img' src='{$clubs['club_profile_img']}'>
                    <p class='noti-group--desc club'>{$clubs['club_profile_bio']}</p>
                    <a href=$clubPageURL><i class='bi bi-chevron-right ml-auto'></i></a>
                </div>
                <hr class='noti-hr'>
            ";
        }
        echo "</div>";
    }
}

?>
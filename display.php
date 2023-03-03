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
        if ($event_type === "promoted") echo "<div class='scroll-item'>";
        echo "
            <div class='event'>
                <div class='event--grid-item'>
                    <img class='event--img' src='{$events['event_img']}'/>
                </div>
                <div class='event--info'>
                    <p class='event--title'>{$events['event_name']}</p>
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
        echo "
            <div class='scroll-item'>
                <div class='spotlight'>
                    <img class='spotlight--img' src='{$clubs['club_profile_img']}'/>
                    <p class='spotlight--club-name'>{$clubs['club_name']}</p>
                </div>
            </div>
        ";
    }
}
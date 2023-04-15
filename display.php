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
        $eventIdURL = "?event_id=" . $events["id"];

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
                        <a href=$eventIdURL><i class='bi bi-heart'></i></a>
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

function display_searchEvents($query, $filters) {
    $results = database_getEventsFromQuery($query, $filters);

    if ($results !== null) {
        $num_results = mysqli_num_rows($results);
        $event_term_agreement = $num_results === 1 ? "event" : "events";
        
        echo "<p class='search-results m-2'>$num_results $event_term_agreement</p>";
        
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

function display_searchClubs($query, $filters) {
    $results = database_getClubsFromQuery($query, $filters);

    if ($results !== null) {
        $num_results = mysqli_num_rows($results);
        $club_term_agreement = $num_results === 1 ? "club" : "clubs";
        
        echo "<p class='search-results m-2 ml-3'>$num_results $club_term_agreement</p>";
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

function display_favoriteClubs($favorite_clubs) {
    $results = database_getFavoriteClubs($favorite_clubs);
    
    if ($results !== null) {
        while ($clubs = mysqli_fetch_assoc($results)) {
            $clubPageURL = "club.php?id=" . $clubs["id"];
            echo "
                <div class='pt-3 py-2 px-4 d-flex justify-content-between align-items-center'>
                    <img class='noti-group--img' src='{$clubs['club_profile_img']}'>
                    <p class='noti-group--desc club'>{$clubs['club_profile_bio']}</p>
                    <a href=$clubPageURL><i class='bi bi-chevron-right ml-auto'></i></a>
                </div>
                <hr class='noti-hr'>
            ";
        }
    }
}

function display_favoriteEvents($favorite_events) {
    // echo $favorite_events;
    $results = database_getFavoriteEvents($favorite_events);

    if ($results !== null) {
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

// <div class="pt-3 py-2 px-4 d-flex justify-content-between align-items-center">
//     <img class="noti-group--img" src="Images/clubs/cab.jpeg">
//     <p class="noti-group--desc club"></p>
//     <a href="clubdetails.php"><i class="bi bi-chevron-right ml-auto"></i></a>
// </div>
// <hr class="noti-hr">

?>
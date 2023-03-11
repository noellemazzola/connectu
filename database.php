<?php
    // global connection
    $connection = null;
    
    // connect to database
    function database_connect() {
        global $connection;

        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "connectu";

        if($connection == null) {
            // echo "i made it to the connection"
            $connection = mysqli_connect($server, $username, $password, $database);
        }
    }

    // ..
    function database_addStudent($first_name, $last_name, $grad_year, $email, $username, $password) {
        global $connection;

        if ($connection != null) {
            $query = "INSERT INTO students (student_fname, student_lname, student_gradyear, student_email, student_username, student_password) 
                        VALUES ('$first_name', '$last_name', '$grad_year', '$email', '$username', '$password')";
            return mysqli_query($connection, $query);
        }
    }

    function database_addClub($name, $president, $email, $phone, $username, $password) {
        global $connection;

        if ($connection != null) {
            $query = "INSERT INTO clubs (club_name, club_president, club_email, club_phone, club_username, club_password) 
                        VALUES ('$name', '$president', '$email', '$phone', '$username', '$password')";
            return mysqli_query($connection, $query);
        }
    }

    function database_addEvent($name, $start_date, $start_time, $end_date, $end_time, $location, $description, $imgURL, $tags, $organization, $is_promoted) {
        global $connection;

        if ($connection != null) {
            // echo "there is a connection";
            // echo "the event name is $name and it on $start_date at $start_time; ends on $end_date at $end_time \nlocated at $location, this event will $description\n has this image: $imgURL, these tags: $tags\n $organization decided to $is_promoted <-";
            $query = "INSERT INTO events (event_name, event_start_date, event_start_time, event_end_date, event_end_time, event_location, event_desc, event_img, event_tags, event_organization, is_promoted) 
                        VALUES ('$name', '$start_date', '$start_time', '$end_date', '$end_time', '$location', '$description', '$imgURL', '$tags', '$organization', '$is_promoted')";
            // echo "about to return";
            $retval = mysqli_query($connection, $query);
            // echo "the return value is $retval";
            return $retval;
        }
    }

    function database_verifyUser($username, $password) {
        // Use the global connection
        global $connection;

        // Create a default value
        $status = false;

        if($connection != null) {
            // Use WHERE expressions to look for username
            // echo "<h2>made the connection</h2>";
            $results = mysqli_query($connection, "SELECT student_password FROM students WHERE student_username = '{$username}';");
            
            // mysqli_fetch_assoc() returns either null or row data
            // echo "<h2>query went through for </h2>". $username . " " . $password;
            $row = mysqli_fetch_assoc($results);
            // echo "<h2>fetching...</h2>";
            
            // If $row is not null, it found row data.
            if ($row != null) {
                // Verify password against saved hash
                // echo "<h2>row has data: </h2>". $row["student_password"];

                if($password === $row["student_password"]) {
                    $status = true;
                    session_start();
                    $_SESSION["profile_type"] = "student";
                    echo "<h2>student user exists</h2>";

                }
            }
            else {
                $results = mysqli_query($connection, "SELECT club_password FROM clubs WHERE club_username = '{$username}';");
            
                // mysqli_fetch_assoc() returns either null or row data
                // echo "<h2>query went through for </h2>". $username . " " . $password;
                $row = mysqli_fetch_assoc($results);
                // echo "<h2>fetching...</h2>";
                
                // If $row is not null, it found row data.
                if($row != null) {
                    // Verify password against saved hash
                    // echo "<h2>row has data: </h2>". $row["club_password"];

                    if($password === $row["club_password"]) {
                        $status = true;
                        session_start();
                        $_SESSION["profile_type"] = "club";
                        // echo "<h2>club user exists</h2>";

                    }
                }
            }
        }

        return $status;
    }

    function database_getFirstName($username) {
        // Use the global connection
        global $connection;

        // Create a default value
        $name = "";

        if($connection != null) {
            // Use WHERE expressions to look for username
            $results = mysqli_query($connection, "SELECT student_fname FROM students WHERE student_username = '{$username}' LIMIT 1;");
            
            // mysqli_fetch_assoc() returns either null or row data
            $row = mysqli_fetch_assoc($results);
            
            // If $row is not null, it found row data.
            if($row != null) {
                $name = $row["student_fname"];
            }
        }

        return $name;
    }

    function database_getLastName($username) {
        // Use the global connection
        global $connection;

        // Create a default value
        $name = "";

        if($connection != null) {
            // Use WHERE expressions to look for username
            $results = mysqli_query($connection, "SELECT student_lname FROM students WHERE student_username = '{$username}' LIMIT 1;");
            
            // mysqli_fetch_assoc() returns either null or row data
            $row = mysqli_fetch_assoc($results);
            
            // If $row is not null, it found row data.
            if($row != null) {
                $name = $row["student_lname"];
            }
        }

        return $name;
    }

    function database_getClubName($username) {
        // Use the global connection
        global $connection;

        // Create a default value
        $name = "";

        if($connection != null) {
            // Use WHERE expressions to look for username
            $results = mysqli_query($connection, "SELECT club_name FROM clubs WHERE club_username = '{$username}' LIMIT 1;");
            
            // mysqli_fetch_assoc() returns either null or row data
            $row = mysqli_fetch_assoc($results);
            
            // If $row is not null, it found row data.
            if($row != null) {
                $name = $row["club_name"];
            }
        }

        return $name;
    }

    function database_getProfileImg($name, $profile_type) {
        // Use the global connection
        global $connection;
        // echo "hi, $name -  you are a $profile_type";

        // Create a default value
        $imgURL = "Images/profile/default-profile-pic.png";

        if($connection != null) {
            // echo "connection made for profile";

            if ($profile_type === "club") {
                $results = mysqli_query($connection, "SELECT club_profile_img FROM clubs WHERE club_name = '{$name}' LIMIT 1;");
                $row = mysqli_fetch_assoc($results);
            
                if ($row != null) {
                    $imgURL = $row["club_profile_img"];
                }
            }
            
            if ($profile_type === "student") {
                $results = mysqli_query($connection, "SELECT student_profile_img FROM students WHERE student_fname = '{$name}' LIMIT 1;");
                $row = mysqli_fetch_assoc($results);
                
                if ($row != null) {
                    // echo "row has data";
                    $imgURL = $row["student_profile_img"];
                    // echo "IMGURL IS $imgURL";
                }
            }
        }

        return $imgURL;
    }

    function database_getBio($name, $profile_type) {
        // Use the global connection
        global $connection;

        // Create a default value
        $bio = "";

        if($connection != null) {
            // echo "connection made for bio";

            if ($profile_type === "club") {
                $results = mysqli_query($connection, "SELECT club_profile_bio FROM clubs WHERE club_name = '{$name}' LIMIT 1;");
                $row = mysqli_fetch_assoc($results);
            
                if ($row != null) {
                    $bio = $row["club_profile_bio"];
                }
            }
            
            if ($profile_type === "student") {
                $results = mysqli_query($connection, "SELECT student_desc FROM students WHERE student_fname = '{$name}' LIMIT 1;");
                $row = mysqli_fetch_assoc($results);
                
                if ($row != null) {
                    // echo "row has data";
                    $bio = $row["student_desc"];
                    // echo "BIO IS $bio";
                }
            }
        }

        return $bio;
    }
    
    function database_getClubEvents($clubname) {
        // Use the global connection
        global $connection;

        if($connection != null) {
            $query = "SELECT * FROM events WHERE event_organization = '{$clubname}'";
            $results = mysqli_query($connection, $query);
            
            // If $row is not null, it found row data.
            if($results && mysqli_num_rows($results) > 0) {
                return $results;
            }
        }
    }

    function database_getAllEvents() {
        // Use the global connection
        global $connection;

        if($connection != null) {
            $query = "SELECT * FROM events";
            $results = mysqli_query($connection, $query);
            
            // If $row is not null, it found row data.
            if($results && mysqli_num_rows($results) > 0) {
                return $results;
            }
        }
    }

    function database_getPromotedEvents() {
        // Use the global connection
        global $connection;

        if($connection != null) {
            $query = "SELECT * FROM events WHERE is_promoted = true";
            $results = mysqli_query($connection, $query);
            
            // If $row is not null, it found row data.
            if($results && mysqli_num_rows($results) > 0) {
                return $results;
            }
        }
    }

    function database_getClubSpotlight() {
        // Use the global connection
        global $connection;

        if($connection != null) {
            $query = "SELECT id, club_name, club_profile_img FROM clubs WHERE has_spotlight = true";
            $results = mysqli_query($connection, $query);
            
            // If $row is not null, it found row data.
            if($results && mysqli_num_rows($results) > 0) {
                return $results;
            }
        }
    }

    function database_getEventsFromQuery($event_query, $filters) {
        // Use the global connection
        global $connection;

        if($connection != null) {
            if ($event_query === "" && $filters === "") {
                $query = "SELECT * FROM events";
                // echo "neither";
            }
            else if ($event_query && $filters) {
                $query = "SELECT * FROM events 
                    WHERE ((`event_name` LIKE '%".$event_query."%') 
                        OR (`event_desc` LIKE '%".$event_query."%') 
                        OR (`event_organization` LIKE '%".$event_query."%'))
                        AND MATCH(event_tags) AGAINST($filters)";
                // echo "search and filter";
            }
            else if ($event_query) {
                $query = "SELECT * FROM events 
                    WHERE (`event_name` LIKE '%".$event_query."%') 
                        OR (`event_desc` LIKE '%".$event_query."%') 
                        OR (`event_organization` LIKE '%".$event_query."%')";
                // echo "search";
            }
            else if ($filters) {
                $query = "SELECT * FROM events WHERE MATCH(event_tags) AGAINST('$filters')";
                // echo "filter";
            }
            
            // echo "the query is $query";
            $results = mysqli_query($connection, $query);
            
            // If $row is not null, it found row data.
            if($results && mysqli_num_rows($results) > 0) {
                return $results;
            }
            else {
                echo "<p class='search-results text-center mt-5'>no events match your search</p>";
            }
        }
    }

    function database_getClubsFromQuery($club_query, $filters) {
        // Use the global connection
        global $connection;

        if($connection != null) {
            if ($club_query === "" && $filters === "")
                $query = "SELECT * FROM clubs";
            else if ($club_query && $filters)
                $query = "SELECT * FROM clubs 
                            WHERE ((`club_name` LIKE '%".$club_query."%') 
                            OR (`club_profile_bio` LIKE '%".$club_query."%'))
                            AND MATCH(club_tags) AGAINST('$filters')";
            else if ($club_query)
                $query = "SELECT * FROM clubs 
                            WHERE (`club_name` LIKE '%".$club_query."%') 
                            OR (`club_profile_bio` LIKE '%".$club_query."%')";
            else if ($filters)
                $query = "SELECT * FROM events WHERE MATCH(club_tags) AGAINST('$filters')";


            $results = mysqli_query($connection, $query);
            
            // If $row is not null, it found row data.
            if($results && mysqli_num_rows($results) > 0) {
                return $results;
            }
            else {
                echo "<p class='search-results text-center mt-5'>no clubs match your search</p>";
            }
        }
    }

    function database_getEventInfo($event_id) {
        // Use the global connection
        global $connection;

        // Create a default value
        // $name = "";

        if($connection != null) {
            // Use WHERE expressions to look for username
            $results = mysqli_query($connection, "SELECT * FROM events WHERE id = '{$event_id}' ;");
            
            // mysqli_fetch_assoc() returns either null or row data
            $row = mysqli_fetch_assoc($results);
            
            // If $row is not null, it found row data.
            if($row != null) {
                // echo "row has data";
                return $row;
            }
        }
    }

    function database_getClubInfo($club_id) {
        // Use the global connection
        global $connection;

        // Create a default value
        // $name = "";

        if($connection != null) {
            // Use WHERE expressions to look for username
            $results = mysqli_query($connection, "SELECT * FROM clubs WHERE id = '{$club_id}' ;");
            
            // mysqli_fetch_assoc() returns either null or row data
            $row = mysqli_fetch_assoc($results);
            
            // If $row is not null, it found row data.
            if($row != null) {
                // echo "row has data";
                return $row;
            }
        }
    }

    function database_getFavoriteClubs($favorite_clubs) {
        // Use the global connection
        global $connection;

        if($connection != null) {
            $query = "SELECT * FROM clubs WHERE MATCH(club_name) AGAINST('$favorite_clubs')";
            $results = mysqli_query($connection, $query);
            // echo "query: " . $query;
            
            // If $row is not null, it found row data.
            if($results && mysqli_num_rows($results) > 0) {
                return $results;
            }
            else {
                echo "you have no favorited clubs";
            }
        }
    }

    function database_getUserFavoriteClubs($name) {
         // Use the global connection
         global $connection;

         // Create a default value
         $favorite_clubs = "";
 
         if($connection != null) {
             // Use WHERE expressions to look for username
             $results = mysqli_query($connection, "SELECT student_favorite_clubs FROM students WHERE student_fname = '{$name}' LIMIT 1;");
             
             // mysqli_fetch_assoc() returns either null or row data
             $row = mysqli_fetch_assoc($results);
             
             // If $row is not null, it found row data.
             if($row != null) {
                 $favorite_clubs = $row["student_favorite_clubs"];
             }
         }
 
         return $favorite_clubs;
    }

    function database_getFavoriteEvents($favorite_events) {
        // Use the global connection
        global $connection;

        if($connection != null) {
            $query = "SELECT * FROM events WHERE MATCH(event_name) AGAINST('$favorite_events')";
            $results = mysqli_query($connection, $query);
            // echo "query: " . $query;
            
            // If $row is not null, it found row data.
            if($results && mysqli_num_rows($results) > 0) {
                return $results;
            }
            else {
                echo "you have no favorited events";
            }
        }
    }

    function database_getUserFavoriteEvents($name) {
         // Use the global connection
         global $connection;

         // Create a default value
         $favorite_events = "";
 
         if($connection != null) {
             // Use WHERE expressions to look for username
             $results = mysqli_query($connection, "SELECT student_favorite_events FROM students WHERE student_fname = '{$name}' LIMIT 1;");
             
             // mysqli_fetch_assoc() returns either null or row data
             $row = mysqli_fetch_assoc($results);
             
             // If $row is not null, it found row data.
             if($row != null) {
                 $favorite_events = $row["student_favorite_events"];
             }
         }
 
         return $favorite_events;
    }

    // close database
    function database_close() {
        global $connection;

        if($connection != null) {
            mysqli_close($connection);
        }
    }

    ?>

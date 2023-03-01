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
            $query = "INSERT INTO students (student_fname, student_lname, student_gradyear, student_email, student_username, student_password) VALUES ('$first_name', '$last_name', '$grad_year', '$email', '$username', '$password')";
            return mysqli_query($connection, $query);
        }
    }

    function database_addClub($name, $president, $email, $phone, $username, $password) {
        global $connection;

        if ($connection != null) {
            $query = "INSERT INTO clubs (club_name, club_president, club_email, club_phone, club_username, club_password) VALUES ('$name', '$president', '$email', '$phone', '$username', '$password')";
            return mysqli_query($connection, $query);
        }
    }

    function database_verifyUser($username, $password) {
        // Use the global connection
        global $connection;

        // Create a default value
        $status = false;

        if($connection != null) {
            // Use WHERE expressions to look for username
            echo "<h2>made the connection</h2>";
            $results = mysqli_query($connection, "SELECT student_password FROM students WHERE student_username = '{$username}';");
            
            // mysqli_fetch_assoc() returns either null or row data
            echo "<h2>query went through for </h2>". $username . " " . $password;
            $row = mysqli_fetch_assoc($results);
            // echo "<h2>fetching...</h2>";
            
            // If $row is not null, it found row data.
            if($row != null) {
                // Verify password against saved hash
                echo "<h2>row has data: </h2>". $row["student_password"];

                if($password === $row["student_password"]) {
                    $status = true;
                    session_start();
                    $_SESSION["profile_type"] = "student";
                    echo "<h2>user exists</h2>";

                }
            }
            else {
                $results = mysqli_query($connection, "SELECT club_password FROM clubs WHERE club_username = '{$username}';");
            
                // mysqli_fetch_assoc() returns either null or row data
                echo "<h2>query went through for </h2>". $username . " " . $password;
                $row = mysqli_fetch_assoc($results);
                // echo "<h2>fetching...</h2>";
                
                // If $row is not null, it found row data.
                if($row != null) {
                    // Verify password against saved hash
                    echo "<h2>row has data: </h2>". $row["club_password"];

                    if($password === $row["club_password"]) {
                        $status = true;
                        session_start();
                        $_SESSION["profile_type"] = "club";
                        echo "<h2>user exists</h2>";

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

    function database_getCLubName($username) {
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








    function database_verifySignUp($first_name, $last_name) {
        global $connection;

        if ($connection != null) {
            $query = "SELECT email FROM newsletter WHERE first_name = '$first_name' AND last_name = '$last_name' LIMIT 1";
            $result = mysqli_query($connection, $query);

            $row = mysqli_fetch_assoc($result);

            if ($row != null)
                return true;
            else
                return false;
        }
    }

    // get all menu items of a specific type
    function database_grabMenuItems($item_type) {
        global $connection;

        if ($connection != null) {
            $query = "SELECT * FROM menu WHERE item_type = '$item_type'";
            $results = mysqli_query($connection, $query);

            if ($results && mysqli_num_rows($results) > 0) {
                return $results;
            }
        }
    }

    // get all events
    function database_grabEvents() {
        global $connection;

        if ($connection != null) {
            $query = "SELECT * FROM events";
            $results = mysqli_query($connection, $query);

            if ($results && mysqli_num_rows($results) > 0) {
                return $results;
            }
            else {
                echo "<h2 class='font-brand'>no events</h2>";
                echo "<p>Check back soon to see what's happening at the <span class='font-brand'>navbar</span></p>";
            }

            // $row = mysqli_fetch_assoc($results);

            // if ($row != null) {
                // echo "row is populated";
                // return $row;
            // }
            // else 
            //  echo "not populated";
        }
        else
            echo "not connected";
    }

    // get all store items
    function database_grabStoreItems(){
        global $connection;

        if ($connection != null) {
            $query = "SELECT * FROM store";
            $results = mysqli_query($connection, $query);

            if ($results && mysqli_num_rows($results) > 0) {
                return $results;
            }
        }
    }

    // close database
    function database_close() {
        global $connection;

        if($connection != null) {
            mysqli_close($connection);
        }
    }

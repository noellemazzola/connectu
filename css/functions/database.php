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

    // ..
    function database_addSignUp($first_name, $last_name, $email) {
        global $connection;

        if ($connection != null) {
            $query = "INSERT INTO newsletter (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
            return mysqli_query($connection, $query);

            // return database_verifySignUp($first_name, $last_name);
        }
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


    function database_verifyUser($username, $password) {
        // Use the global connection
        global $connection;

        // Create a default value
        $status = false;

        if($connection != null) {
            // Use WHERE expressions to look for username
            $results = mysqli_query($connection, "SELECT password FROM users WHERE username = '{$username}';");
            
            // mysqli_fetch_assoc() returns either null or row data
            $row = mysqli_fetch_assoc($results);
            
            // If $row is not null, it found row data.
            if($row != null) {
                // Verify password against saved hash
                if(password_verify($password, $row["password"])) {
                    $status = true;
                }
            }
        }

        return $status;
    }

    // close database
    function database_close() {
        global $connection;

        if($connection != null) {
            mysqli_close($connection);
        }
    }

<?php 
    include "templates/header.php"; 
    include "database.php";
    include "display.php";
    
    database_connect();
    session_start();

    if (isset($_POST["login_username"]) && isset($_POST["login_password"])) {
        $username = htmlspecialchars($_POST["login_username"]);
        $password = htmlspecialchars($_POST["login_password"]);
        $_SESSION["loggedIn"] = true;
        
        // database_connect();
        if (database_verifyUser($username, $password)) {
            // echo "<h2>$username, $password</h2>";
            // session_start();
            if ($_SESSION["profile_type"] === "student") {
                $_SESSION["firstname"] = database_getFirstName($username);
                $_SESSION["lastname"] = database_getLastName($username);
                // echo $_SESSION["firstname"] . " " . $_SESSION["lastname"];
            }

            else if ($_SESSION["profile_type"] = "club") {
                $_SESSION["clubname"] = database_getClubName($username);
            }
        }
        else {
            $_SESSION["loggedIn"] = "true";
            header("Location: login.php");
        }

        // database_close();
    }

    if (isset($_POST["student_fname"]) && isset($_POST["student_lname"]) && isset($_POST["student_gradyear"]) && isset($_POST["student_email"]) && isset($_POST["student_username"]) && isset($_POST["student_password"])) {
        $first_name = htmlspecialchars($_POST["student_fname"]);
        $last_name = htmlspecialchars($_POST["student_lname"]);
        $grad_year = htmlspecialchars($_POST["student_gradyear"]);
        $email = htmlspecialchars($_POST["student_email"]);
        $username = htmlspecialchars($_POST["student_username"]);
        $password = htmlspecialchars($_POST["student_password"]);

        // database_connect();
        database_addStudent($first_name, $last_name, $grad_year, $email, $username, $password);

        session_start();
        $_SESSION["profile_type"] = "student";
        $_SESSION["firstname"] = $first_name;
        $_SESSION["lastname"] = $last_name;

        // database_close();
    }

    if (isset($_POST["club_name"]) && isset($_POST["club_president"]) && isset($_POST["club_email"]) && isset($_POST["club_phone"]) && isset($_POST["club_username"]) && isset($_POST["club_password"])) {
        $name = htmlspecialchars($_POST["club_name"]);
        $president = htmlspecialchars($_POST["club_president"]);
        $email = htmlspecialchars($_POST["club_email"]);
        $phone = htmlspecialchars($_POST["club_phone"]);
        $username = htmlspecialchars($_POST["club_username"]);
        $password = htmlspecialchars($_POST["club_password"]);

        // database_connect();
        database_addClub($name, $president, $email, $phone, $username, $password);

        session_start();
        $_SESSION["profile_type"] = "club";
        $_SESSION["clubname"] = $name;

        // database_close();
    }

?>
<main class="p-3">
    <a href="notifications.php"><i class="bi bi-bell noti-bell"></i></a>
    <?php 
        // if (isset($_POST["student_fname"])) echo "<h2>Hello, $first_name</h2>";
        // if (isset($_POST["club_name"])) echo "<h2>Hello, $name</h2>"
        ?>
    <h2>Promoted Events</h2>
    <div class="scrolling-wrapper">
        <?php 
            // database_connect();
            display_events("promoted", "");
        ?>
        <!-- <div class="scroll-item">
            <div class="event">
                <div class="event--grid-item">
                    <img class="event--img" src="Images/events/ucfvssmu.png"/>
                </div>
                <div class="event--info">
                    <a class="event--title" href="eventdetails.php">Men's Basketball Game: UCF vs. SMU</a>
                    <p class="event--date">Sun, Jan. 8 - 2PM</p>
                    <p class="event--location">Addition Financial Arena</p>
                    <div class="event--icons">
                    <a href="attendinglist.php"><i class='bi bi-person-check-fill'></i></a>
                        <i class="bi bi-share"></i>
                        <i class="bi bi-heart"></i>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <h2>Club Spotlight</h2>
    <div class="scrolling-wrapper club-spotlight">
        <?php display_clubSpotlight(); ?>
        <!-- <div class="scroll-item">
            <div class="spotlight">
                <img class="spotlight--img" src="Images/clubs/emo-alt.jpg"/>
                <p class="spotlight--club-name">Emo Alt Club</p>
            </div>
        </div> -->
    </div>

    <h2>Upcoming Events</h2>
    <?php 
        display_events("all", ""); 
        database_close();
    ?>
    <!-- <div class="event">
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

<?php include "templates/navbar.php"; ?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php include "templates/footer.php"; ?>
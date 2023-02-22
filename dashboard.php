<?php 
    include "templates/header.php"; 
    include "database.php";


    if (isset($_POST["student_fname"]) && isset($_POST["student_lname"]) && isset($_POST["student_gradyear"]) && isset($_POST["student_email"]) && isset($_POST["student_username"]) && isset($_POST["student_password"])) {
        $first_name = htmlspecialchars($_POST["student_fname"]);
        $last_name = htmlspecialchars($_POST["student_lname"]);
        $grad_year = htmlspecialchars($_POST["student_gradyear"]);
        $email = htmlspecialchars($_POST["student_email"]);
        $username = htmlspecialchars($_POST["student_username"]);
        $password = htmlspecialchars($_POST["student_password"]);

        database_connect();
        database_addStudent($first_name, $last_name, $grad_year, $email, $username, $password);
        database_close();
    }

?>
<main class="p-3">
    <a href="notifications.php"><i class="bi bi-bell noti-bell"></i></a>
    <?php if (isset($_POST["student_fname"])) echo "<h2>Hello, $first_name</h2>"?>
    <h2>Promoted Events</h2>
    <div class="scrolling-wrapper">
        <div class="scroll-item">
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
        </div>
        <div class="scroll-item">
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
            </div>
        </div>
        <div class="scroll-item">
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
            </div>
        </div>
    </div>

    <h2>Club Spotlight</h2>
    <div class="scrolling-wrapper club-spotlight">
        <div class="scroll-item">
            <div class="spotlight">
                <img class="spotlight--img" src="Images/clubs/emo-alt.jpg"/>
                <p class="spotlight--club-name">Emo Alt Club</p>
            </div>
        </div>
        <div class="scroll-item">
            <div class="spotlight">
                <img class="spotlight--img" src="Images/clubs/emo-alt.jpg"/>
                <p class="spotlight--club-name">Emo Alt Club</p>
            </div>
        </div>
        <div class="scroll-item">
            <div class="spotlight">
                <img class="spotlight--img" src="Images/clubs/emo-alt.jpg"/>
                <p class="spotlight--club-name">Emo Alt Club</p>
            </div>
        </div>
        <div class="scroll-item">
            <div class="spotlight">
                <img class="spotlight--img" src="Images/clubs/emo-alt.jpg"/>
                <p class="spotlight--club-name">Emo Alt Club</p>
            </div>
        </div>
        <div class="scroll-item">
            <div class="spotlight">
                <img class="spotlight--img" src="Images/clubs/emo-alt.jpg"/>
                <p class="spotlight--club-name">Emo Alt Club</p>
            </div>
        </div>
    </div>

    <h2>Upcoming Events</h2>
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
    </div>
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
    </div>
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
    </div>
</main>

<?php
    include "templates/navbar.php";
    include "templates/footer.php"; 
?>
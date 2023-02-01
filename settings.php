<?php include "templates/header.php" ?>
        <div class="back">
            <i class="bi bi-chevron-left" style="font-size:36px" onclick="history.back()"></i>
            </div>

        <div class="pagetitle">
            <h2>Settings</h2>
            </div>

        <div class="settingsop">
            <ul>
                <li>Account Settings 
                <a href="accountst.php"><i class="bi bi-chevron-right" style="font-size:30px"></i></a></li>
                
                <li>Privacy
                <a href="privacyst.php"><i class="bi bi-chevron-right" style="font-size:30px"></i></a></li>
                
                <li>Notifications
                <a href="notificationsst.php"><i class="bi bi-chevron-right" style="font-size:30px"></i></a></li>
                
                <li>Accessibility
                <a href="accessibilityst.php"><i class="bi bi-chevron-right" style="font-size:30px"></i></a></li>
            </ul>
        </div>

        <div class="logout">
            <a href="index.php">Logout</a>
        </div>
<?php 
    include "templates/navbar.php";
    include "templates/footer.php";
?>

<?php include "templates/header.php" ?>
        <div class="back">
            <i class="bi bi-chevron-left" style="font-size:36px" onclick="history.back()"></i>
            </div>

        <div class="pagetitle">
            <h2>Account Settings</h2>
            </div>
        
        <div class="changepropic">
            <span class="dot"></span>
            <a href="">Change Profile Picture</a>
        </div>
        <hr>
        <div class="profileinfo">
            <h5>Personal Information</h5>
            <form>
                <input type="text" id="username" name="username" placeholder="Username"><br>
                <input type="text" id="bio" name="bio" value="Bio"><br>
                <input type="text" id="password" name="password" placeholder="Password"><br>
                <button>Save Changes</button>
            </form>
        </div>

        <div class="deactivate">
            <button>Deactivate Account</button>
        </div>
<?php include "templates/header.php" ?>
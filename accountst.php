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
                <label for="username">Username</label><br>
                <input type="text" id="username" name="username" value="Username"><br>
                <label for="username">Bio</label><br>
                <input type="text" id="bio" name="bio" value="Bio"><br>
                <label for="username">Password</label><br>
                <input type="text" id="password" name="password" value="Password"><br>
                <button>Save Changes</button>
            </form>
        </div>

        <div class="deactivate">
            <button>Deactivate Account</button>
        </div>
<?php include "templates/header.php" ?>
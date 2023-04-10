<?php include "templates/header.php" ?>
<form action="dashboard.php" method="POST" id="register_club_form">
    <h1>Register</h1>
    <p>Please fill in this form to create a club account.</p>
    <hr>

    <input type="text" placeholder="Club Name" name="club_name" id="club_name" required>
    <span class="input-warning input-warning-club"></span>

    <input type="text" placeholder="President Name" name="club_president" id="club_president" required>
    <span class="input-warning input-warning-club"></span>

    <input type="email" placeholder="Club Email" name="club_email" id="club_email" required>
    <span class="input-warning input-warning-club"></span>

    <input type="text" placeholder="Phone Number" name="club_phone" id="club_phone" required>
    <span class="input-warning input-warning-club"></span>

    <input type="text" placeholder="Username" name="club_username" id="club_username" required>
    <span class="input-warning input-warning-club"></span>

    <input type="password" placeholder="Password" name="club_password" id="club_password" required>
    <span class="input-warning input-warning-club"></span>

    <input type="password" placeholder="Repeat Password" name="club_password_repeat" id="club_password_repeat" required>
    <span class="input-warning input-warning-club"></span>

    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button class="button" type="submit" id="club_create">Create Account</button>
    <p>Already have an account? <a href="login.php">Sign in</a></p>
</form>
<?php include "templates/footer.php" ?>
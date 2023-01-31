<?php include "templates/header.php" ?>
<form>
    <h1>Register</h1>
    <p>Please fill in this form to create a club account.</p>
    <hr>

    <input type="text" placeholder="Club Name" name="clubname" id="clubname" required>
    <input type="text" placeholder="President Name" name="president" id="president" required>
    <input type="text" placeholder="Club Email" name="clubemail" id="clubemail" required>
    <input type="text" placeholder="Phone Number" name="phone" id="phone" required>
    <input type="text" placeholder="Username" name="clubusername" id="clubusername" required>
    <input type="password" placeholder="Password" name="psw" id="psw" required>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button class="button"><a href="dashboard.php">Create Account</a></button>
    <p>Already have an account? <a href="login.php">Sign in</a></p>
</form>
<?php include "templates/footer.php" ?>
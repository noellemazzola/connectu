<?php include "templates/header.php" ?>
<form>
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <input type="text" placeholder="First Name" name="firstname" id="firstname" required>
    <input type="text" placeholder="Last Name" name="lastname" id="lastname" required>
    <input type="text" placeholder="Expected Graduation" name="gradyear" id="gradyear" required>
    <input type="text" placeholder="Email" name="email" id="email" required>
    <input type="text" placeholder="Username" name="username" id="username" required>
    <input type="password" placeholder="Password" name="psw" id="psw" required>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button class="button"><a href="dashboard.php">Create Account</a></button>

    <p>Already have an account? <a href="dashboard.php">Sign in</a></p>
</form>
<?php include "templates/footer.php" ?>
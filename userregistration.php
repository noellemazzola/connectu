<?php include "templates/header.php" ?>
<form action="" method="POST" id="register_student">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <input type="text" placeholder="First Name" name="student_fname" id="student_fname" required>
    <input type="text" placeholder="Last Name" name="student_lname" id="student_lname" required>
    <input type="text" placeholder="Expected Graduation" name="student_gradyear" id="student_gradyear" required>
    <input type="text" placeholder="Email" name="student_email" id="student_email" required>
    <input type="text" placeholder="Username" name="student_username" id="student_username" required>
    <input type="password" placeholder="Password" name="student_password" id="student_password" required>
    <input type="password" placeholder="Repeat Password" name="student_repeat_password" id="student_repeat_password" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button class="button">Create Account</button>

    <p>Already have an account? <a href="dashboard.php">Sign in</a></p>
</form>
<?php include "templates/footer.php" ?>
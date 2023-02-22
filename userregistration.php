<?php include "templates/header.php" ?>
<form action="dashboard.php" method="POST" id="register_student_form">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <input type="text" placeholder="First Name" name="student_fname" id="student_fname" required>
    <span class="input-warning"></span>

    <input type="text" placeholder="Last Name" name="student_lname" id="student_lname" required>
    <span class="input-warning"></span>

    <input type="text" placeholder="Expected Graduation" name="student_gradyear" id="student_gradyear" required>
    <span class="input-warning"></span>

    <input type="email" placeholder="Email" name="student_email" id="student_email" required>
    <span class="input-warning"></span>

    <input type="text" placeholder="Username" name="student_username" id="student_username" required>
    <span class="input-warning"></span>

    <input type="password" placeholder="Password" name="student_password" id="student_password" required>
    <span class="input-warning"></span>

    <input type="password" placeholder="Repeat Password" name="student_repeat_password" id="student_repeat_password" required>
    <span class="input-warning"></span>

    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button class="button" type="submit" id="student_create">Create Account</button>

    <p>Already have an account? <a href="dashboard.php">Sign in</a></p>
</form>
<?php include "templates/footer.php" ?>
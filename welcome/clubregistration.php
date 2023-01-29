<?php include "templates/header.php" ?>
    <form action="action_page.php">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create a club account.</p>
            <hr>

            <label for="clubname"><b>Club Name</b></label>
            <input type="text" placeholder="Enter Club Name" name="clubname" id="clubname" required>

            <label for="clubemail"><b>Club Email</b></label>
            <input type="text" placeholder="Enter Club Email" name="clubemail" id="clubemail" required>

            <label for="clubusername"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="clubusername" id="clubusername" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
            <hr>

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
</form>



<?php include "templates/footer.php" ?>
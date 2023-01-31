<?php include "templates/header.php" ?>
    <form action="action_page.php">
        <div class="container">
            <h1>Login</h1>
            
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required>
            
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        </div>

        <div class="container forgotpswd">
            <p>Forgot Password? <a href="#">Forgot Password</a>.</p>
        </div>
</form>


<?php include "templates/footer.php" ?>
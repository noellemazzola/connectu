<?php include "templates/header.php" ?>
<main class="text-center">
    <img class="logo" src="Images/logo.png" alt="ConnectU's logo; a Capital C with cartoon users inside of the letter">
    <h1>Welcome Back to ConnectU!</h1>
    <form action="dashboard.php" method="POST" id="login_form">
        <input type="text" placeholder="Username" name="login_username" id="login_username" required>
        <span class="input-warning input-warning-login"></span>

        <input type="password" placeholder="Password" name="login_password" id="login_password" required>
        <span class="input-warning input-warning-login"></span>

        <button class="button" type="submit">Log In</button>
    </form>
</main> 
<?php include "templates/footer.php" ?>
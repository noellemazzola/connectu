<?php include "templates/header.php" ?>
<main class="text-center">
    <img class="logo" src="Images/logo.png" alt="ConnectU's logo; a Capital C with cartoon users inside of the letter">
    <h1>Welcome to Back to ConnectU!</h1>
    <form>
        <input type="text" placeholder="Username" name="username" id="username" required>
        <input type="password" placeholder="Password" name="psw" id="psw" required>
        <button class="button" type="button"><a href="dashboard.php">Log In</a></button>
    </form>
</main> 
<?php include "templates/footer.php" ?>
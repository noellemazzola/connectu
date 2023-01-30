<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Settings</title>
    <style>
    <?php include ("/css/main.css")?>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <body>
        <div class="back">
            <i class="fa fa-chevron-left" style="font-size:36px" onclick="history.back()"></i>
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
    
    </body>
</html>
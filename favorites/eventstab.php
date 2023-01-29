<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Events</title>
    <style>
    <?php include ("/css/main.css")?>
    </style>
    <style>
        html,body{
        margin: 0 auto;
        background-color: #F2EFE9;
         }
      /* Header for Messages */
        .header {
        padding: 60px;
        margin-bottom: 30px;
        text-align: center;
        background: #F2EFE9;
        color: white;
        font-size: 30px;
        }
        /* Nav Bar for Events */
        .navbar{
            overflow:hidden;
        }
        /* Style the links inside the navigation bar */
        .navbar a {
        text-align: center;
        padding: 14px 16px;
        font-size: 17px;
        color: black;
        }

        /* Add a color to the active/current link */
        .navbar a.active {
        color: #5E2BFF;
        }

        /* Event styling */
        .event{
        border: 2px solid black;
        background-color: white;
        border-radius: 5px;
        padding: 10px;
        margin: 10px 0;
        overflow: auto;
    }
        .event img {
        float: left;
        height: 10%;
        margin-right: 20px;
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
        <h1 style="color:#5E2BFF;">Favorites</h1>
    </div>
    <div class="navbar">
            <a class="active" href="/favorites/eventstab.php"><b>EVENTS</b></a>
            <a href="/favorites/clubstab.php">CLUBS</a>
    </div>
    <h2>Tue, Jan 17</h2>
    <div class="event">
        <img src ="Images/events/gwcgbm.png">
        <p>Girls Who Code: <br>Coding Session<br>Tues, Jan 17 9-11pm <br>Student Union Key West Ballroom</p>
    </div>
    <h2>Fri, Jan 20</h2>
    <div class="event">
        <img src ="Images/events/geekknight.jpg">
        <p>Geek Knight: <br>Featuring 15+ Clubs<br>Fri, Jan 20 6-10pm <br>Student Union Pegasus West Ballroom</p>
    </div>
    <h2>Mon, Jan 23</h2>
    <div class="event">
        <img src ="Images/events/ucfest.png">
        <p>UCFest: <br>UCF Festival<br>Mon, Jan 23 5-11pm <br>Student Union Key West Ballroom</p>
    </div>
   
</body>

</html>
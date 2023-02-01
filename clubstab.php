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

        /* clubs styling */
        .clubs{
        border: 2px solid black;
        border-radius: 5px;
        padding: 10px;
        overflow: auto;
    }
        .clubs img {
        float: left;
        height: 20%;
        margin-right: 20px;
        border-radius: 50%;
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
        <h1 style="color:#5E2BFF;">Favorites</h1>
    </div>
    <div class="navbar">
            <a href="eventstab.php">EVENTS</a>
            <a class="active" href="clubstab.php"><b>CLUBS</b></a>
    </div>
    <div class="clubs">
        <img src ="Images/clubs/anime-spot.jpg" alt="Anime spot">
        <p><h3>Anime Spot</h3><br>Anime Spot is the anime club of the 
                University of Central Florida. We are one 
                of the largest and most active Registered 
                Student Organizations at UCF!</p>
    </div>
    <div class="clubs">
        <img src ="Images/clubs/knight-thon.jpg" alt="Knight-Thon">
        <p><h3>Knight-Thon</h3><br>Knight-Thon is the University of Central 
                Florida’s Official Dance Marathon 
                benefiting Orlando Health Arnold Palmer 
                Hospital for Children.</p>
    </div>
    <div class="clubs">
        <img src="Images/clubs/late-knights.jpg" alt="Late Knights">
        <p><h3>Late Knights</h3> <br>The goal of Late Knights is to provide UCF 
            students (and their family/friends) with a 
            place to enjoy themselves during the night 
            that is fun, safe, and on-campus.</p>
    </div>
    <div class="clubs">
        <img src="Images/clubs/womenstudentunion.jpg" alt="Women Student Union">
        <p><h3>Late Knights</h3><br>The mission of the Women Student Union
            (WSU) at UCF is to create awareness 
            about the social issues that affect people 
            who identify as women or other...</p>
    </div>
   
</body>

</html>
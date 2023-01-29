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
        table.calendar{
            border: 1px;
            font-size: 10px;
            align:center;
        }
        table.th{
            padding:5px;
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
    <div class="calendar">
    <table>
        <tr>
        <th colspan="7"><h3>Feburary 2023</h3></th>
        </tr>

        <tr>
        <th>Su</th>
        <th>Mo</th>
        <th>Tu</th>
        <th>We</th>
        <th>Th</th>
        <th>Fr</th>
        <th>Sa</th>
        </tr>

        <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        </tr>

        <tr>
        <td>8</td>
        <td>9</td>
        <td>10</td>
        <td>11</td>
        <td>12</td>
        <td>13</td>
        <td>14</td>
        </tr>

        <tr>
        <td>15</td>
        <td>16</td>
        <td>17</td>
        <td>18</td>
        <td>19</td>
        <td>20</td>
        <td>21</td>
        </tr>

        <tr>
        <td>22</td>
        <td>23</td>
        <td>24</td>
        <td>25</td>
        <td>26</td>
        <td>27</td>
        <td>28</td>
        </tr>

        <tr>
        <td>29</td>
        <td>30</td>
        <td>31</td>
</tr>

</table></div>


   
</body>

</html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <style>
    <?php include ("/css/main.css")?>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="back">
  <a href="clubprofile.php"><i class="fa fa-chevron-left" style="font-size:36px"></i></a>
  </div>

    <div class="pagetitle">
      <h2>Create An Event</h2>
    </div>

    <div class="eventform">
      <form>
        <label for="title">Title*</label>
        <input type="text" id="title" name="title" value="Title"><br>
        <input type="text" id="sdate" name="sdate" value="Start Date"><br>
        <input type="text" id="stime" name="stime" value="Start Time"><br>
        <input type="text" id="edate" name="edate" value="End Date"><br>
        <input type="text" id="etime" name="etime" value="End Time"><br>
        <input type="text" id="location" name="location" value="Location"><br>
        <input type="text" id="description" name="description" value="Description"><br>
      </form>

      <div class="uploadimage">
        <h5>Upload Image</h5>
        <h6>recommended size: 1080 x 1080</h6>
        <button>Upload File</button>
      </div>

      <div class="eventtags">
        <h5>Tags</h5>
        <ul>
          <li><button>Social</button></li>
          <li><button>Music</button></li>
          <li><button>Sports</button></li>
          <li><button>+</button></li>
        </ul>
      </div>

      <div class="promotebutton">
        <form>
          <input type="checkbox" id="promote" name="promote" value="promote">
          <label for="promote"> Promote Event</label><br>
        </form>
      </div>
    </div>

    <button>Create Event</button>
   
</body>

</html>

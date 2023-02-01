<?php include "templates/header.php>"?>
  <div class="back">
    <i class="fa fa-chevron-left" style="font-size:36px" onclick="history.back()"></i>
  </div>

    <div class="pagetitle">
      <h2>Create An Event</h2>
    </div>

    <div class="eventform">
      <form>
        <input type="text" id="title" name="title" placeholder="Title"><br>
        <input type="text" id="sdate" name="sdate" placeholder="Start Date"><br>
        <input type="text" id="stime" name="stime" placeholder="Start Time"><br>
        <input type="text" id="edate" name="edate" placeholder="End Date"><br>
        <input type="text" id="etime" name="etime" placeholder="End Time"><br>
        <input type="text" id="location" name="location" placeholder="Location"><br>
        <input type="text" id="description" name="description" placeholder="Description"><br>
      </form>
      </div>
      
      <div class="uploadimage">
        <h5>Upload Image:</h5>
        <h6>recommended size: 1080 x 1080</h6>
        <button>Upload File</button>
      </div>

      <div class="eventtags">
        <h5>Tags:</h5>
        <ul>
          <li><button>Social</button></li>
          <li><button>Music</button></li>
          <li><button>Sports</button></li>
          <li><button>+</button></li>
        </ul>
      </div>

      <div class="promotebutton">
        <h5>Promote Event</h5>
        <input type="checkbox">
    </div>

    <div class="createeb">
        <button>Create Event</button>
    </div>
   
<?php 
  include "templates/navbar.php>";
  include "templates/footer.php>";
?>

<?php include "templates/header.php>"?>
  <div class="back">
    <i class="bi bi-chevron-left" style="font-size:36px" onclick="history.back()"></i>
  </div>

    <div class="pagetitle">
      <h2>Create An Event</h2>
    </div>

    <div class="eventform">
      <form action="profile.php" method="POST" id="create_event_form" enctype="multipart/form-data">
        <input type="text" placeholder="Title" name="event_name" id="event_name" required><br>
        <span class="input-warning input-warning-create"></span>

        <input type="text" placeholder="Start Date" name="event_start_date" id="event_start_date" required><br>
        <span class="input-warning input-warning-create"></span>

        <input type="text" placeholder="Start Time" name="event_start_time" id="event_start_time" required><br>
        <span class="input-warning input-warning-create"></span>

        <input type="text" placeholder="End Date" name="event_end_date" id="event_end_date"><br>
        <span class="input-warning input-warning-create"></span>

        <input type="text" placeholder="End Time" name="event_end_time" id="event_end_time"><br>
        <span class="input-warning input-warning-create"></span>

        <input type="text" placeholder="Location" name="event_location" id="event_location" required><br>
        <span class="input-warning input-warning-create"></span>

        <input type="text" placeholder="Description" name="event_desc" id="event_desc" required><br>
        <span class="input-warning input-warning-create"></span>

        <label for="event_img">Upload Image:<br>recommended size: 1080 x 1080 px</label>
        <input type="file" name="event_img" id="event_img" accept="image/png, image/jpeg, image/jpg" value="">

        <h5>Tags</h5>
        <div class="d-block">
        <input class="" type="checkbox" name="event_tags[]" id="event_tags_social" value="social">
        <label for="event_tags_social">Social</label><br>

        <input class="" type="checkbox" name="event_tags[]" id="event_tags_music" value="music">
        <label for="event_tags_music">Music</label><br>

        <input class="" type="checkbox" name="event_tags[]" id="event_tags_sports" value="sports">
        <label for="event_tags_sports">Sports</label><br>

        <input class="" type="checkbox" name="event_tags[]" id="event_tags_gbm" value="gbm">
        <label for="event_tags_gbm">GBM</label><br>
        </div>

        <input class="" type="checkbox" name="is_promoted" id="is_promoted" checked=true>
        <label for="is_promoted">Promote Event</label><br>

        <button class="button" type="submit">Create Event</button>

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

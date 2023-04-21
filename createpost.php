<?php require "templates/header.php>"?>
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

        <label for="event_img">Upload Image (not required)<br>recommended size: 1080 x 1080 px</label>
        <input type="file" name="event_img" id="event_img" accept="image/png, image/jpeg, image/jpg" value="">

        <h5 class="my-2">Tags</h5>
        <div class="d-block">
                <input class="filters--input input-tag" type="checkbox" id="filter_categories_1" name="event_tags[]" value="academic">
                <label for="filter_categories_1" class="pr-3">Academic</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_2" name="event_tags[]" value="arts">
                <label for="filter_categories_2" class="pr-3">Arts</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_3" name="event_tags[]" value="business">
                <label for="filter_categories_3" class="pr-3">Business</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_4" name="event_tags[]" value="career development">
                <label for="filter_categories_4" class="pr-3">Career Development</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_5" name="event_tags[]" value="community service">
                <label for="filter_categories_5" class="pr-3">Community Service</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_6" name="event_tags[]" value="concert">
                <label for="filter_categories_6" class="pr-3">Concert</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_7" name="event_tags[]" value="cultural">
                <label for="filter_categories_7" class="pr-3">Cultural</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_8" name="event_tags[]" value="entertainment">
                <label for="filter_categories_8" class="pr-3">Entertainment</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_9" name="event_tags[]" value="film and media">
                <label for="filter_categories_9" class="pr-3">Film and Media</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_10" name="event_tags[]" value="fitness">
                <label for="filter_categories_10" class="pr-3">Fitness</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_11" name="event_tags[]" value="food">
                <label for="filter_categories_11" class="pr-3">Food</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_12" name="event_tags[]" value="gbm">
                <label for="filter_categories_12" class="pr-3">GBM</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_13" name="event_tags[]" value="greek">
                <label for="filter_categories_13" class="pr-3">Greek</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_14" name="event_tags[]" value="health">
                <label for="filter_categories_14" class="pr-3">Health</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_15" name="event_tags[]" value="holiday">
                <label for="filter_categories_15" class="pr-3">Holiday</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_16" name="event_tags[]" value="music">
                <label for="filter_categories_16" class="pr-3">Music</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_17" name="event_tags[]" value="stem">
                <label for="filter_categories_17" class="pr-3">STEM</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_18" name="event_tags[]" value="social">
                <label for="filter_categories_18" class="pr-3">Social</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_19" name="event_tags[]" value="spiritual">
                <label for="filter_categories_19" class="pr-3">Spiritual</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_20" name="event_tags[]" value="sports">
                <label for="filter_categories_20" class="pr-3">Sports</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_21" name="event_tags[]" value="technology">
                <label for="filter_categories_21" class="pr-3">Technology</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_categories_22" name="event_tags[]" value="workshop">
                <label for="filter_categories_22" class="pr-3">Workshop</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_campus_1" name="event_tags[]" value="main">
                <label for="filter_campus_1" class="pr-3">Main Campus</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_campus_1" name="event_tags[]" value="downtown">
                <label for="filter_campus_1" class="pr-3">Downtown</label>

                <input class="filters--input input-tag" type="checkbox" id="filter_campus_1" name="event_tags[]" value="rosen">
                <label for="filter_campus_1" class="pr-3">Rosen</label><br><br>
          
        </div>

        <input class="input-tag" type="checkbox" name="is_promoted" id="is_promoted" checked=true>
        <label for="is_promoted">Promote Event</label><br>

        <button class="button" type="submit">Create Event</button>

      </form>
      </div>
      
      <!-- <div class="uploadimage">
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
    </div> -->
   
<?php 
  include "templates/navbar.php>";
  include "templates/footer.php>";
?>

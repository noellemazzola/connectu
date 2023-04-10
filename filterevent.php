<?php include "templates/header.php" ?>
<div class="page-title">
    <a class="back-arrow"><i class="bi bi-chevron-left" onclick="history.back()"></i></a>
    <h2>Filters</h2>
</div>
<form class="filters--form remove-spacing" action="searchevent.php" method="POST">
    <fieldset class="filters--fieldset">
        <legend class="filters--title">Categories</legend>
        <div class="justify-content-around">
            <div class="d-block text-left">
                <input class="filters--input" type="checkbox" id="filter_categories_1" name="filter_categories[]" value="academic">
                <label for="filter_categories_1">Academic</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_2" name="filter_categories[]" value="arts">
                <label for="filter_categories_2">Arts</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_3" name="filter_categories[]" value="business">
                <label for="filter_categories_3">Business</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_4" name="filter_categories[]" value="career development">
                <label for="filter_categories_4">Career Development</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_5" name="filter_categories[]" value="community service">
                <label for="filter_categories_5">Community Service</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_6" name="filter_categories[]" value="concert">
                <label for="filter_categories_6">Concert</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_7" name="filter_categories[]" value="cultural">
                <label for="filter_categories_7">Cultural</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_8" name="filter_categories[]" value="entertainment">
                <label for="filter_categories_8">Entertainment</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_9" name="filter_categories[]" value="film and media">
                <label for="filter_categories_9">Film and Media</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_10" name="filter_categories[]" value="fitness">
                <label for="filter_categories_10">Fitness</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_11" name="filter_categories[]" value="food">
                <label for="filter_categories_11">Food</label><br>
            </div>
            <div class="d-block text-left">
                <input class="filters--input" type="checkbox" id="filter_categories_12" name="filter_categories[]" value="gbm">
                <label for="filter_categories_12">GBM</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_13" name="filter_categories[]" value="greek">
                <label for="filter_categories_13">Greek</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_14" name="filter_categories[]" value="health">
                <label for="filter_categories_14">Health</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_15" name="filter_categories[]" value="holiday">
                <label for="filter_categories_15">Holiday</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_16" name="filter_categories[]" value="music">
                <label for="filter_categories_16">Music</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_17" name="filter_categories[]" value="stem">
                <label for="filter_categories_17">STEM</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_18" name="filter_categories[]" value="social">
                <label for="filter_categories_18">Social</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_19" name="filter_categories[]" value="spiritual">
                <label for="filter_categories_19">Spiritual</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_20" name="filter_categories[]" value="sports">
                <label for="filter_categories_20">Sports</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_21" name="filter_categories[]" value="technology">
                <label for="filter_categories_21">Technology</label><br>

                <input class="filters--input" type="checkbox" id="filter_categories_22" name="filter_categories[]" value="workshop">
                <label for="filter_categories_22">Workshop</label><br>
            </div>
        </div>
    </fieldset>
    <fieldset class="filters--fieldset">
        <legend class="filters--title">Campus</legend>
        <div class="justify-content-around">
            <div class="d-block">
                <input class="filters--input" type="checkbox" id="filter_campus_1" name="filter_campus[]" value="Bike">
                <label for="filter_campus_1">Main</label><br>
            </div>
            <div class="d-block">
                <input class="filters--input" type="checkbox" id="filter_campus_2" name="filter_campus[]" value="Bike">
                <label for="filter_campus_2">Downtown</label><br>
            </div>
            <div class="d-block">
                <input class="filters--input" type="checkbox" id="filter_campus_3" name="filter_campus[]" value="Bike">
                <label for="filter_campus_3">Rosen</label><br>
            </div>
        </div>
    </fieldset>
    <button class="button mt-2" type="submit">Apply</button>
    <button class="button mt-1" type="submit">Clear Filters</button>
</form>


<?php include "templates/footer.php" ?>
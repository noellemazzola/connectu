<?php

$firstname = "";
$lastname = "";
$profile_bio = "";
$profile_img = "Images/profile/default-profile-pic.png";

function display_setFirstName($name) {
    global $firstname;
    $firstname = $name;
}

function display_setLastName($name) {
    global $lastname;
    $lastname = $name;
}

function display_setBio($bio) {
    global $profile_bio;
    $profile_bio = $bio;
}

function display_setPicture($pictureURL) {
    global $profile_img;
    $profile_img = $pictureURL;
}
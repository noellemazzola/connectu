<?php include "templates/header.php" ?>
<div class="page-title">
    <a class="back-arrow"><i class="bi bi-chevron-left" onclick="history.back()"></i></a>
    <h2>Messages</h2>
</div>
<div class="messages--header align-items-center px-4">
    <img class="profile-pic" src="Images/profile/michael-dam-mEZ3PoFGs_k-unsplash.jpg" alt="Picture of woman in red" class="Person2" class="header">
    <div class="d-block messages--name">
        <p class="username">@kate.zimmer</p>
        <p class="full-name">Kate Zimmer</p>
    </div>
</div>
<p class="messages--time">Today</p>
<p class="messages--time">9:29 pm</p>

<div class="messages--container">
    <p class="messages--message sent">Hey! Are you attending the event on Friday?</p>
    <p>seen</p>
</div>

<div class="messages--container">
    <p class="messages--message received">Yes I am! Would you like to go together?</p>
</div>

<div class="messages--container">
    <p class="messages--message sent">Absolutely, lets meet up at Millican Hall at 4pm.</p>
    <p>seen</p>
</div>

<p class="messages--time">11:03 pm</p>

<div class="messages--container">
    <p class="messages--message received">Can't wait see you there!</p>
</div>

<div class="messages--bar justify-content-around align-items-center">
    <form class="messages--form">
        <input type="text" class="messages--input" placeholder="Message..." aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="messages--send" type="button" id="button-addon2"><i class="bi bi-send"></i></button>
    </form>
    <i class="bi bi-mic"></i>
</div>

 <?php include "templates/footer.php" ?>
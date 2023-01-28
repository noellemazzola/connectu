<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messages</title>
    <link rel="stylesheet" href="/css/main.css">
    <style>
    <?php include ("/css/main.css")?>
    </style>
    <style>
        * {
    box-sizing: border-box;
}

html,body{
    margin: 0 auto;
    background-color: #F2EFE9;
}

@media screen and (max-width: 428px) {
    div {
        display: flex;
        flex-wrap: wrap;
    }
    .back i {
        padding: 45px;
    }
    /*CLUBPROFILE.PHP STYLING*/
    .clubicons {
        float: right;
    }
    .clubicons i {
        padding: 4px;
    }
    .userprofile ul {
        list-style-type: none;
        margin: 5px;
        padding: 5px;
    }
    .userprofile li {
        float: left;
        padding: 10px;
    }
    .clubpost h2 {
        color: #5E2BFF;
    }
    /*USER.PHP STYLING*/
    .userprofile {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .userpic {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .userpic img {
        border-radius: 50%;
        object-fit: cover;
        width: 156px;
        height: 156px;
        position: relative;
        margin-top: 20px;
    }
    .userprofile h2 {
        font-family: 'Franklin Gothic Medium';
        font-size: 35px;
        font-weight: normal;
    }
    .userprofile h4 {
        font-family: 'Helvetica light';
        font-size: 18px;
        font-weight: normal;
        text-align: center;
        padding: 10px;
    }
    .userprofile a {
        font-family: 'Helvetica light';
        color: #707070;
        background-color: white;
        text-decoration: none;
        text-align: center;
        font-size: 20px;
        padding: 10px 100px
    }
    }
/*SEARCH.PHP STYLING*/
.container{
    width: 100%;
    min-height: 100vh;
    padding: 10%;
    background-color: blueviolet;
    background-position: center;
}
/* Message container - Person1 */
.container1msg{
    border: 2px solid #707070;
    background-color: #6290C8;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
    overflow: auto;
  }
  
  /* Message container - Person2 */
  .container2msg {
    border-color: #707070;
    background-color: #403D39;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
    overflow: auto;
  }
  
  /* Style Img - Person1 */
  .container1msg img.Person1 {
    float: left;
    max-width: 60px;
    margin-right: 20px;
    border-radius: 50%;
  }
  
  /* Style Img - Person2 */
  .container2msg img.Person2 {
    float: right;
    margin-left: 20px;
    border-radius: 50%;
    max-width: 60px;
  }
  
  /* Text from Person1 */
  .message-sent1 {
    float: right;
    color: #FFFFFF;
  }
  
  /* Text from Person2 */
  .message-sent2 {
    float: left;
    color: #FFFFFF;
  }

  /* Header for Messages */
  .header {
  padding: 60px;
  text-align: center;
  background: ##F2EFE9;
  color: white;
  font-size: 30px;
}

    .header.p{
        color: #5E2BFF;
    }

/* Profile Image */
    .header.img{
    max-width: 20px;
    float: left;
    margin-left: 20px;
    border-radius: 50%;
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
    <h1>Message</h1>
    <img src="Images/profile/christopher-campbell-rDEOVtE7vOs-unsplash.jpg" alt="Picture of woman in red" class="Person2" class="header">
    <p>@kate.zimmer</p>
    </div>

    <div class="container1msg">
        <img src="Images/profile/alex-starnes-WYE2UhXsU1Y-unsplash.jpg" alt="Picture of woman in white" class="Person1">
        <p style="color:#FFFFFF;">Hey! Are you attending the event on Friday?</p>
        <span class="message-sent1">5:22pm</span>
    </div>

    <div class="container2msg">
    <img src="Images/profile/christopher-campbell-rDEOVtE7vOs-unsplash.jpg" alt="Picture of woman in red" class="Person2">
    <p style="color:#FFFFFF;">Yes I am! Would you like to go together?</p>
    <span class="message-sent2">5:25pm</span>
    </div>

    <div class="container1msg">
    <img src="Images/profile/alex-starnes-WYE2UhXsU1Y-unsplash.jpg" alt="Picture of woman in white" class="Person1">
    <p style="color:#FFFFFF;">Absolutely, lets meet up at Millican Hall at 4pm.</p>
    <span class="message-sent1">5:27pm</span>
    </div>

    <div class="container2msg">
    <img src="Images/profile/christopher-campbell-rDEOVtE7vOs-unsplash.jpg" alt="Picture of woman in red" class="Person2">
    <p style="color:#FFFFFF;">Can't wait see you there!</p>
    <span class="message-sent2">5:30pm</span>
    </div>


</html>
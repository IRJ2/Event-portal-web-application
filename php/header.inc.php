<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="http://localhost/Event-portal-web-application/css/userstyle.css" />
    <script
      src="https://kit.fontawesome.com/80858aacba.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- header start -->
    <div class="header">
      <a class="logoimg" href="#">
        <img id="logo" src="http://localhost/Event-portal-web-application/images/logo.png" alt="company logo" />
      </a>
      <div class="header-right">
        <a class="active" href="/eventlist.html">Home</a>
        <a href="/createevent.html">Create</a>
        <a href="/contact.html">Contact</a>
        <a href="/about.html">About</a>
        <a href="/studentprofile.html">Profile</a>
        <a href="php/logout.inc.php">Logout</a>
      </div>
    </div>
    <!-- header end -->
    <!-- title start-->
    <div class="titleblock">
      <img
        id="titleimg"
        src="http://localhost/Event-portal-web-application/images/themeblock.PNG"
        alt="white pattern "
        style="width: 100%"
      />
      <div class="title">
        <p style="font-size: 50px" class="title-text" id="title">Get your event</p>
        <div class="row">
          <!-- form -->
          <form action="#" class="search-box">
            <div class="input-form">
              <input
                id="search-event"
                type="text"
                placeholder="Event Title or keyword"
              />
            </div>
            <div class="search-form">
              <a id="find-e" href="#">Find Event</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- title end -->
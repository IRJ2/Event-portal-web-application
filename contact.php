<?php

session_start();

// Check if the user is logged in or not
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: loginpage.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="http://localhost/Event-portal-web-application/css/userstyle.css">
  <style>
    table,
    td {
      border: 0;
      width: 650px;
    }
  </style>
</head>

<body>
  <!-- header start -->
  <div class="header">
    <a class="logoimg" href="#">
      <img id="logo" src="http://localhost/Event-portal-web-application/images/logo.png" alt="company logo" />
    </a>
    <div class="header-right">
      <a class="active" href="eventlist.php">Home</a>
      <a href="eventcreate.php">Create</a>
      <a href="event.php">My Event</a>
      <a href="contact.php">Contact</a>
      <a href="about.php">About</a>
      <a href="studentprofile.php">Profile</a>
      <a href="php/logout.inc.php">Logout</a>
    </div>
  </div>
  <!-- header end -->
  <!-- title start-->
  <div class="titleblock">
    <img id="titleimg" src="http://localhost/Event-portal-web-application/images/themeblock.png" alt="white pattern " style="width: 100%" />
    <div class="title">
      <p style="font-size: 50px" class="title-text" id="title">Get in touch</p>
      <p style="font-size: 18px" class="title-text" id="title">We'd love hearing from you. Here are some simple ways to contact us</p>
    </div>
  </div>
  <!-- title end -->
  <div id="contactus">
    <table style="width:650px;">
      <tr>
        <td><img src="http://localhost/Event-portal-web-application/images/location.jpg" width="200px" height="150px"></td>
        <td><img src="http://localhost/Event-portal-web-application/images/phone.jpg" width="50px" height="50px"></td>
        <td><img src="http://localhost/Event-portal-web-application/images/mail.jpg" width="80px" height="80px"></td>
      </tr>
      <?php
      require_once "php/connect.php";

      $result = mysqli_query($link, "SELECT * FROM admin");
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['a_location'] . "</td>";
        echo "<td>" . $row['a_phone'] . "</td>";
        echo "<td>" . $row['a_email'] . "</td>";
        echo "</tr>";
      }
      echo "</table>";
      mysqli_close($link);
      ?>
  </div>
</body>
<footer>
  <div class="footer-">
    <p>Authors: Irene , Deekshita , Dileep , Abhinav</p>
    <p><a href="#">eventima@team6.com</a></p>
  </div>
</footer>

</html>
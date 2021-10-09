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
  <link rel="stylesheet" type="text/css" href="http://localhost/Event-web-portal-application/css/userstyle.css" />
</head>

<body>
  <!-- header start -->
  <div class="header">
    <a class="logoimg" href="#">
      <img id="logo" src="http://localhost/Event-web-portal-application/images/logo.png" alt="company logo" />
    </a>
    <div class="header-right">
      <a href="eventlist.php">Home</a>
      <a href="eventcreate.php">Create</a>
      <a class="active" href="event.php">My Event</a>
      <a href="contact.php">Contact</a>
      <a href="about.php">About</a>
      <a href="studentprofile.php">Profile</a>
      <a href="php/logout.inc.php">Logout</a>
    </div>
  </div>
  <!-- header end -->
  <!-- title start-->
  <?php
  require_once "php/connect.php";
  $e_id = $_POST['event_id'];
  $result = mysqli_query($link, "select * from event where e_id='$e_id'");
  while ($row = mysqli_fetch_array($result)) {
  ?>
    <div class="titleblock">
      <img id="titleimg" src="http://localhost/Event-web-portal-application/images/themeblock.PNG" alt="white pattern " style="width: 100%" />
      <div class="title">
        <p style="font-size: 50px" class="title-text" id="title"><?php echo $row["e_title"]; ?></p>
      </div>
    </div>
    <!-- title end -->
    <div id="left">
      <p class="h1">Event Description</p>
      <p class="p1">
      <div id="right">
        <p class="e-overview" style="text-align: center">Event Overview</p>
        <table>
          <tr>
            <td>
              <p class="e-ov-text">Start date</p>
            </td>
            <td>
              <p class="e-ov-text">:</p>
            </td>
            <td>
              <p class="e-ov-text"><?php echo $row["start_date"]; ?></p>
            </td>
          </tr>
          <tr>
            <td>
              <p class="e-ov-text">End date</p>
            </td>
            <td>
              <p class="e-ov-text">:</p>
            </td>
            <td>
              <p class="e-ov-text"><?php echo $row["end_date"]; ?></p>
            </td>
          </tr>
          <tr>
            <td>
              <p class="e-ov-text">Start time</p>
            </td>
            <td>
              <p class="e-ov-text">:</p>
            </td>
            <td>
              <p class="e-ov-text"><?php echo $row["start_time"]; ?></p>
            </td>
          </tr>
          <tr>
            <td>
              <p class="e-ov-text">End date</p>
            </td>
            <td>
              <p class="e-ov-text">:</p>
            </td>
            <td>
              <p class="e-ov-text"><?php echo $row["end_date"]; ?></p>
            </td>
          </tr>
          <tr>
            <td>
              <p class="e-ov-text">Register close date</p>
            </td>
            <td>
              <p class="e-ov-text">:</p>
            </td>
            <td>
              <p class="e-ov-text"><?php echo $row["reg_close_date"]; ?></p>
            </td>
          </tr>
          <tr>
            <td>
              <p class="e-ov-text">Register close time</p>
            </td>
            <td>
              <p class="e-ov-text">:</p>
            </td>
            <td>
              <p class="e-ov-text"><?php echo $row["reg_close_time"]; ?></p>
            </td>
          </tr>

          <tr>
            <td><input class="reg-event" type="button" onclick="location.href='<?php echo $row["reg_link"]; ?></p>'" value="Register Now"></td>
            <!-- <td><input class="reg-event" type="button" value="Register Now"></td> -->
            <td></td>
            <form action="delete.php" method="post">
              <td><input class="del-event" type="submit" name="deleteItem" value="Delete" <?php $_SESSION["eid"] = $e_id ?>></td>
          </tr>
          </form>
        </table>
      </div>
      <p class="p1"><?php echo $row["details"];} ?>
      </p>
      </p>
    </div>
    </form>
</body>
<footer>
  <div class="footer-">
    <p>Authors: Irene , Deekshita , Dileep , Abhinav</p>
    <p><a href="#">eventima@team6.com</a></p>
  </div>
</footer>
</html>
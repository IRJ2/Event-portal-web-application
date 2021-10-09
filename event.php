<?php
session_start();
// Check if the user is logged in or not
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: loginpage.php");
  exit;
}
?>
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
    <img id="titleimg" src="http://localhost/Event-web-portal-application/images/themeblock.PNG" alt="white pattern " style="width: 100%" />
    <div class="title">
      <p style="font-size: 50px" class="title-text" id="title">My Events</p>
    </div>
  </div>
  
    <?php
    require_once "php/connect.php";
    $id = $_SESSION["id"];
    $result = mysqli_query($link, "select  e_id,e_title from event where s_id=$id");
    $row = mysqli_num_rows($result);
    for ($i = 0; $i < $row; $i++) {
      while ($row = mysqli_fetch_array($result)) {
    ?>
    <table class="event-box" style="width: 80%">
        <form method="post" action="event2.php">
          <tr>
            <th width=20%>
              <img class="pin" src="http://localhost/Event-web-portal-application/images/pin.PNG" alt="Blue pin" />
            </th>
            <th width=50%>
              <p class="ev-title"><?php echo $row[1]; ?></p>
            </th>
            <td width=30%><input class="det-button" type="submit"  value="View" name="view" /></td>
            <td><input type="hidden"  value="<?php echo $row[0]; ?>" name="event_id" /></td>
          </tr>
        </form>
        </table>
    <?php
      }
      mysqli_free_result($result);
    }
    mysqli_close($link);
    ?>
  
</body>
<footer>
  <div class="footer-">
    <p>Authors: Irene , Deekshita , Dileep , Abhinav</p>
    <p><a href="#">eventima@team6.com</a></p>
  </div>
</footer>

</html>
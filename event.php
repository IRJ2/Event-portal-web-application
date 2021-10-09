<?php
session_start();
// Check if the user is logged in or not
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
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
		  <a class="active" href="/eventlist.html">Home</a>
      <a href="/createevent.html">Create</a>
      <a href="/myevent.html">My Event</a>
      <a href="/contact.html">Contact</a>
      <a href="/about.html">About</a>
      <a href="/studentprofile.html">Profile</a>
      <a href="loginpage.html">Logout</a>
		</div>
	  </div>
	  <!-- header end -->
	  <!-- title start-->
	  <div class="titleblock">
		<img
		  id="titleimg"
		  src="http://localhost/Event-web-portal-application/images/themeblock.PNG"
		  alt="white pattern "
		  style="width: 100%"
		/>
		<div class="title">
		  <p style="font-size: 50px" class="title-text" id="title">My Events</p>
		</div>
	  </div>
<table class="event-box" style="width: 80%">
<?php
require_once "connect.php";
$id=$_SESSION["id"];
$result=mysqli_query($link,"select e_title from event where s_id=$id");
$row=mysqli_num_rows($result);
for($i=0;$i<$row;$i++){
  while($row=mysqli_fetch_array($result)){
$_SESSION["etitle"]=$row[$i];
?>    
    <form method="post" action="event2.php"><tr><th>
	<img class="pin" src="http://localhost/Event-web-portal-application/images/pin.PNG" alt="Blue pin" />
    </th>
    <th><p class="ev-title"><?php  echo $row[$i];?></p>
    </th>
    <td><input class="det-button" type="submit"  value="View" name="btn-view"/></td>
    </tr></form>
<?php
  }
  mysqli_free_result($result);
}
               mysqli_close($link);
              ?></table>
</body>
  <footer>
	<div class="footer-">
	  <p>Authors: Irene , Deekshita , Dileep , Abhinav</p>
	  <p><a href="#">eventima@team6.com</a></p>
	</div>
  </footer>
</html>

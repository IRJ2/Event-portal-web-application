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
    <script
      src="https://kit.fontawesome.com/80858aacba.js"
      crossorigin="anonymous"
    ></script>
    <style>
      table {
        border: 1px solid rgb(207, 199, 199);
		border-radius: 10px;
      }
      .t {
        width: 600px;
        height: 300px;
        font-size: 20px;
        padding: 4px;
      }
    </style>
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
		  <p style="font-size: 50px" class="title-text" id="title">my profile</p>
		</div>
	  </div>
	  <!-- title end -->
	  <div id="contain2">
		<div class="bord1">
		  <i class="fas fa-user-graduate" style="font-size: 8em"></i>
		</div>
	  </div>
    <div id="contain1">
      <div class="bord">
        <p style="font-size: 25px">
          <i class="far fa-clone"></i> Student Information
        </p>
        <table class="t">
	<?php
		require_once "connect.php";
		$id=$_SESSION["id"];
		$result = mysqli_query($link,"select * from student,phone where student.s_id=phone.s_id and student.s_id=$id");
		while($row = mysqli_fetch_array($result))
		 {
		  echo "<tr>";
		  echo "<td><p>Name</p></td>";
		  echo "<td><p>:</p></td>";
		  echo "<td>" . $row['f_name'] ." ".$row['m_name']." ".$row['l_name']."</td>";
		  echo "</tr>";
		  echo "<tr>";
		  echo "<td><p>Phone</p></td>";
		  echo "<td><p>:</p></td>";
		  echo "<td>" . $row['phone_no'] ."</td>";
		  echo "</tr>";
		  echo "<tr>";
		  echo "<td><p>Email</p></td>";
		  echo "<td><p>:</p></td>";
		  echo "<td>" . $row['s_email'] ."</td>";
		  echo "</tr>";
		  echo "<td><p>Branch</p></td>";
		  echo "<td><p>:</p></td>";
		  echo "<td>" . $row['branch'] ."</td>";
		  echo "</tr>";
		  echo "<tr>";
		  echo "<td><p>Batch</p></td>";
		  echo "<td><p>:</p></td>";
		  echo "<td>" . $row['batch'] ."</td>";
		  echo "</tr>";
                  }
		echo "</table>";
               mysqli_close($link);
              ?>	
      </div>
    </div>
    
	
  </body>
  <footer>
	<div class="footer-">
	  <p>Authors: Irene , Deekshita , Dileep , Abhinav</p>
	  <p><a href="#">eventima@team6.com</a></p>
	</div>
  </footer>
</html>

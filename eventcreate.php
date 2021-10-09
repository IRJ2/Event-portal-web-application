<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="http://localhost/Event-web-portal-application/css/userstyle.css">
	<style>
		table,td{
		border:0;
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
      <img
        id="titleimg"
        src="http://localhost/Event-web-portal-application/images/themeblock.png"
        alt="white pattern "
        style="width: 100%"
      />
      
      <div class="title">
        <p style="font-size: 50px" class="title-text" id="title">Create your Event</p>
      </div>
    </div>
    <!-- title end -->
    <!-- form starts -->
<div id="contain4" style="margin-left:auto;margin-right:auto;width:700px;">
<div align="center">
<div class="bord3">
<form action="create.php" method = "post">
    <table>
     <tr>
      <td><p><label>Event Title</label></td>
      <td>:</td>
      <td><p><input class="ip-create" type ="text" name="title" required/></p></td>
     </tr>
     <tr>
      <td><p><label>Event Details</label></td>
      <td>:</td>
      <td><p><textarea  class="ip-create" cols="40" rows="7" value="details" name="details"></textarea></p></td>
     </tr>
     <tr>
      <td><p><label>Enter Registration close date</label></td>
      <td>:</td>
      <td><p><input class="ip-create" type ="date" name="reg_close_date" required/></p></td>
     </tr>
     <tr>
      <td><p><label>Enter Registration close time</label></td>
      <td>:</td>
      <td><p><input class="ip-create" type ="time" name="reg_close_time" required/></p></td>
     </tr>
     <tr>
      <td><p><label>Enter event start date</label></td>
      <td>:</td>
      <td><p><input class="ip-create" type ="date" name="start_date" required/></p></td>
     </tr>
     <tr>
      <td><p><label>Enter event end date</label></td>
      <td>:</td>
      <td><p><input class="ip-create" type ="date" name="end_date" required/></p></td>
     </tr>
     <tr>
      <td><p><label>Enter event start time</label></td>
      <td>:</td>
      <td><p><input class="ip-create" type ="time" name="start_time" required/></p></td>
     </tr>
     <tr>
      <td><p><label>Enter event end time</label></td>
      <td>:</td>
      <td><p><input class="ip-create" type ="time" name="end_time" required/></p></td>
     </tr>
</table>
      <input id="submit-e" type = "submit"  value="Submit" name='btn-signup' style="height:45px; width:80px"/>
      <input id="reset-e" type = "reset" value="Reset" style="height:45px; width:80px"/>
    </form>
</div>
</div>
</div>
   <!---form ends--->
    </body>
    <footer>
      <div class="footer-">
        <p>Authors: Irene , Deekshita , Dileep , Abhinav</p>
        <p><a href="#">eventima@team6.com</a></p>
      </div>
    </footer>
    </html>
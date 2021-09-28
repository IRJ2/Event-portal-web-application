<?php

session_start();
 
// Check if the user is logged in or not
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginpage.php");
    exit;
}
?>
<?php
  include_once "php/header.inc.php";
?>
    <!-- event list start -->
    <table class="event-box" style="width: 80%">
      <tr>
        <th rowspan="3">
          <img class="pin" src="http://localhost/Event-portal-web-application/images/pin.PNG" alt="Blue pin" />
        </th>
        <th>
          <p class="ev-title">30 days of google cloud program</p>
        </th>
        <td rowspan="3">
          <form action="">
            <input class="det-button" type="button" value="More Details" />
          </form>
        </td>
      </tr>
      <tr>
        <td>
          <i style="color: #a8aaad" class="fas fa-calendar-day"></i>
          <p class="pd" style="display: inline">23/04/21</p>
          <p class="pd" style="display: inline"></p>
          <p class="pd" style="display: inline">10:00 AM</p>
        </td>
      </tr>
      <tr>
        <td>
          <i style="color: #a8aaad" class="fas fa-exclamation-circle"></i>
          <p class="pd" style="display: inline">20/04/21</p>
          <p class="pd" style="display: inline"></p>
          <p class="pd" style="display: inline">11:59 PM</p>
        </td>
      </tr>
    </table>
    <!-- event list end -->
    <!-- event list start -->
    <table class="event-box" style="width: 80%">
      <tr>
        <th rowspan="3">
          <img class="pin" src="http://localhost/Event-portal-web-application/images/pin.PNG" alt="Blue pin" />
        </th>
        <th>
          <p class="ev-title">30 days of google cloud program</p>
        </th>
        <td rowspan="3">
          <form action="">
            <input class="det-button" type="button" value="More Details" />
          </form>
        </td>
      </tr>
      <tr>
        <td>
          <i style="color: #a8aaad" class="fas fa-calendar-day"></i>
          <p class="pd" style="display: inline">23/04/21</p>
          <p class="pd" style="display: inline"></p>
          <p class="pd" style="display: inline">10:00 AM</p>
        </td>
      </tr>
      <tr>
        <td>
          <i style="color: #a8aaad" class="fas fa-exclamation-circle"></i>
          <p class="pd" style="display: inline">20/04/21</p>
          <p class="pd" style="display: inline"></p>
          <p class="pd" style="display: inline">11:59 PM</p>
        </td>
      </tr>
    </table>
    <!-- event list end -->
  </body>
  <?php
  include_once 'php/footer.inc.php';
  ?>
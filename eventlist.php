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
<?php
    require_once "php/connect.php";
    $result = mysqli_query($link, "select  * from event where flag=true");
    $row = mysqli_num_rows($result);
    for ($i = 0; $i < $row; $i++) {
      while ($row = mysqli_fetch_array($result)) {
    ?>
    <!-- event list start -->
    <table class="event-box" style="width: 80%">
      <tr>
        <th rowspan="3">
          <img class="pin" src="http://localhost/Event-web-portal-application/images/pin.PNG" alt="Blue pin" />
        </th>
        <th>
          <p class="ev-title"><?php echo $row['e_title']; ?></p>
        </th>
        <td rowspan="3">
          <form method="POST" action="eventdetails.php">
          <input class="det-button" type="submit"  value="View Details" name="view" />
            <td><input type="hidden"  value="<?php echo $row['e_id']; ?>" name="event_id" /></td>
          </form>
        </td>
      </tr>
      <tr>
        <td>
          <i style="color: #a8aaad" class="fas fa-calendar-day"></i>
          <p class="pd" style="display: inline"><?php echo $row['start_date']; ?></p>
          <p class="pd" style="display: inline"></p>
          <p class="pd" style="display: inline"><?php echo $row['start_time']; ?></p>
        </td>
      </tr>
      <tr>
        <td>
          <i style="color: #a8aaad" class="fas fa-exclamation-circle"></i>
          <p class="pd" style="display: inline"><?php echo $row['reg_close_date']; ?></p>
          <p class="pd" style="display: inline"></p>
          <p class="pd" style="display: inline"><?php echo $row['reg_close_time']; ?></p>
        </td>
      </tr>
    </table>
    <!-- event list end -->
    <?php
      }
      mysqli_free_result($result);
    }
    mysqli_close($link);
    ?>
  </body>
  <?php
  include_once 'php/footer.inc.php';
  ?>
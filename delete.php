<?php
session_start();
// Check if the user is logged in or not
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginpage.php");
    exit;
}
?>
<?php
require_once "php/connect.php";

$eid=$_SESSION["eid"];
$sql="delete from event where e_id=$eid";
if ($link->query($sql) === TRUE) {
  header ("Location:event.php");
}
$link->close();
?>
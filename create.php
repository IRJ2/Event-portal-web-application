<?php

session_start();
 
// Check if the user is logged in or not
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginpage.php");
    exit;
}
?>
<?php
require_once "connect.php";
if(isset($_SESSION['username']))
{
if(isset($_POST['btn-signup']))
{
if(!empty($_POST['title'])&& !empty($_POST['details']) && !empty($_POST['reg_close_date']) && !empty($_POST['reg_close_time']) && !empty($_POST['start_date']) && !empty($_POST['end_date']) && !empty($_POST['start_time']) && !empty($_POST['end_time']))
{
$id=$_SESSION["id"];
$title=$_POST['title'];
$details=$_POST['details'];
$reg_close_date=$_POST['reg_close_date'];
$reg_close_time=$_POST['reg_close_time'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];
$query=" INSERT INTO event(e_title,reg_close_date,reg_close_time,start_date,start_time,end_date,end_time,details,s_id,flag) values('$title','$reg_close_date','$reg_close_time','$start_date','$start_time','$end_date','$end_time','$details','$id',false)"; 
$run=mysqli_query($link,$query) or die(mysqli_error());
if($run)
{
header ("location:eventlist.php");
}
else
{
echo "Form not submitted";
}
}
else
{echo "All fields requires";
}
}
}
?>


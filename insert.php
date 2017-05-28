<?php
error_reporting(E_ERROR | E_PARSE);
$timeCheckOut1 = date("H:i", strtotime(str_replace(' ', '', $_POST['timepicker1'])));
$timeCheckOut2 = date("H:i", strtotime(str_replace(' ', '', $_POST['timepicker2'])));
$dateCheckIn = date('Y-m-d', strtotime($_POST['checkin']));
$dateCheckOut = date('Y-m-d', strtotime($_POST['checkout']));
$con = mysql_connect("maurice.invictus.webcup.fr","invictus","W_QLHK2RahNR3");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 mysql_select_db("invictus", $con);
$sql="INSERT INTO booking (`checkin`, `checkout`,`checkintime`, `checkouttime`, npeople, nuniverse)
VALUES ('$dateCheckIn','$dateCheckOut','$timeCheckOut1','$timeCheckOut2','$_POST[people]','$_POST[universe]')";
$res = mysql_query($sql);
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Thank you for ordering your ticket to AndroidLand";
header("refresh:3; url=home.php"); /* Redirect browser */
exit();
mysql_close($con);
?>
<?php
error_reporting(E_ERROR | E_PARSE);

$con = mysql_connect("localhost","invictus","W_QLHK2RahNR3");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 mysql_select_db("invictus", $con);
$sql="INSERT INTO votes (proposition, universeVote)
VALUES ('$_POST[text]','$_POST[universe]')";
$res = mysql_query($sql);
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Thank you for voting ! You will soon hear the results";
header("refresh:3; url=home.php"); /* Redirect browser */
exit();
mysql_close($con);
?>
<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$API_KEY= 123213232323232lkdslkdlskdslkdsldk;
$con = mysqli_connect("localhost","test_user","123456","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

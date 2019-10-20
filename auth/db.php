<?php
$con = mysqli_connect("localhost","root","12345678","cenpharma");
session_start();
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

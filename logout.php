<?php
session_start();
UNSET($_SESSION['cenuser']);
if(!isset($_SESSION['cenuser']))
{
// Redirecting To Home Page
header("Location: ./index.php");
}
?>

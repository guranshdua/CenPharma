<?php
session_start();
UNSET($_SESSION['cenpharmacist']);
UNSET($_SESSION['cenadmin']);
if(!isset($_SESSION['cenpharmacist'])&&!isset($_SESSION['cenadmin']))
{
// Redirecting To Home Page
header("Location: ./index.php");
}
?>

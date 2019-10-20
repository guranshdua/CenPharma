<?php
if(isset($_SESSION["cenadmin"]))
{
  header("Location: ./dash.php");
  exit();
}
?>

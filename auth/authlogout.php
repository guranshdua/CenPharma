<?php
if(!isset($_SESSION["cenadmin"])&&!isset($_SESSION["cenpharmacist"]))
{
  header("Location: ./index.php");
}

?>

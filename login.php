<!DOCTYPE html>
<html>
  <head>
    <?php require("./partials/metahome.php");?>
  </head>
  <?php


  require("./auth/db.php");
  $startTime = date("Y-m-d H:i:s");
  $cenvertedTime = date('Y-m-d H:i:s',strtotime('+5 hour +30 minutes',strtotime($startTime)));
  if(isset($_SESSION['cenuser']))
  {
    header("location: ./index.php");
  }
  if(isset($_POST['email']))
  {
    extract($_POST);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['pwd']);
    $password = mysqli_real_escape_string($con,$password);
    $query = "SELECT * FROM `users` WHERE Email='$email' and Password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    $record = mysqli_fetch_assoc($result);
    if($rows==1)
    {
      $query="UPDATE `users` SET Last_Login='$cenvertedTime' where ID='$record[ID]'";
        $_SESSION['cenuser']=$record['ID'];
        header("location: ./index.php");
    }
    else {
      $err=1;
    }
  }
  ?>
  <body style="background-color:#000;">
    <form class="myloginform" method="post" action="">
      <div>
        <img src="./Images/CenPharma_Logo.png" style="display:block; width:70%; margin-left: auto;margin-right: auto;">
      </div>
      <h4 style="text-align: center;">CenPharma Login</h4>
      <?php
      if(isset($err))
      {
        if($err==1)
        {
          echo "<p class='error'>
          Enter valid Email & Password.
          </p>";
        }
        unset($err);
      }
      ?>
      <div class="myformgroup">
        <input class="myformcontrol" type="email" name="email" placeholder="Email" required/>
      </div>
      <div class="myformgroup">
        <input class="myformcontrol" type="password" name="pwd" placeholder="Password" required/>
      </div>
      <div class="myformgroup">
        <button type="submit" name="submit" class="btn">Submit</button>
      </div>
      <p>
        Not Registered? Sign Up <a href="./signup.php">here.</a>
      </p>
    </form>

  </body>
</html>

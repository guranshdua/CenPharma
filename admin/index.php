<!DOCTYPE html>
<html>
  <head>
    <?php require("../partials/meta.php");?>
  </head>
  <?php
  require("../auth/db.php");
  require("./auth/authlogin.php");
  if(isset($_POST['email']))
  {
    extract($_POST);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['pwd']);
    $password = mysqli_real_escape_string($con,$password);
    $query = "SELECT * FROM `admins` WHERE Email='$email' and Password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    $record = mysqli_fetch_assoc($result);
    if($rows==1)
    {
        $_SESSION['cenadmin']=$record['ID'];
        $_SESSION['cenadminname']=$record['Name'];
        header("location: ./dash.php");
    }
    else {
      $err=1;
    }
  }
  ?>
  <body style="background-color:#000;">
    <form class="myloginform" method="post" action="">
      <div>
        <img src="../Images/CenPharma_Logo.png" style="display:block; width:70%; margin-left: auto;margin-right: auto;">
      </div>
      <h4 style="text-align: center;">Admin Login</h4>
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
    </form>
  </body>
</html>

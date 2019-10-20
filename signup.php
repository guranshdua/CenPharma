<!DOCTYPE html>
<html>
  <head>
    <?php require("./partials/metahome.php");?>
  </head>
  <?php
  require("./auth/db.php");
  if(isset($_POST['email']))
  {
    extract($_POST);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['pwd']);
    $password = mysqli_real_escape_string($con,$password);
    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($con,$name);
    $address1 = stripslashes($_REQUEST['address1']);
    $address1 = mysqli_real_escape_string($con,$address1);
    $address2 = stripslashes($_REQUEST['address2']);
    $address2 = mysqli_real_escape_string($con,$address2);
    $pincode = stripslashes($_REQUEST['picode']);
    $pincode = mysqli_real_escape_string($con,$pincode);
    $city = stripslashes($_REQUEST['city']);
    $city = mysqli_real_escape_string($con,$city);
    $mobile = stripslashes($_REQUEST['mobile']);
    $mobile = mysqli_real_escape_string($con,$mobile);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $gender=$_REQUEST['gender'];
    $dob=$_REQUEST['dob'];
    $check=1;
    while($check!=0)
    {
      $id=rand(1000,9999);
      $id="CPU".$id;
      $que="SELECT * from `users` where ID='$id'";
      $result=mysqli_query($con,$que);
      if(mysqli_num_rows($result)==0)
      {
        $check=0;
      }
      else {
        $check=1;
      }
    }
    $query = "INSERT INTO `users` values('$id','$name','$address1','$address2','$city',$pincode,$mobile,'$email','".md5($password)."','$gender','$dob',NULL)";
    if(mysqli_query($con,$query))
    {
      header("Location: ./login.php");
    }

    else {
      $err=1;
    }
  }
  ?>
  <body style="background-color:#000;">
    <form class="myloginform" method="post" action="" style="max-width:700px;display:flex; flex-wrap: wrap; justify-content:center; text-align:center;">
      <div style="flex:0 0 100%;">
        <img src="./Images/CenPharma_Logo.png" style="display:block; width:20%; margin-left: auto;margin-right: auto;">
      </div>
      <h4 style="flex:0 0 100%; " style="text-align: center;">CenPharma Login</h4>
      <?php
      if(isset($err))
      {
        if($err==1)
        {
          echo "<p class='error'>
          Error while Signing Up.
          </p>";
        }
        unset($err);
      }
      ?>
      <div class="myformgroup" style="flex:0 0 45%; margin-right:10px;">
        <input class="myformcontrol" type="text" name="name" placeholder="Name" required/>
      </div>
      <div class="myformgroup" style="flex:0 0 45%; margin-right:10px;">
        <input class="myformcontrol" type="number" name="mobile" placeholder="Mobile Number" required/>
      </div>
      <div class="myformgroup" style="flex:0 0 45%; margin-right:10px;">
        <input class="myformcontrol" type="text" name="address1" placeholder="Address Line 1" required/>
      </div>
      <div class="myformgroup" style="flex:0 0 45%; margin-right:10px;">
        <input class="myformcontrol" type="text" name="address2" placeholder="Address Line 2"/>
      </div>
      <div class="myformgroup" style="flex:0 0 45%; margin-right:10px;">
        <input class="myformcontrol" type="text" name="city" placeholder="City" required/>
      </div>
      <div class="myformgroup" style="flex:0 0 45%; margin-right:10px;">
        <input class="myformcontrol" type="number" name="picode" placeholder="Pincode" required/>
      </div>
      <div class="myformgroup" style="flex:0 0 45%; margin-right:10px;">
        <input class="myformcontrol" type="email" name="email" placeholder="Email" required/>
      </div>
      <div class="myformgroup" style="flex:0 0 45%; margin-right:10px;">
        <input class="myformcontrol" type="password" name="pwd" placeholder="Password" required/>
      </div>
      <div class="myformgroup" style="flex:0 0 45%; margin-right:10px;">
        <select class="myformcontrol" name="gender">
          <option value="Male">
            Male
          </option>
          <option value="Female">
            Female
          </option>
          <option value="Other">
            Other
          </option>
        </select>
      </div>
      <div class="myformgroup" style="flex:0 0 45%; margin-right:10px;">
        <input class="myformcontrol" type="date" name="dob" placeholder="Date Of Birth" required/>
      </div>
      <div class="myformgroup" style="flex:0 0 100%; margin-right:10px; text-align:center;">
        <button style="" type="submit" name="submit" class="btn">Submit</button>
      </div>
      <p>
        Already Registered? Login <a href="./signup.php">here.</a>
      </p>
    </form>

  </body>
</html>

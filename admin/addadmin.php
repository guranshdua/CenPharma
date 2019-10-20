<!DOCTYPE html>
<html>
  <head>
    <?php require("../partials/meta.php");?>
  </head>
  <?php
  require("../auth/db.php");
  require("./auth/authlogout.php");
  if(isset($_POST['submit']))
  {
    extract($_POST);
    $check=1;
    $password="CenPharma";
    while($check==1)
    {
      $id=rand(1,9999);
      $id="CPA".$id;
      $que="SELECT * from `admins` where ID='$id'";
      $result=mysqli_query($con,$que);
      if(mysqli_num_rows($result)==0)
      {
        $check=0;
      }
      else {
        $check=1;
      }
    }
      $err=0;
      $featured=0;
      $query = "INSERT INTO `admins` values('$id','$name','".md5($password)."','$email','$mobile','$gender','$dob','$pharmacy','$address1','$address2','$city','$pincode')";
      if(mysqli_query($con,$query))
      {
        $err=0;
      }
      else {
        $err=1;
      }
        //echo "DONE";





  }
  ?>
  <body>
    <?php
    require("./partials/navbarhome.php");
    ?>
    <div class="mywrapper">
      <?php
      require("./partials/sidebar.php");
      ?>
      <div class="main-panel">
        <div class="container">
          <h3 style="padding-bottom:20px; padding-top:40px">Add Admin</h3>
          <button class="mybtn btn-blue" onclick="location.href='./viewadmins.php'">Manage Admins</button>
          <?php
          if(isset($err))
          {
            if($err==0)
            {
              echo "Updated Successfully";
            }
            else {
              echo "Could not be updated";
            }
            unset($err);
          }
          ?>
          <form class="myloginform1" method="post" action="" enctype="multipart/form-data" style=" position:relative;display:flex; flex-wrap: wrap; justify-content:center; text-align:center;">
            <div class="myformgroup1" style="flex:0 0 45%; margin-right:10px;">
              <input class="myformcontrol1" type="text" name="name" placeholder="Name" required/>
            </div>
            <div class="myformgroup1" style="flex:0 0 45%; margin-right:10px;">
              <input class="myformcontrol1" type="email" name="email" placeholder="E-Mail" required/>
            </div>
            <div class="myformgroup1" style="flex:0 0 45%; margin-right:10px;">
              <input class="myformcontrol1" type="tel" name="mobile" placeholder="Mobile" required/>
            </div>

            <select class="myformcontrol1" style="flex:0 0 45%;" name="gender">
              <option value='Male'>Male</option>
              <option value='Female'>Female</option>
              <option value='Others'>Others</option>
            </select>

            <div class="myformgroup1" style="flex:0 0 45%; margin-right:10px;">
              <input class="myformcontrol1" type="date" name="dob" placeholder="Date Of Birth" required/>
            </div>
            <div class="myformgroup1" style="flex:0 0 45%; margin-right:10px;">
              <select class="myformcontrol1" name="pharmacy">
                <?php
                $query="SELECT * from `pharmacies` ORDER BY Name";
                $result = mysqli_query($con,$query) or die(mysql_error());
                $rows = mysqli_num_rows($result);
                while($record=mysqli_fetch_assoc($result))
                {
                  echo "<option value='$record[ID]'>
                  $record[Name]
                  </option>";
                }
                ?>
              </select>
            </div>
            <div class="myformgroup1" style="flex:0 0 45%; margin-right:10px;">
              <input class="myformcontrol1" type="text" name="address1" placeholder="Address Line 1" required/>
            </div>
            <div class="myformgroup1" style="flex:0 0 45%; margin-right:10px;">
              <input class="myformcontrol1" type="text" name="address2" placeholder="Address Line 2"/>
            </div>
            <div class="myformgroup1" style="flex:0 0 45%; margin-right:10px;">
              <input class="myformcontrol1" type="text" name="city" placeholder="City" required/>
            </div>
            <div class="myformgroup1" style="flex:0 0 45%; margin-right:10px;">
              <input class="myformcontrol1" type="number" name="pincode" placeholder="Pincode" required/>
            </div>
            <div class="myformgroup1" style="flex:0 0 100%; margin-right:10px; text-align:center;">
              <button style="" type="submit" name="submit" class="btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

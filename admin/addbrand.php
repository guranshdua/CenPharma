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
    $currentDir = getcwd();
    chdir('../Images/brands/');
    $uploadDirectory = getcwd();
    $errors = []; // Store all foreseen and unforseen errors here
    $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions
    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = (explode('.',$fileName));
    $fileExtension = strtolower(end($fileExtension));

    $uploadPath =  $uploadDirectory."/";



        if (! in_array($fileExtension,$fileExtensions)) {
            $err =1;
        }

        else if ($fileSize > 200000000) {
            $err=2;
        }

        else {
          $check=1;
          while($check==1)
          {
            $id=rand(1,9999);
            $id="CPB".$id;
            $que="SELECT * from `medicinecategory` where ID='$id'";
            $result=mysqli_query($con,$que);
            if(mysqli_num_rows($result)==0)
            {
              $check=0;
            }
            else {
              $check=1;
            }
          }
          $didUpload=move_uploaded_file($_FILES["myfile"]["tmp_name"], $uploadPath.$id.'.'.$fileExtension);
          if ($didUpload) {
              $err=0;
              $featured=0;
              $query = "INSERT INTO `medbrands` values('$id','$name','$address','$fileExtension')";
              if(mysqli_query($con,$query))
              {
                $err=0;
              }
              else {
                $err=1;
              }
                //echo "DONE";

            }
        }

        chdir('../../admin/');
    $name=$_POST['name'];

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
          <h3 style="padding-bottom:20px; padding-top:40px">Add Medicine Brand</h3>
          <button class="mybtn btn-blue" onclick="location.href='./viewbrands.php'">Manage Brands</button>
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
            <div class="myformgroup1" style="flex:0 0 55%; margin-right:10px;">
              <input class="myformcontrol1" type="text" name="name" placeholder="Name" required/>
            </div>
            <div class="myformgroup1" style="flex:0 0 55%; margin-right:10px;">
              <input class="myformcontrol1" type="text" name="address" placeholder="Address" required/>
            </div>
            <div class="myformgroup1" style="flex:0 0 55%; margin-right:10px;">
              <input class="myformcontrol1" type="file" name="myfile" placeholder="" required/>
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

<!DOCTYPE html>
<html>
  <head>
    <?php require("../partials/meta.php");?>
  </head>
  <?php
  require("../auth/db.php");
  require("./auth/authlogout.php");

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
          <h3 style="padding-bottom:20px; padding-top:40px">Manage Admins</h3>
          <button class="mybtn btn-blue" onclick="location.href='./addadmin.php'">Add New Admin</button>
          <?php
          if(isset($_GET['res']))
          {
            extract($_GET);

              if($res==1)
              {
                echo "<p>
                Updated Successfully
                </p>";
              }
              else {
                echo "<p>
                Error while updating.
                </p>";
              }

          }
           ?>
          <div class="container" style="min-height:0px;display: block;overflow-x: auto;">
            <table>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Pharmacy</th>
            <th>City</th>
            <th>Delete</th>
            </tr>
            <?php
            $query="SELECT * from `admins`";
            $result = mysqli_query($con,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            while($record=mysqli_fetch_assoc($result))
            {
              $query1="SELECT `Name` from `pharmacies` WHERE ID='$record[PharmId]'";
              $result1 = mysqli_query($con,$query1);
              $record1=mysqli_fetch_assoc($result1);
              echo "<tr>
              <td>
              $record[ID]
              </td>
              <td>
              $record[Name]
              </td>
              <td>
              $record[Email]
              </td>
              <td>
              $record[Mobile]
              </td>
              <td>
              $record1[Name]
              </td>
              <td>
              $record[City]
              </td>

              <td>
              <button class='btn' onclick='location.href=\"./functions.php?fid=deleteadmin&pid=$record[ID]\"'>Delete Admin</button>
              </td>
              </tr>";
            }
            ?>

            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

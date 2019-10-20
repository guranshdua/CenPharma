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
          <h3 style="padding-bottom:20px; padding-top:40px">Manage Pharmacies</h3>
          <button class="mybtn btn-blue" onclick="location.href='./addpharmacy.php'">Add New Pharmacy</button>
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
                Error while updating. Remove all accounts associated with the Pharmacy before.
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
            <th>Contact</th>
            <th>Address</th>
            <th>Manage</th>
            </tr>
            <?php
            $query="SELECT * from `pharmacies`";
            $result = mysqli_query($con,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            while($record=mysqli_fetch_assoc($result))
            {
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
              $record[DisplayAddress]
              </td>
              <td>
              <button class='btn' onclick=";
              if($record['ID']=="CP1000")
              {
                echo "";
              }
              else
              {
              echo "'location.href=\"./functions.php?fid=deletepharmacy&pid=$record[ID]\"'";
              }
              echo ">Delete Pharmacy</button>
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

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
          <h3 style="padding-bottom:20px; padding-top:40px">Manage Products</h3>
          <button class="mybtn btn-blue" onclick="location.href='./addproduct.php'">Add New Product</button>
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
            <th>Brand</th>
            <th>Salt</th>
            <th>Barcode</th>
            <th>Category</th>
            <th>Featured</th>
            <th>Manage</th>
            <th>Delete</th>
            </tr>
            <?php
            $query="SELECT * from `medicines`";
            $result = mysqli_query($con,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            while($record=mysqli_fetch_assoc($result))
            {
              $query1="SELECT `Name` from `medbrands` WHERE ID='$record[Brand]'";
              $query1;
              $result1 = mysqli_query($con,$query1);
              $record1=mysqli_fetch_assoc($result1);
              $query2="SELECT `Category` from `medicinecategory` WHERE ID='$record[Category]'";
              $result2 = mysqli_query($con,$query2) or die(mysql_error());
              $record2=mysqli_fetch_assoc($result2);
              echo "<tr>
              <td>
              $record[ID]
              </td>
              <td>
              $record[Name]
              </td>
              <td>
              $record1[Name]
              </td>
              <td>
              $record[Salts]
              </td>
              <td>
              $record[Barcode]
              </td>
              <td>
              $record2[Category]
              </td>
              <td>
              $record[Featured]
              </td>
              <td>
              <button class='btn' onclick='location.href=\"./functions.php?fid=togglefeaturedproducts&pid=$record[ID]\"'>Toggle Featured</button>
              </td>
              <td>
              <button class='btn' onclick='location.href=\"./functions.php?fid=deleteproduct&pid=$record[ID]\"'>Delete Product</button>
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

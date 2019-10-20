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
          <h3 style="padding-bottom:20px; padding-top:40px">Manage Medicine Categories</h3>
          <button class="mybtn btn-blue" onclick="location.href='./addcategory.php'">Add New Category</button>
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
          <div class="container" style="min-height:0px;">
            <table>
            <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Featured</th>
            <th>Manage Ft.</th>
            <th>Manage</th>
            </tr>
            <?php
            $query="SELECT * from `medicinecategory`";
            $result = mysqli_query($con,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            while($record=mysqli_fetch_assoc($result))
            {
              $featured="YES";
              if($record['Featured']==0)
              {
                $featured="NO";
              }
              echo "<tr>
              <td>
              $record[ID]
              </td>
              <td>
              $record[Category]
              </td>
              <td>
              $featured
              </td>
              <td>
              <button class='btn' onclick='location.href=\"./functions.php?fid=togglefeaturedcategory&pid=$record[ID]\"'>Toggle Featured</button>
              </td>
              <td>
              <button class='btn' onclick='location.href=\"./functions.php?fid=deletecategory&pid=$record[ID]\"'>Delete Category</button>
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

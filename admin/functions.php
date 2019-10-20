<?php
require("../auth/db.php");
if(isset($_GET['fid']))
{

  extract($_GET);
  if($fid=="togglefeaturedcategory")
  {
    echo "Hello";
    $query="SELECT Featured FROM `medicinecategory` where ID='$pid'";
    $result = mysqli_query($con,$query);
    $rows = mysqli_num_rows($result);
    $record = mysqli_fetch_assoc($result);
    if($record['Featured']==0)
    {
      $query="SELECT * FROM `medicinecategory` where Featured=1";
      $result = mysqli_query($con,$query);
      $rows = mysqli_num_rows($result);
      if($rows<4)
      {
          $query="UPDATE `medicinecategory` SET Featured=1 WHERE ID='$pid'";
          echo $query;
          if(mysqli_query($con,$query))
          {
              header("location: ./viewcategory.php?res=1");
          }

      }
      else
      {
        header("location: ./viewcategory.php?res=0");
      }
    }


  }
  elseif($fid=="togglefeaturedproducts")
  {
    $query="SELECT Featured FROM `medicines` where ID='$pid'";
    $result = mysqli_query($con,$query);
    $rows = mysqli_num_rows($result);
    $record = mysqli_fetch_assoc($result);
    if($record['Featured']==0)
    {
      $query="SELECT * FROM `medicines` where Featured=1";
      $result = mysqli_query($con,$query);
      $rows = mysqli_num_rows($result);
      if($rows<6)
      {
          $query="UPDATE `medicines` SET Featured=1 WHERE ID='$pid'";
          echo $query;
          if(mysqli_query($con,$query))
          {
              header("location: ./viewproducts.php?res=1");
          }

      }
      else
      {
        header("location: ./viewproductsphp?res=0");
      }
    }
  elseif($record['Featured']==1)
  {
        $query="UPDATE `medicines` SET Featured=0 WHERE ID='$pid'";
        echo $query;
        if(mysqli_query($con,$query))
        {
            header("location: ./viewproducts.php?res=1");
        }
  }
}
elseif ($fid=="deletecategory") {
  $query="DELETE FROM `medicinecategory` where ID='$pid'";
  if(mysqli_query($con,$query))
  {
    header("location: ./viewcategory.php?res=1");
  }
  else
  {
    header("location: ./viewcategory.php?res=0");
  }
}
  elseif($fid=="deletepharmacy")
  {
    $query="DELETE FROM `pharmacies` where ID='$pid'";
    if(mysqli_query($con,$query))
    {
      header("location: ./viewpharmacy.php?res=1");
    }
    else
    {
      header("location: ./viewpharmacy.php?res=0");
    }
  }
  elseif($fid=="deletebrand")
  {
    $query="DELETE FROM `medbrands` where ID='$pid'";
    if(mysqli_query($con,$query))
    {
      header("location: ./viewbrands.php?res=1");
    }
    else
    {
      header("location: ./viewbrands.php?res=0");
    }
  }
  elseif($fid=="deleteproduct")
  {
    $query="DELETE FROM `medicines` where ID='$pid'";
    if(mysqli_query($con,$query))
    {
      header("location: ./viewproducts.php?res=1");
    }
    else
    {
      header("location: ./viewproducts.php?res=0");
    }
  }
}
else {
  header("location: ./index.php");
}
?>

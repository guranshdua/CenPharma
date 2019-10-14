<!DOCTYPE html>
<html>
  <head>
  <?php require("../partials/meta.php");?>
  </head>
  <body >
    <?php
    require("../partials/navbar.php");
    ?>
    <nav class="navbar" style="background-color:rgb(100,100,100,1); padding:1rem 4rem;">
        <div class="navContent" style="justify-content:center; margin-right:auto;">
            <div class="row">
              <div class="halfcol">
                <input type="search" class="myform" placeholder="Search"/>
              </div>  
                <button class="mybtn btn-blue">Search Pharmacies!</button>
            </div>  
        </div>
      </nav>
    <?php
    require("../partials/footer.php");
    ?>
  </body>
</html>
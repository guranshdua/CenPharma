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
      <section id="home2" class="mt-1 mb-1">
        <div class="container">
            <h2 class="pt-2 mb-2" style="text-align:center;">Pharmacies</h2>
            <p class="desc mb-2" style="text-align:center;">
              Our partners help us restlessly in order to provide meds to everyone!
            </p>
            <div class="container mr-5 ml-5">
              <div class="row">
                <div class="col4">
                  <div class="card white" style="justify-content:center; padding-top:0px;">
                    <div class="box">
                      <img src="../Images/CenPharma_Logo.png" style="max-width:70%;" class="mb-1"/>
                      <h5 class="fw600">Name</h6>
                        <h5 class="title">Name</h5>
                      <p class="desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

      </section>
    <?php
    require("../partials/footer.php");
    ?>
  </body>
</html>

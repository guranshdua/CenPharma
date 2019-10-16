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
                <button class="mybtn btn-blue">Search Medicines!</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </div>
        </div>
      </nav>
      <div class="container" style="margin-top:2rem;">
        <div class="row">
          <div class="sixcol">
            <h5 class="fw600">Filters:</h5>
            <input type="checkbox"  /> Allopathy<br />
            <input type="checkbox" /> Homeopathy<br />
            <input type="checkbox" /> Wellness<br />
            <input type="checkbox" /> Ayurveda<br />
          </div>
          <div class="col" style="border-left:1px solid rgb(40,40,40,0.5);">
            <div class="container" style="padding:0rem 3rem;">
              <h2 style="text-align:center;">Medicines</h2>
              <div class="row">
                <div class="quarcol">
                  <div class="card">
                    <div>
                      <img src="../Images/products/Himalaya/Tagara.png" class="home-prod-image ">
                    </div>
                    <h6 style="margin-bottom:0px;">Himalaya Tagara</h6>
                    <p style="font-size:9px; margin-bottom: 0.5rem; color:#555;">
                      Ayurvedic 
                    </p>
                    <p class="prod-desc">Bottle of 60 Tablets<br>MRP:₹152 (20% Off)<br></p>
                    <h6 style="margin-top:10px">₹160</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      require("../partials/footer.php");
      ?>
  </body>
</html>

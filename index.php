<!DOCTYPE html>
<html>
  <head>
  <?php require("./partials/metahome.php");?>
  </head>
  <body >
    <section id="home1" style="background-color:#000;">
      <div class="mnav">
      <?php
      require("./partials/navbarhome.php");
      ?>
        </div>
        <br />
        <h1 class="cwhite">CenPharma</h1>
        <h4 class="cwhite fw400">Medicines delivered fast!</h4>
        <br />
        <h4 class="fw400"><a style="text-decoration:none; color:#6bf;" href="./medicine">Order Now ></a></h4>
    </section>
    <section id="home2">
      <div style="text-align:center; padding-top:20px; padding-bottom:20px;">
          <h2>Featured</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="quarcol">
            <div class="card zoom" style="justify-content: center;">
              <div>
                <img src="Images/Home/icons/allopathy.png" class="home-card-image ">
              </div>
              <h4 style="margin-bottom:0.75rem">Allopathy</h4>
            </div>
          </div>
          <div class="quarcol">
            <div class="card zoom" style="justify-content: center;">
              <div>
                <img src="Images/Home/icons/homeopathy.png" class="home-card-image ">
              </div>
              <h4 style="margin-bottom:0.75rem">Homeopathy</h4>
            </div>
          </div>
          <div class="quarcol">
            <div class="card zoom" style="justify-content: center;">
              <div>
                <img src="Images/Home/icons/ayurveda.png" class="home-card-image ">
              </div>
              <h4 style="margin-bottom:0.75rem">Ayurveda</h4>
            </div>
          </div>
          <div class="quarcol">
            <div class="card zoom" style="justify-content: center;">
              <div>
                <img src="Images/Home/icons/wellness.png" class="home-card-image ">
              </div>
              <h4 style="margin-bottom:0.75rem">Wellness</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="home2">
      <div style="text-align:center; padding-top:20px; padding-bottom:20px;">
        <h2>Best Offers</h2>
    </div>
    <div class="container">
      <div class="row" style="justify-content: center;">
        <div class="sixcol">
          <div class="card zoom" style="justify-content: center;">
            <div>
              <img src="Images/products/Himalaya/Tagara.png" class="home-prod-image ">
            </div>
            <h6>Himalaya Tagara</h6>
            <p class="prod-desc">Bottle of 60 Tablets<br>MRP:₹152 (20% Off)<br></p>
            <h6 style="margin-top:10px">₹160</h6>
          </div>
        </div>
        <div class="sixcol">
          <div class="card zoom" style="justify-content: center;">
            <div>
              <img src="Images/products/Himalaya/Tagara.png" class="home-prod-image ">
            </div>
            <h6>Himalaya Tagara</h6>
            <p class="prod-desc">Bottle of 60 Tablets<br>MRP:₹152 (20% Off)<br></p>
            <h6 style="margin-top:10px">₹160</h6>
          </div>
        </div>
        <div class="sixcol">
          <div class="card zoom" style="justify-content: center;">
            <div>
              <img src="Images/products/Himalaya/Tagara.png" class="home-prod-image ">
            </div>
            <h6>Himalaya Tagara</h6>
            <p class="prod-desc">Bottle of 60 Tablets<br>MRP:₹152 (20% Off)<br></p>
            <h6 style="margin-top:10px">₹160</h6>
          </div>
        </div>
        <div class="sixcol">
          <div class="card zoom" style="justify-content: center;">
            <div>
              <img src="Images/products/Himalaya/Tagara.png" class="home-prod-image ">
            </div>
            <h6>Himalaya Tagara</h6>
            <p class="prod-desc">Bottle of 60 Tablets<br>MRP:₹152 (20% Off)<br></p>
            <h6 style="margin-top:10px">₹160</h6>
          </div>
        </div>
        <div class="sixcol">
          <div class="card zoom" style="justify-content: center;">
            <div>
              <img src="Images/products/Himalaya/Tagara.png" class="home-prod-image ">
            </div>
            <h6>Himalaya Tagara</h6>
            <p class="prod-desc">Bottle of 60 Tablets<br>MRP:₹152 (20% Off)<br></p>
            <h6 style="margin-top:10px">₹160</h6>
          </div>
        </div>
        
        
      </div>
    </div>
    </section>
    <?php
    require("./partials/footerhome.php");
    ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="./js/cenpharma.js"></script>
  </body>
</html>
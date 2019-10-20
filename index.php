<!DOCTYPE html>
<html>
  <head>
  <?php require("./partials/metahome.php");
  require("./auth/db.php");
  ?>

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
        <h3 class="pt-2 pb-2">Why CenPharma?</h3>
        <p class="desc pb-2">
          We provide the best in-class pharmaceutical services at a single place.
        </p>
      </div>
      <div class="container mr-5 ml-5">
        <div class="row">
          <div class="col4">
            <div class="card white" style="justify-content:center; padding-top:0px;">
              <div class="box">
                <i class="fa fa-map-marker icon" style=""></i>
                <h6 class="fw600" style="font-size:18px;">Order from any Pharmacy.</h6>
                <p class="desc">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </div>
          <div class="col4">
            <div class="card white" style="justify-content:center; padding-top:0px;">
              <div class="box">
                <i class="fa fa-clock-o icon" style=""></i>
                <h6 class="fw600" style="font-size:18px;">Always available</h6>
                <p class="desc">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </div>
          <div class="col4">
            <div class="card white" style="justify-content:center; padding-top:0px;">
              <div class="box">
                <i class="fa fa-list-alt icon" style=""></i>
                <h6 class="fw600" style="font-size:18px;">Trusted</h6>
                <p class="desc">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="home2">
      <div style="text-align:center; padding-top:20px; padding-bottom:20px;">
        <h3 class="pt-2 pb-2">Best Offers</h3>
    </div>
    <div class="container">
      <div class="row mb-2" style="justify-content: center;">
        <div class="sixcol">
          <div class="card homecard zoom" style="justify-content: center;">
            <div>
              <img src="Images/products/Himalaya/Tagara.png" class="home-prod-image ">
            </div>
            <h6>Himalaya Tagara</h6>
            <p class="prod-desc">Bottle of 60 Tablets<br>MRP:₹152 (20% Off)<br></p>
            <h6 style="margin-top:10px">₹160</h6>
          </div>
        </div>
        <div class="sixcol">
          <div class="card homecard zoom" style="justify-content: center;">
            <div>
              <img src="Images/products/Himalaya/Tagara.png" class="home-prod-image ">
            </div>
            <h6>Himalaya Tagara</h6>
            <p class="prod-desc">Bottle of 60 Tablets<br>MRP:₹152 (20% Off)<br></p>
            <h6 style="margin-top:10px">₹160</h6>
          </div>
        </div>
        <div class="sixcol">
          <div class="card homecard zoom" style="justify-content: center;">
            <div>
              <img src="Images/products/Himalaya/Tagara.png" class="home-prod-image ">
            </div>
            <h6>Himalaya Tagara</h6>
            <p class="prod-desc">Bottle of 60 Tablets<br>MRP:₹152 (20% Off)<br></p>
            <h6 style="margin-top:10px">₹160</h6>
          </div>
        </div>
        <div class="sixcol">
          <div class="card homecard zoom" style="justify-content: center;">
            <div>
              <img src="Images/products/Himalaya/Tagara.png" class="home-prod-image ">
            </div>
            <h6>Himalaya Tagara</h6>
            <p class="prod-desc">Bottle of 60 Tablets<br>MRP:₹152 (20% Off)<br></p>
            <h6 style="margin-top:10px">₹160</h6>
          </div>
        </div>
        <div class="sixcol">
          <div class="card homecard zoom" style="justify-content: center;">
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
    <section id="home2">
      <div style="text-align:center; padding-top:20px; padding-bottom:20px;">
          <h3 class="pt-2 pb-2">Featured Categories</h3>
      </div>
      <div class="container ml-2 mr-2">
        <div class="row mb-2">
          <div class="quarcol">
            <div class="card homecard zoom" style="justify-content: center;">
              <div>
                <img src="Images/Home/icons/allopathy.png" class="home-card-image ">
              </div>
              <h4 style="margin-bottom:0.75rem">Allopathy</h4>
            </div>
          </div>
          <div class="quarcol">
            <div class="card homecard zoom" style="justify-content: center;">
              <div>
                <img src="Images/Home/icons/homeopathy.png" class="home-card-image ">
              </div>
              <h4 style="margin-bottom:0.75rem">Homeopathy</h4>
            </div>
          </div>
          <div class="quarcol">
            <div class="card homecard zoom" style="justify-content: center;">
              <div>
                <img src="Images/Home/icons/ayurveda.png" class="home-card-image ">
              </div>
              <h4 style="margin-bottom:0.75rem">Ayurveda</h4>
            </div>
          </div>
          <div class="quarcol">
            <div class="card homecard zoom" style="justify-content: center;">
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
        <h3 class="pt-2 pb-2">Team CenPharma</h3>
        <p class="desc pb-2">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
      <div class="container mr-5 ml-5">
        <div class="row" style="justify-content:center;">
          <div class="col4">
            <div class="card white" style="justify-content:center; padding-top:0px;">
              <div class="box">
                <img class="round-circle-img-home"src="Images/Home/IMG_6723_1.jpg" />
                <h4 class="fw600" style="margin-bottom:5px;">Guransh Dua</h4>
                <p class="title" style="margin-bottom:15px;">Developer</p>
                <p class="desc">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </div>
          <div class="col4">
            <div class="card white" style="justify-content:center; padding-top:0px;">
              <div class="box">
                <img class="round-circle-img-home"src="Images/Home/IMG_0115" />
                <h4 class="fw600" style="margin-bottom:5px;">Rhythm Goyal</h4>
                <p class="title" style="margin-bottom:15px;">Developer</p>
                <p class="desc">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
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

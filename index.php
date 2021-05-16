<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php include("head.php"); ?>
</head>
<body>
  <div class="content">
    <?php include("navbar.php"); ?>
    <!-- Title -->
    <section class="white-section" id="title">
      <div class="title-image">
        <div class="title-text">
          <h1>Superconductors</h1>
        </div>
      </div>
    </section>

    <!-- Features -->

    <section class="white-section" id="features">
      <div class="container-fluid">
        <div class="row">
          <div class="feature-box col-lg-4">
            <i class="fas fa-check-circle fa-4x features-awesome"></i>
            <h3 class="feature-title">Easy to use.</h3>
            <p>Accessible even on your phone.</p>
          </div>

          <div class="feature-box col-lg-4">
            <i class="fas fa-shield-alt fa-4x features-awesome"></i>
            <h3 class="feature-title">No login required</h3>
            <p>You can use our functionalities without logging in.</p>
          </div>

          <div class="feature-box col-lg-4">
            <i class="fas fa-tools fa-4x features-awesome"></i>
            <h3 class="feature-title">Always able to help you.</h3>
            <p>Contact us if you need help our there is any problem.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Slide Show -->

    <section class="colored-section" id="slideshow">
      <div id="slideshow-carousel" class="carousel slide" data-ride="false" data-interval="2500" data-pause="hover">
        <ol class="carousel-indicators">
          <li data-target="#games-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#games-carousel" data-slide-to="1"></li>
          <li data-target="#games-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slideshow-image image-report">
              <div class="slideshow-text slideshow-text-color-black">
                <h1>Use our pre-made reports to focus on more importante things.</h1>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slideshow-image image-graph">
              <div class="slideshow-text slideshow-text-color-white">
                <h1>Check all the data we have collected.</h1>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slideshow-image image-simulation">
              <div class="slideshow-text slideshow-text-color-white">
                <h1>Make your own test in our simulation.</h1>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev carousel-arrow" href="#slideshow-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next carousel-arrow" href="#slideshow-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon"></span></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <!-- Authorship -->

    <section class="white-section" id="authorship">
      <div class="container-fluid">
        <h5>Master's thesis in Electronic and Computer Engineering.</h5>
        <h5>Perform by:</h5>
        <div class="row">
          <div class="feature-box col-lg-4">
            <h6>Professor João Rosas</h6>
          </div>
          <div class="feature-box col-lg-4">
            <h6>Professor João Pina</h6>
          </div>
          <div class="feature-box col-lg-4">
            <h6>Miguel Vieira</h6>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <?php include("footer.php"); ?>

</body>

</html>

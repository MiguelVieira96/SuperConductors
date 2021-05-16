<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php include("head.php"); ?>
</head>

<body>
  <div class="content">
    <?php include("navbar.php"); ?>

    <section class="white-section" id="login">
      <div class="container-fluid">
        <h2 class="title">Login</h2>
        <div class="container">
          <form class="" method="post">
            <div class="form-group">
              <div class="row row-form">
                <div class="col-label-login">
                  <label for="email">Email</label>
                </div>
                <div class="col-input-login">
                  <input type="email" class="from-control" id="email" name="email" placeholder="Email">
                </div>
              </div>
              <div class="row row-form">
                <div class="col-label-login">
                  <label for="password">Password</label>
                </div>
                <div class="col-input-login input-group" id="show_hide_password">
                  <input class="from-control" type="password" id="password" name="password" placeholder="Password">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary btn-password" type="button">
                      <i class="far fa-eye-slash" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
              </div>
              <button type="submit" id="submit" class="btn btn-primary btn-submit" name="button">Login</button>
              <a href="" class="forgotpass">
                <p>Forgot your password?</p>
              </a>
            </div>
          </form>
          <form class="" action="register.php" method="post">
            <div class="form-group">
              <button type="submit" id="submit" class="btn btn-primary btn-submit" name="button">New Register</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <?php include("footer.php"); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/password.js" charset="utf-8"></script>
</body>

</html>

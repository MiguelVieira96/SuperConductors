<?php include ("contactusemail.php") ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php include("head.php"); ?>
</head>

<body>
  <div class="content">
    <?php include("navbar.php"); ?>

    <section class="white-section" id="contactus">
      <div class="container-fluid">
        <h2 class="title">If you are having any difficulty or problems, please send us an email.</h2>
        <div class="container">
           <div id="error"><? echo $error.$successMessage; ?></div>
          <form method="post">
            <div class="form-group">
              <div class="row row-form">
                <div class="col-label">
                  <label for="name">Name</label>
                </div>
                <div class="col-input">
                  <input type="text" id="name" name="name" placeholder="Your name...">
                </div>
              </div>
              <div class="row row-form">
                <div class="col-label">
                  <label for="email">Email</label>
                </div>
                <div class="col-input">
                  <input type="email" id="email" name="email" placeholder="Your email...">
                </div>
              </div>
              <div class="row row-form">
                <div class="col-label">
                  <label for="reason">Reason for contacting us</label>
                </div>
                <div class="col-input">
                  <textarea id="reason" class="from-control" name="reason" placeholder="Write something..." style="height:200px"></textarea>
                </div>
              </div>
                <button type="submit" id="submit" class="btn btn-success btn-lg btn-submit" name="button">Send</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <?php include("footer.php"); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/contactusvalidation.js" charset="utf-8"></script>
</body>

</html>

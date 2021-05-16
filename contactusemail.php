<?php
  $error = ""; $successMessage = "";

  if ($_POST){

    if (!$_POST["name"]) {
      $error .= "A name is require (it can be just your first name).<br>";
    }

    if (!$_POST["email"]) {
      $error .= "An email address is require.<br>";
    }

    if (!$_POST["reason"]) {
      $error .= "A reason is require.<br>";
    }

    // validation of the email
    if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false){
      $error .= "The email address is invalid.<br>";
    }

    if ($error != ""){
      $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
    }
    else{
        $emailTo = "mre.vieira@campus.fct.unl";
        $subject = "SuperConductors";
        $content = $_POST['name']."<br>".$_POST['reason'];
        $headers = "From: ".$_POST['email'];

        if (mail($emailTo, $subject, $content, $headers)) {
          $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you as soon as possible!</div>';
        }
        else {
          $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</strong></p></div>';
        }
    }
  }
 ?>

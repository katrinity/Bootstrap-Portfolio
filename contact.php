<?php

if($_POST["submit"]) {
    $recipient="katrinity1@yahoo.com";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $name\nEmail: $email\n\n$message";

    mail($recipient, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>




<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <title>Contact</title>
</head>

<body>

  <header class="headerContainer">
    <div class="container">
      <div class="row  justify-content-md-center ">
        <div class="col-md-4">

          <div class="header">
            Katia Inshakova
          </div>
        </div>
        <div class="col-md-4">
          <ul class="nav navbar-expand-md justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" href="index.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio.html">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>

          </ul>

        </div>

      </div>
    </div>
  </header>

  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-8">
        <div class="containerMain">
          <header>
            <h2>Contact</h2>
          </header>
          <hr class="mt-3 mb-3">

          <div class="contact-form">
            <div class="form-group">
              <label class="control-label col-sm-2" for="name">Name:</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="name" placeholder="" name="name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-12">
                <input type="email" class="form-control" id="email" placeholder="" name="email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="message">Message:</label>
              <div class="col-sm-12">
                <textarea class="form-control" rows="5" id="message"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-12">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer">
    <div class="row">
      <div class="col-md-12"></div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>
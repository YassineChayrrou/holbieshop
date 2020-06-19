<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    @include('menu')
    <div class="contact-clean">
        <form method="post">
            <h2 class="text-center">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"><small class="form-text text-secondary">Please enter a correct email address.</small></div>
            <div class="form-group"><input class="form-control" type="text" name="mobile" placeholder="mobile"></div>
            <div class="form-group"><textarea class="form-control" rows="14" name="message" placeholder="Message"></textarea></div>
            <div class="form-group"><button class="btn btn-danger" type="submit">send </button></div>
        </form>
    </div>

  <footer class="footer mt-auto py-3 text-center" style="background-color: #f1f7fc;">
  <div class="container" style="width: auto; padding: 0 25px;">
    <span class="text-secondary"> &copy; 2020 HolbyShop inc. all rights reserved. </span>

  </div>
</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>


</html>
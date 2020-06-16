<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HolbieShop</title>

    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">

</head>

<body>
  @include('menu')
    <section>
        <div class="container">
            <div class="login-box">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/account-login.jpg" class="img-fluid" alt="get started">
                        <div class="container create-website">
                            <h2>New to our website?</h2>
                            <h6>Discover our service, build your dream store and share a new experience.</h6>
                            <button type="submit" class="btn  login-btn">create an account</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form class="login-form-style">
                            <div class="form-group">
                                <h2>Login to enter</h2>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Adress" aria-describedby="emailHelp">
                              <small id="emailHelp" class="form-text text-muted text-left">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-block login-btn">LOG IN</button>
                          </form>
                    </div>

                </div>
            </div>
        </div>
    </section>


  <hr class="featurette-divider">
  <footer class="footer mt-auto py-3">
    <div class="container" style="width: auto; padding: 0 25px;">
      <span class="text-secondary"> &copy; 2020 HolbyShop inc. all rights reserved. </span>
      
    </div>
  </footer>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script></body>

</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HolbieShop</title>


    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none; 
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  
  <link href="./css/home.css" rel="stylesheet">
  
  </head>

  <body>
  
  @include('menu')
<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/carousel-first-slide.jpg" alt="happy models" class="first-slide">
        <div class="container">
          <div class="carousel-caption text-left text-light">
            <h1>Welcome to <span class="text-danger">HolbyShop</span> </h1>
            <p><b>A fresh approach to shopping, you holbies will like it.</b></p>
            <p><a class="btn btn-lg text-light btn-danger btn-effects"href="/signup" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/carousel-second-slide.jpg" alt="paper cart" class="second-slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>A hole new experience.</h1>
            <p><b>Enjoy the most robust and easiest way to buy online.</b></p>
            <p><a class="btn btn-lg btn-danger btn-effects" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/carousel-third-slide.jpg" alt="clothes" class="third-slide">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Check our amazing store.</h1>
            <p><b>We got what meets your demand.</b></p>
            <p><a class="btn btn-lg btn-danger btn-effects" href="/store" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="container marketing">

    <div class="row">
      <div class="col-lg-4">
        <img src="./img/online-payment.png" alt="online payment" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Online Payment</h2>
        <p>Secure online payment with trusted services and reliable fast transactions based on stripe online-payment solution.</p>
        <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
      </div>
      <div class="col-lg-4">
        <img src="./img/online-marketing.png" alt="online payment" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Marketing</h2>
        <p>We provide a complete opportunity over your business and help you improve your market based on real time data and market share.</p>
        <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
      </div>
      <div class="col-lg-4">
        <img src="./img/online-support.png" alt="online payment" class="bd-placeholder-img rounded-circle" width="145" height="140">
        <h2>24/7 Support</h2>
        <p>We value our customers either sellers or buyers as we provide them with necessary support and services.</p>
        <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
      </div>
    </div>
    
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Discover our platform. <span class="text-muted">Set yourself new expectations.</span></h2>
        <p class="lead"></p>
      </div>
      <div class="col-md-5">
        <img src="./img/features-1.jpg" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-5 order-md-2">
      <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">It is a different experience.</span></h2>
        <p class="lead"></p>
        </div>
        <div class="col-md-7">
        <img src="./img/features-2.jpg" alt="">
        </div>

      </div>
    

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><span class="text-muted">We always have a good deal.</span>
        All the best for a whole lot less.</h2>
        <p class="lead"></p>
      </div>
      <div class="col-md-5">
      <img src="./img/features-3.jpg" alt="">
      </div>
    </div>

    <hr class="featurette-divider">


  </div>
  
</main>
<div class="jumbotron bg-light text-dark text-center">
      <h1>Discover our team</h1>
      <h2 style="text-transform: uppercase;">We are a bunch of enthusiasts</h3>
      <h2 style="text-transform: uppercase;">We love what we do</h3>
      <a href="/learn" class="btn btn-lg bg-danger text-light">Learn more</a>
</div>
<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-secondary"> &copy; 2020 HolbyShop inc. all rights reserved. </span>

  </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script></body>

</body>
</html>

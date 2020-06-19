<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
        <link href="css/fontawesome-free-5.13.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="css/fontawesome-free-5.13.0-web/css/brands.css" rel="stylesheet">
    <link href="css/fontawesome-free-5.13.0-web/css/solid.css" rel="stylesheet">
    <link href="css/store.css" rel="stylesheet">
</head>

<body>
    @include('menu')
    
    <main role="main">

    <section class="jumbotron text-center">
        <img src="./img/store-banner.jpg" alt="50% off sale banner">
        <!-- <div class="container">
        <h1>just some brand i don't know!!!</h1>
        </div> -->
    </section>

    <div class="album py-6 bg-white">
        <div class="container">
            <div class="row">
                @include('album')

            </div>
        </div>
    </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>
</body>
</html>
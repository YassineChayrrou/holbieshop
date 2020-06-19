<html>
<head>
<title>products</title>
<link rel="stylesheet" href="assets/dist/css/bootstrap.css">
<link href="css/product.css" rel="stylesheet">

</head>

<body>

  @include('menu')
  <div class="container">
      <div class="row">
          <div class="col-md-5">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/products/hoka-1.jpg" class="d-block w-100" alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="./img/products/hoka-2.jpg" class="d-block w-100" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="./img/products/hoka-3.jpg" class="d-block w-100" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
  </div>
      </div>
              <div class="col-md-7">
                  <p class="newarrival text-center">NEW</p>
                  <h2>Running shoes + FREE SHIPPING</h2>
                  <p>Product code:HBTN2576</p>
                  <img src="img/stars.png" class="stars">
                  <p class="price">USD 50.00</p>
                  <p><b>Aviability:</b> In Stock</p>
                  <p><b>Condition:</b> NEW</p>
                  <p><b>Brand:</b> HBTN Company</p>
                  <label>Quantity:</label>
                  <input type="text" value="1">
                  <button type="button" class="btn btn-danger">Add to cart</button>
                  <a class="btn btn-success" href="/checkout">Buy</a>
                </div>


  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="assets/dist/js/bootstrap.min.js"></script>
</body>

</html>

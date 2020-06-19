<html>
    <head>
        <title>Join us</title>
        <link rel="stylesheet" href="./css/signup.css">
        <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset=md-1">
                    <div class="row">
                        <div class="col-md-5 register-left">
                            <h3>Join Us</h3>
                            <p>@HolbyShop</p>
                        </div>
                        <div class="col-md-7 register-right">
                        <h2>Create account</h2>
                        
                        <form class="register-form" id="submit_form">
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-enter Password">
                        </div>
                        <button type="button" class="btn btn-lg btn-danger">Sign up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showVals() {
            let str = $( "form" ).serialize();
        }
        ()
    </script>
    </body>
    </html>
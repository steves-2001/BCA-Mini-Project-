<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>.fa {padding: 20px;font-size: 30px;width: 50px;text-align: center;text-decoration: none;}</style>
        
        <title>Autozone</title>

    </head>
    <body class="bg-white">

      <div class="container-fluid">
        <nav class="navbar sticky-top navbar-light bg-light border-bottom border-2">
            <div class="container-fluid">

                <a class="navbar-brand fw-bolder" href="product.php">Autozone</a>

                <ul class="nav justify-content-end">
                    <li class="nav-item">
                      <a class="nav-link link-dark" href="loginForm.php">Login</a>
                    </li>
                  </ul>

            </div>   
        </nav>

        <div class="jumbotron text-white jumbotron-image shadow p-5 text-center shadow-1-strong rounded mb-5 text-white" style="background-image: url(icons/Car-banner-sm.jpg);">
          <h1 class="display-4">Welcome to AUTOZONE</h1>
          <p class="lead">Used Cars Selling and Buying Platform.</p>
       
          <div class="mask pt-4 pb-4 rounded" style="background-color: rgba(0, 0, 0, 0.6)">
            <p>Our mission is to create an application that is helpful for selling and buying of used cars. <br> Lets get started by signing up first!</p>
            <p class="lead pt-2">
            <a class="btn btn-outline-dark btn-light btn-lg" href="index.php" role="button">Get Started</a></p>
            </div>
        </div>
        
        <hr><br>
        
        <div class="container">  
          <h2 class="text-center py-4 font-weight-bold">Features of Autozone :</h2>  
          <div class="row justify-content-center">
            <div class="col-sm-4 px-4 py-4">
              <div class="panel panel-primary">
                <div class="panel-heading text-center"><h3>Selling Cars are Easy</h3></div><br>
                <div class="panel-body text-center"><img src="icons/carsell.jpg" class="img-responsive" style="width:50%" alt="Image"></div><br>
                <div class="panel-footer text-center">Selling your car has never become this easy. All you need is a minute to upload your car details and you are good to go.</div>
              </div>
            </div>
            <div class="col-sm-4 px-4 py-4"> 
              <div class="panel panel-primary">
                <div class="panel-heading text-center"><h3>Find your Dream Car</h3></div><br>
                <div class="panel-body text-center"><img src="icons/car.jpg" class="img-responsive" style="width:50%" alt="Image"></div><br>
                <div class="panel-footer text-center">Browse through the hundreds of options posted by genuine sellers and find your dream car here at the best ever prices.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">    
          <div class="row justify-content-center">
            <div class="col-sm-4 px-4 py-4">
              <div class="panel panel-primary">
                <div class="panel-heading text-center"><h3 class="font-weight-bold">Easy to Use</h6></div><br>
                <div class="panel-body text-center"><img src="icons/tap.jpg" class="img-responsive" style="width:50%" alt="Image"></div><br>
                <div class="panel-footer text-center">Provides easy to use interface.We use a clean design with the zero ads to guarentee end-user satisfaction.</div>
              </div>
            </div>
            <div class="col-sm-4 px-4 py-4"> 
              <div class="panel panel-danger">
                <div class="panel-heading text-center"><h3>Responsive Web Design</h3></div><br>
                <div class="panel-body text-center"><img src="icons/responsive-design.jpg" class="img-responsive" style="width:50%" alt="Image"></div><br>
                <div class="panel-footer text-center">Responsive web design is all about creating web pages that look good on all devices. We have set up a good design to assure you that you have the perfect experience on any device.</div>
              </div>
            </div>  
          </div>
        </div><br>
        <hr>
      </div> 

      <div class="bg-secondary" style="height:1px; position:absolute; left:0; right:0; width:100%;">
        <footer class="page-footer font-small bg-secondary stylish-color-dark pt-4">
          <div class="container text-center text-md-left">
            <div class="row">
              <div class="col-md-7 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">About Us :</h5>
                <p>Our goal is to give the best experience to both the buyers and sellers. We always make sure that everyone have a good time using our service and we always look forward for your supports and feedbacks.</p>
                <h6 class="font-weight-bold">Send your feedbacks to : admin@gmail.com</h6>

              </div>
              <hr class="clearfix w-100 d-md-none">
              <div class="col-md-5 mx-auto">
                <ul class="list-unstyled">
                <li><h6 class="font-weight-bold text-uppercase mt-3 mb-4 px-4">Follow us on :</h6>
                <a href="https://www.facebook.com/" class="fa fa-facebook" alt="Facebook"></a>
                <a href="https://twitter.com/?lang=en" class="fa fa-twitter" alt="Twitter"></a>
                <a href="https://www.instagram.com/" class="fa fa-instagram" alt="Instagram"></a>
              </li>
              </ul>
              </div>
            </div>
          </div>
          <hr>
            <ul class="list-unstyled list-inline text-center py-2">
              <li class="list-inline-item"><h5 class="mb-1">Register for free</h5></li>
              <li class="list-inline-item"><a href="index.php" class="btn btn-light btn-rounded">Sign up!</a></li>
            </ul>
          <hr>
        </footer>
      </div>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Autozone</title>

    </head>
    <body class="bg-light">

        <div class="container">
            
            <nav class="navbar sticky-top navbar-light bg-light border-bottom border-2">
                <div class="container-fluid">

                        <a class="navbar-brand" href="product.php">
                        <img src="icons\logo (3).svg" alt="" width="110rem" height="30rem">
                        </a>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                          <a class="nav-link link-dark active" href="loginForm.php">Login</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link link-dark" href="index.php">Sign Up</a>
                        </li>
                      </ul>

                </div>   
            </nav>

            <section class="container">
                <div class="row">

                    <div class="jumbotron jumbotron-fluid text-black col-12 col-sm-6">
                        <div class="container">
                        <h1 class="display-5 mt-4 fw-bold h1">Welcome Back</h1>
                        <p class="lead text-black">Login to continue</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
        
                        <form class="mx-1 mx-md-4" method="POST" action="login.php">
        
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <input type="email" id="email" name="email" class="form-control" required />
                            <label class="form-label" for="email">Email</label>
                            </div>
                        </div>
        
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <input type="password" id="password" name="password" class="form-control" required/>
                            <label class="form-label" for="password">Password</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>
        
                        </form>
                    </div>
                </div>

            </section>

            

        </div>

    </body>
</html>
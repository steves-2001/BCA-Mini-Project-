<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
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
                            <a class="nav-link link-dark active" href="product.php">Buy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark " href="sell.php">Sell</a>
                        </li>
                        <li class="nav-item my-auto">
                                <form id="user" name="menuForm" method="POST" class="" action="productMenu.php">
                                    <select onChange="user.submit()" name="userSel" id="usersel" class="userButton bg-light">
                                        ><option hidden value="user"><?php echo $_SESSION['name']; ?></option>
                                        <option value="Dashbord">Dashbord</option>
                                        <option value="logout">Logout</option>
                                    </select>
                                </form>
                        </li>
                      </ul>


                </div>   
            </nav>

            <section class="container">
                <div class="row">

                        <div class="col-sm-6 mx-auto">
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sell your car</p>
                        <form class="mx-1 mx-sm-4" method="POST" action="carUpload.php" enctype="multipart/form-data">
                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">
                                    <datalist id="company">
                                        <option value="Maruti Suzuki">
                                        <option value="Mahindra">
                                        <option value="Hundai">
                                        <option value="Toyota">
                                        <option value="MG Motors">
                                    </datalist> 
                                    <input list="company" class="form-control" name="company">
                                    <label for="company" class="form-label">Company Name</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">  
                                    <datalist id="carType">
                                        <option value="Sedan">
                                        <option value="Hatchback">
                                        <option value="Coupe">
                                        <option value="Sports Car">
                                        <option value="Convertible">
                                        <option value="Station Wagon">
                                        <option value="Minivan">
                                    </datalist>
                                    <input list="carType" class="form-control" name="carType">
                                    <label for="carType" class="form-label">Car Type</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">  
                                    <input class="form-control" name="modelname" id="modelname" type="text" required>
                                    <label class="form-label" for="modelname">Car Model Name</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">  
                                    <input class="form-control" name="year" id="year" type="text">
                                    <label class="form-label" for="year">Year Of manufacture</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">  
                                    <input class="form-control" name="km" id="km" type="number">
                                    <label class="form-label" for="km">Km Driven</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">  
                                    <input class="form-control" name="fuel" id="fuel" list="fuelTypes">
                                    <datalist id="fuelTypes">
                                        <option value="Petrol">Petrol</option>
                                        <option value="Deisel">Deisel</option>
                                        <option value="CNG">CNG</option>
                                        <option value="Electric">Electric</option>
                                        <option value="Hybrid">Hybrid</option>
                                    </datalist>
                                    <label class="form-label" for="fuel">Fuel Type</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">  
                                    <input class="form-control" name="gear" id="gear" list="gearTypes">
                                    <datalist id="gearTypes">
                                        <option value="Manual">Manual</option>
                                        <option value="Automatic">Automatic</option>
                                    </datalist>
                                    <label class="form-label" for="gear">Gear Type</label>
                                </div>
                            </div>
                            
                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">  
                                    <input class="form-control" name="price" id="prize" type="number">
                                    <label class="form-label" for="price">Asking Price</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">  
                                    <input class="form-control" name="location" id="location" type="text">
                                    <label class="form-label" for="location">Curent Location</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">         
                                <input class="form-control" list="ownership" name="ownership">
                                <label class="form-label" for="ownership">Ownership Details</label>
                                <datalist id="ownership">
                                    <option value="First Hand">
                                    <option value="Second Hand">
                                    <option value="Others">
                                </datalist>    
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">
                                <textarea id="description" class="form-control" name="description" rows="5" cols="30"></textarea>
                                <label class="form-label" for="description" class="form-label">Description</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0"> 
                                    <input class="form-control" type="file" name='image'> 
                                    <label class="form-label" for="image">UploadImage</label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                <button class="btn btn-sceondary btn-lg" name="submit" type="submit">Submit</button>
                            </div>  
                                          
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
<?php

}else{

header("Location: loginForm.php");

exit();

}

?>
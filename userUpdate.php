<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

    $userID = $_SESSION['id'];

    include_once 'dbConnect.php';

    $getsql = "SELECT * FROM users WHERE userID =".$userID.";";
    $result = mysqli_query($conn,$getsql);
    $row = mysqli_fetch_array($result);

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

            <section class="container mt-1">
                <div class="row">
                   
                    <div class="col-sm-4 list-group">
                        <a href="userDashbord.php" class="list-group-item list-group-item-action">Dashbord</a>
                        <a href="userOrders.php" class="list-group-item list-group-item-action">Car Intrested</a>
                        <a href="userListed.php" class="list-group-item list-group-item-action">Car Listed</a>
                        <a href="userUpdate.php" class="list-group-item list-group-item-action active">Update Account</a>
                        <a href="userDeleteDashbord.php" class="list-group-item list-group-item-action">Delete Account</a>
                    </div>
                   
                    <div class="col-sm-8 feedMargin mx-auto my-3">
                        <h6 class="mx-4 mx-sm-5">Update Details</h6>
        
                        <form class="mx-1 mt-5 mx-md-4" method="POST" action="update.php">

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name'];?>" required/>
                            <label class="form-label" for="name">Your Name</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="email" id="email" name="email" class="form-control" value="<?php echo $row['email'];?>" required />
                            <label class="form-label" for="email">Your Email</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="password" name="password" id="password" class="form-control" value="<?php echo $row['password'];?>" required />
                            <label class="form-label" for="password">Password</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="number" id="phoneNumber" name="phoneNumber" class="form-control" value="<?php echo $row['phone'];?>" required />
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <textarea id="address" name="address" class="form-control" rows="4" required><?php echo $row['address'];?></textarea>
                            <label class="form-label" for="address">Address</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="submit" name="submit" class="btn btn-secondary btn-lg">Update</button>
                        </div>

                        </form>
                    </div>
                </div>
            </section>
    </body>
</html>
<?php

}else{

header("Location: loginForm.php");

exit();

}

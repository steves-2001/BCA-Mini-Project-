<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

    $carID = $_POST['carID'];

    include_once 'dbConnect.php';

    $getsql = "SELECT * FROM cars where carID = $carID;";
    $result = mysqli_query($conn,$getsql);
    $resultCheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $userSql = "SELECT * FROM users where userID = ".$row['userID'].";";
    $userResult = mysqli_query($conn,$userSql);
    $userRow = mysqli_fetch_assoc($userResult);

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
        
        <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>

        <script src="product.js"></script>
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

            <section class="container mt-md-2 mt-2">

                <div class="row">  
                    <div class="col-sm-10 mx-auto my-2">
                        <div class="row">
                            <div class="col col-md-8 mb-4 mb-md-0">
                                <img src="<?php echo $row['imageLocation']?>" class="card-img-top" alt="...">
                            </div>
                            <div class="card col-md-4">

                                <h5><?php echo $row['carModel']?></h5>
                                <p class="mb-2 text-muted text-uppercase small"><?php echo $row['company']?></p>
                                <p><span class="mr-1"><strong>Rs <?php echo $row['price']?></strong></span></p>
                                <div class="table-responsive">
                                    <table class="table table-sm table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <th class="pl-0 w-25" scope="row"><h6 class="card-text mt-1">Type</h6></th>
                                                    <td><?php echo $row['carType'];?></td>
                                            </tr>
                                            <tr>
                                                <th class="pl-0 w-25" scope="row"><h6 class="card-text mt-1">Year</h6></th>
                                                    <td><?php echo $row['year'];?></td>
                                            </tr>
                                            <tr>
                                                <th class="pl-0 w-25" scope="row"><h6 class="card-text mt-1">Fuel</h6></th>
                                                    <td><?php echo $row['fuel'];?></td>
                                            </tr>
                                            <tr>
                                                <th class="pl-0 w-25" scope="row"><h6 class="card-text mt-1">Transmission</h6></th>
                                                    <td><?php echo $row['gear'];?></td>
                                            </tr>
                                            <tr>
                                                <th class="pl-0 w-25" scope="row"><h6 class="card-text mt-1">Ownership</h6></th>
                                                    <td><?php echo $row['ownership'];?></td>
                                            </tr>
                                            <tr>
                                                <th class="pl-0 w-25" scope="row"><h6 class="card-text mt-1">Location</h6></th>
                                                    <td><?php echo $row['location'];?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 my-2">
                            <div class="row">
                                <div class="card mt-1 col-12 p-2">
                                    <div class="row">
                                        <div class="col-12 col-sm-8">
                                            <h6 class="card-text mt-1">Description</h6>
                                            <p class="card-text"><?php echo $row['description']?></p>
                                        </div>
                                        <div class="col-12 col-sm-4 my-1">
                                            <h6 class="card-text mt-1">Posted By</h6>
                                            <div class="table-responsive">
                                                <table class="table table-sm table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="pl-0 w-25" scope="row"><h6 class="card-text mt-1">Name</h6></th>
                                                                <td><?php echo $userRow['name'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pl-0 w-25" scope="row"><h6 class="card-text mt-1">Contact</h6></th>
                                                                <td><?php echo $userRow['phone'];?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <a href="userOrders.php" class="mt-1 btn btn-secondary">Go Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
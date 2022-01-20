<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {


    include_once 'dbConnect.php';

    $getsql = "SELECT * FROM cars;";
    $result = mysqli_query($conn,$getsql);
    $resultCheck = mysqli_num_rows($result);

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

                    <div class="col-sm-3 mb-2 ">
                        <div class="input-group-lg rounded">
                            <form method="POST" action="search.php">
                            <input type="search" name="term" class="mb-2 form-control rounded" placeholder="Car Name" aria-label="Search"
                            aria-describedby="search-addon" />
                            <button type="submit" name="submit" class="btn btn-secondary">Search</button>
                            </form>
                        </div>

                        <div class="border mt-2 p-2">
                            <form name="brandSort" method="POST" action="brandSortedProduct.php" >
                                <button type="submit" name="brand" value="Maruthi Suzuki" class="btn btn-outline-dark btn-light my-1">Maruthi Suzuki</button>
                                <button type="submit" name="brand" value="Mahindra" class="btn btn-outline-dark btn-light my-1">Mahindra</button>
                                <button type="submit" name="brand" value="Hundai" class="btn btn-outline-dark btn-light my-1">Hyndai</button>
                                <button type="submit" name="brand" value="Toyota" class="btn btn-outline-dark btn-light my-1">Toyota</button>
                                <button type="submit" name="brand" value="MG Motors" class="btn btn-outline-dark btn-light my-1">MG Motors</button>
                                <a href="product.php" class="btn btn-outline-dark btn-light my-1">All</a>
                            </form>
                        </div>

                        <div class="border mt-2 p-2">
                            <form name="priceSort" method="POST" action="priceSortedProduct.php" >
                                <label class="form-label d-block">Price: </label>
                                <button type="submit" name="price" value="0" class="btn btn-outline-dark btn-light my-1">0 - 30 Lkh</button>
                                <button type="submit" name="price" value="3000000" class="btn btn-outline-dark btn-light my-1">30 - 60 Lkh</button>
                                <button type="submit" name="price" value="6000000" class="btn btn-outline-dark btn-light my-1">60 - 90 Lkh</button>
                                <button type="submit" name="price" value="9000000" class="btn btn-outline-dark btn-light my-1">90 - 120 Lkh</button>
                                <a href="product.php" class="btn btn-outline-dark btn-light my-1">All</a>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-sm-9">
                    <?php

                            if($resultCheck > 0) {
                            while($row = mysqli_fetch_assoc($result)) {

                                if($_SESSION['id'] != $row['userID']){

                                $brand = $_POST['brand'];

                                if($row['company'] == $brand){
                           
                                $carID = $row['carID'];
                            ?>
                        <div class="col-sm-8 feedMargin mx-auto">
                            <div class="card">
                                <img src="<?php echo $row['imageLocation']?>" class="card-img-top" alt="...">
                                <div class="card-body my-1">
                                    <h5 class="card-title fs-2"><?php echo $row['carModel']?></h5>
                                    <div class="d-flex justify-content-evenly">
                                    <span class="card-text border border-grey rounded-pill p-1"><?php echo $row['km']?>km</span>
                                    <span class="card-text border border-grey rounded-pill p-1"><?php echo $row['ownership']?></span>
                                    <span class="card-text border border-grey rounded-pill p-1"><?php echo $row['fuel']?></span>
                                    </div>
                                    <span class="fs-3 card-text d-block"> <strong>Rs </strong><?php echo $row['price']?></span>
                                    <form class="mt-1" method="POST" id="showMore" action="productDetail.php">
                                        <select hidden name="carID">
                                            <option value="<?php echo $carID ?>" selected hidden></option>
                                        </select> 
                                        <button onclick="showMore.submit()" class="btn btn-secondary">Show More</button>
                                    </form>
                                </div>
                            </div>
                        </div> 
                        <?php  
                                    }
                                }
                            }       
                        }
                        ?> 
                        
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
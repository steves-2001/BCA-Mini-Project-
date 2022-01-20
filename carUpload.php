<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['email'])){

    include_once 'dbConnect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        function input_data($data) {  
            $data = trim($data);  
            $data = stripslashes($data);  
            $data = htmlspecialchars($data);
            return $data;
        }

        $company = input_data($_REQUEST['company']);
        $carType = input_data($_REQUEST['carType']);
        $modelName = input_data($_REQUEST['modelname']);
        $year = input_data($_REQUEST['year']);
        $price = input_data($_REQUEST['price']);
        $location = input_data($_REQUEST['location']);
        $ownership = input_data($_REQUEST['ownership']);
        $description = input_data($_REQUEST['description']);
        $fuelType = input_data($_REQUEST['fuel']);
        $kmDriven = input_data($_REQUEST['km']);
        $gearType = input_data($_REQUEST['gear']);
        $imageName = $_FILES["image"]["name"];
        $tmp_img_name = $_FILES['image']['tmp_name'];
        $folder = 'upload/';
        $userID = $_SESSION['id'];
        move_uploaded_file($tmp_img_name,$folder.$imageName);
        $imagePath = input_data($folder.$imageName);

        $sql = "INSERT INTO cars (`company`, `carType`, `carModel`, `year`, `fuel`, `gear`, `km`, `price`, `location`, `ownership`, `description`, `imageLocation`,`userID`) VALUES ('$company','$carType','$modelName','$year','$fuelType','$gearType','$kmDriven','$price','$location','$ownership','$description','$imagePath','$userID')";

        if($conn->query($sql) === TRUE) {
            header("Location: userListed.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

} else {
    header("Location: loginForm.php");
}
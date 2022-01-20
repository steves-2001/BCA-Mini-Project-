<?php
include_once 'dbConnect.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    function input_data($data) {  
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);
        return $data;
    }
  
    // collect value of input field
    $name = input_data($_REQUEST['name']);
    $email = input_data($_REQUEST['email']);
    $password = input_data($_REQUEST['password']);
    $phone = input_data($_REQUEST['phoneNumber']);
    $address = input_data($_REQUEST['address']);

    $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password',`phone`='$phone',`address`='$address' WHERE userID = ".$_SESSION['id'].";";

    if ($conn->query($sql) === TRUE) {
        if($_SESSION['id'] == 28){
            header("Location: adminDashbord.php");
        } else {
        header("Location: userDashbord.php");
        }
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
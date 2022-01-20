<?php

include_once 'dbConnect.php';

session_start();

$_SESSION['carID'] = $_REQUEST['carID'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $carID = $_SESSION['carID'];
    $userID = $_SESSION['id'];

    $orderSql = "INSERT INTO orders (`carID`, `userID`) VALUES ('$carID','$userID');";

    if($conn->query($orderSql) === TRUE) {
        header("Location: userOrders.php");
    } else {
        echo "Error: " . $orderSql . "<br>" . $conn->error;
    }
}
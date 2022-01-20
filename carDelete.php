<?php

include_once 'dbConnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// collect value of input field
$del = $_REQUEST['deleteCar'];

$delSql = "DELETE FROM cars WHERE carID = ". $del .";";

if ($conn->query($delSql) === TRUE) {
    header("Location: carsRegister.php");
  } else {
    echo "Error deleting record: ".$conn->error;
  }
  $conn->close();
}
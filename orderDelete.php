<?php

include_once 'dbConnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// collect value of input field
$del = $_REQUEST['cancel'];

$delSql = "DELETE FROM orders WHERE carID = ". $del .";";

if ($conn->query($delSql) === TRUE) {
    header("Location: userOrders.php");
  } else {
    echo "Error deleting record: ".$conn->error;
  }
  $conn->close();
}
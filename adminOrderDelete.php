<?php

include_once 'dbConnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// collect value of input field
$del = $_REQUEST['deleteOrder'];

$delSql = "DELETE FROM orders WHERE orderID = ". $del .";";

if ($conn->query($delSql) === TRUE) {
    header("Location: orderRegister.php");
  } else {
    echo "Error deleting record: ".$conn->error;
  }
  $conn->close();
}
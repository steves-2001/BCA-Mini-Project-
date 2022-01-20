<?php

include_once 'dbConnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// collect value of input field
$del = $_REQUEST['deleteUser'];

$delSql = "DELETE FROM users WHERE userID = ". $del .";";

if ($conn->query($delSql) === TRUE) {
    header("Location: adminDashbord.php");
  } else {
    echo "Error deleting record: ".$conn->error;
  }
  $conn->close();
}
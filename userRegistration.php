 <?php

include_once 'dbConnect.php';

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

    $sql = "INSERT INTO users (`name`, `email`, `password`, `phone`, `address`) VALUES ('$name','$email','$password','$phone','$address')";
  
    if($conn->query($sql) === TRUE) {
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

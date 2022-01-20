<?php 

session_start(); 

include "dbConnect.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $password = validate($_POST['password']);

    if (empty($email)) {

        header("Location: loginForm.php?error=User Name is required");

        exit();

    }else if(empty($password)){

        header("Location: loginForm.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['password'] === $password) {


                $_SESSION['name'] = $row['name'];

                $_SESSION['email'] = $row['email'];

                $_SESSION['id'] = $row['userID'];

                if($_SESSION['name'] == "admin"){
                    header("Location: adminDashbord.php");
                    exit();
                }else{
                    header("Location: product.php");
                    exit();    
                }

            }else{

                header("Location: loginForm.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: loginForm.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: loginForm.php");

    exit();

}
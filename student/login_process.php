<?php 

session_start(); 

include "dbconn.php";

if (isset($_POST['regno']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['regno']);

    $pass = validate($_POST['password']);

    if (empty($regno)) {

        header("Location: login.php?error=registration number is required");

        exit();

    }else if(empty($password)){

        header("Location: login.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM students WHERE regno='$regno' AND password='$password'";

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['regno'] === $regno && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['regno'] = $row['regno'];

                $_SESSION['jinalakwanza'] = $row['jinalakwanza'];

                $_SESSION['id'] = $row['id'];

                header("Location: hom.html");

                exit();

            }else{

                header("Location: login.php?error=Incorect regno or password");

                exit();

            }

        }else{

            header("Location: login.php?error=Incorect regno or password");

            exit();

        }

    }

}else{

    header("Location: login.php");

    exit();

}
<?php
session_start();
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $error = [];


    // username validation(string,required,length)
    if (empty($username)) {
        $error[] = "Your Username Is Required";

    } elseif (!is_string($username)) {
        $error[] = "Your Username Must Be String";

    } elseif (strlen($username) < 6 || strlen($username) > 15) {
        $error[] = "Check Your Username Length ";
    }


    // phone Validation (required,numeric,length)

    if (empty($phone)) {
        $error[] = "Your Phone Number Is Required";

    } elseif (!is_numeric($phone)) {
        $error[] = "Your Phone Number Must Be Numeric";

    } elseif (strlen($phone) < 10 || strlen($phone) > 20) {
        $error[] = "Check Your Password Length ";
    }

    // email validation (string,reqired,empty)
    if (empty($email)) {
        $error[] = "Your Email Is Required";

    } elseif (is_numeric($email)) {
        $error[] = "You Email Must be String";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Your Email Is Not Correct";
    }


    // password validate(empty,length,number)
    if (empty($password)) {
        $error[] = "Yor Password Is Required";

    } elseif (strlen($password) < 6 || strlen($password) > 15) {
        $error[] = "Check Your Password Length ";

    } elseif (!is_numeric($password)) {
        $error[] = "Your Password Must Be Number";
    }


    // address Validation(required)
    if (empty($address)) {
        $error[] = "Yor address Is Required";
    }

    // Admin validation 
    // if($email == "admin@yahoo.com" && $password == '123456789'){
    //     header('location:thankyou.php');
    // }

    if (empty($error)) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['username'] = $username;
         header('location:login.php');
    } else {
        $_SESSION['errors'] = $error;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('location:signup.php');

    }
    // Admin validation 
    // if($email == "admin@yahoo.com" && $password == '123456789'){
    //     header('location:thankyou.php');
    // }
}
?>
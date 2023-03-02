<?php
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];

    $error = [];
    // email Validation

    if ($_SESSION['email'] != $email) {
        $error[] = "Your Email Is Incorrect";

    }

    // username validation(string,required,length)


    if ($_SESSION['username'] != $username) {
        $error[] = "Your username Is Incorrect";
    }
        //    if (empty($username)) {
        //    $error[] = "Your Username Is Required";

        //   } elseif (!is_string($username)) {
        //      $error[] = "Your Username Must Be String";

        //   } elseif (strlen($username) < 6 || strlen($username) > 15) {
        //       $error[] = "Check Your Username Length ";
        //    }

        if (empty($error)) {
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;
            header('location:thankyou.php');
        } else {
            $_SESSION['errors'] = $error;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;
            header('location:confirmOrder.php');
        }
    
}
?>
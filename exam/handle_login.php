<?php
session_start();
if (isset($_POST['login'])) {
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $error = [];

    // Admin validation 
    // if($Email == "admin@yahoo.com" && $Password == '123456789'){
    //     // $_SESSION['Email'] = $Email;
    //     // $_SESSION['Password'] = $Password;
    //     header('location:thankyou.php');
    // }

    // Email validation
    if ($_SESSION['email'] != $Email) {
        $error[] = "Your Email Is Incorrect";

    } elseif (empty($Email)) {
        $error[] = "Your Email Is Required";
    }

    // Password Validation
    if ($_SESSION['password'] != $Password) {
        $error[] = "Your Password Is Incorrect";

    } elseif (empty($Password)) {
        $error[] = "Your Password Is Required";
    }

    // another validation 
    if($_SESSION['email'] == $Email || $email == "admin@yahoo.com"){
        echo "<script>
        alert('Welcome'.$Email);
        </script>";
        $active = 'active';
        $_SESSION['active'] = $active;
        header('location:shop.php');
    }
    

    

    if (empty($error)) {
        // $_SESSION['Email'] = $Email;
        // $_SESSION['Password'] = $Password;
        header('location:shop.php');
    } else {
        $_SESSION['errors'] = $error;
        // $_SESSION['Email'] = $Email;
        // $_SESSION['Password'] = $Password;
        header('location:login.php');
    }


    if ($Email == "admin@yahoo.com" && $Password == '123456789') {
        $_SESSION['email'] = $Email;
        $_SESSION['Password'] = $Password;
        header('location:../admin/view/layout.php');
    }
}
?>
<?php
session_start();
//  unset($_SESSION['email']);
// session_destroy();
unset($_SESSION['active']);

header('location:login.php');
?>
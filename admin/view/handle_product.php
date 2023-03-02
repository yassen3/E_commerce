<?php
session_start();
if(isset($_POST['addProduct'])){
    if(!isset($_SESSION['product'])){

        $_SESSION['product'] = [];
    }
    // catch data
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $img = $_FILES['Img'];
    $imgName = $img['name'];
    $tmpName = $img['tmp_name'];
    move_uploaded_file($tmpName, "../upload/$imgName");


    $products = [
        'title' => $title,
        'desc' => $desc,
        'price' => $price,
        'quantity' => $quantity,
        'imgName' => $imgName
    ];

    $_SESSION['product'][] = $products;
    header('location:../../../Exam/exam/shop.php');
}

?>
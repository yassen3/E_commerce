<?php
session_start();
if (isset($_POST['submit'])) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
        echo "<script>
    alert('Item Added');
    window.location.href='shop.php';
    </script>";
    } else {
        $count = count($_SESSION['cart']);
        $count = array(
            'Item_Name' => $Item_Name,
            'Price' => $Price,
            'Desc' => $Desc,
            'Quan' => $Quan

        );
        // print_r($_SESSION['cart']);
        echo "<script>
            alert('Item Added');
              window.location.href='shop.php';
              </script>";

        // catch the data
        $Img = $_POST['Img'];
        $Item_Name = $_POST['Item_Name'];
        $Price = $_POST['Price'];
        $Quan = $_POST['quantity'];
        $Desc = $_POST['Desc'];

        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $img = $_POST['img'];


        $products = [
            'Item_Name' => $Item_Name,
            'Price' => $Price,
            'Desc' => $Desc,
            'Quan' => $Quan,
            'Img' => $Img,

            'title' => $title,
             'desc' => $desc,
             'price' => $price,
            'quantity' => $quantity,
             'img' => $imgName      
        ];

        $_SESSION['cart'][] = $products;

        

    }
}
if (isset($_POST['Remove'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
    if ($value['Item_Name'] == $_POST['Item_Name']) {
        
            unset($_SESSION['cart'][$key]);
        }
            echo "<script>
        alert('Item Deleted');
        window.location.href='cart.php';
        </script>";
        
    }
}

if (isset($_POST['Confirm'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if (!empty($_SESSION['cart'][$key])) {
            header('location:confirmOrder.php');
        }else {
            echo "<script>
            alert('Choose Product First');
            </script>";
            header('location:cart.php');
        }
        
    }
}

?>
<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

<!-- <?php
// session_start();
// session_destroy();
$product= $_SESSION['product'];
foreach($product as $products){
    ?>
<!DOCTYPE html>
<html lang="en">


<body>
    <div class="pro">
        <form action="manage_cart.php" method="post">
            <img src="<?php echo "upload/".$products['imgName']?>" alt="p1" />
            <div class="des">
                <h2><?php echo $products['title'] ?></h2>
                <h5><?php echo $products['desc'] ?></h5>
                <div class="star ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
                <h4><?php echo $products['price'] ?></h4>
                <input type="number" name="quantity" required>
                <input type="hidden" name="Img" value="<img src=' <?php echo "upload/".$products['imgName']?> ">
                <input type="hidden" name="Item_Name" value="<?php echo $products['title'] ?>">
                <input type="hidden" name="Price" value="<?php echo $products['price'] ?>">
                <input type="hidden" name="Desc" value="<?php echo $products['desc'] ?>">
                <button type="submit" name="submit"><a class="cart "><i class="fas fa-shopping-cart "></i></a></button>

            </div>
        </form>
    </div>
</body>

</html>
<?php
}

?> -->



<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modren Desgin</p>
    <div class="pro-container">

        <div class="pro">
            <form action="manage_cart.php" method="post">
                <img src="img/f1.png" alt="p1" />
                <div class="des">
                    <h2>T-Shirt1</h2>
                    <h5>H&M</h5>
                    <div class="star ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                    </div>
                    <h4>250</h4>
                    <input type="number" name="quantity" required>
                    <input type="hidden" name="Img" value="<img src='img/f1.png'>">
                    <input type="hidden" name="Item_Name" value="T-Shirt1">
                    <input type="hidden" name="Price" value="250">
                    <input type="hidden" name="Desc" value="H&M">
                    <button type="submit" name="submit"><a class="cart "><i
                                class="fas fa-shopping-cart "></i></a></button>

                </div>
            </form>
        </div>

        <div class="pro">
            <form action="manage_cart.php" method="post">
                <img src="img/f2.jpg" alt="p1" />
                <div class="des">
                    <h2>T-Shirt2</h2>
                    <h5>Zara</h5>
                    <div class="star ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                    </div>
                    <h4>400</h4>
                    <input type="number" name="quantity" required>
                    <input type="hidden" name="Img" value="<img src='img/f2.jpg'>">
                    <input type="hidden" name="Item_Name" value="T-Shirt2">
                    <input type="hidden" name="Price" value="400">
                    <input type="hidden" name="Desc" value="Zara">
                    <button type="submit" name="submit"><a class="cart "><i
                                class="fas fa-shopping-cart "></i></a></button>
                </div>
            </form>
        </div>
        <div class="pro">
            <form action="manage_cart.php" method="post">
                <img src="img/f3.jpg" alt="p1" />
                <div class="des">
                    <h2>T-Shirt3</h2>
                    <h5>Polo</h5>
                    <div class="star ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                    </div>
                    <h4>500</h4>
                    <input type="number" name="quantity" required>
                    <input type="hidden" name="Img" value="<img src='img/f3.jpg'>">
                    <input type="hidden" name="Item_Name" value="T-Shirt3">
                    <input type="hidden" name="Price" value="500">
                    <input type="hidden" name="Desc" value="Polo">
                    <button type="submit" name="submit"><a class="cart "><i
                                class="fas fa-shopping-cart "></i></a></button>

                </div>
            </form>
        </div>
        <div class="pro">
            <form action="manage_cart.php" method="post">
                <img src="img/f5.jpg" alt="p1" />
                <div class="des">
                    <h2>T-Shirt4</h2>
                    <h5>A.E</h5>
                    <div class="star ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                    </div>
                    <h4>350</h4>
                    <input type="number" name="quantity" required>
                    <input type="hidden" name="Img" value="<img src='img/f5.jpg'>">
                    <input type="hidden" name="Item_Name" value="T-Shirt4">
                    <input type="hidden" name="Price" value="350">
                    <input type="hidden" name="Desc" value="A.E">
                    <button type="submit" name="submit"><a class="cart "><i
                                class="fas fa-shopping-cart "></i></a></button>

                </div>
            </form>
        </div>
        <?php
// session_start();
// session_destroy();
        if (isset($_SESSION['product'])) {
            $product = $_SESSION['product'];
            foreach ($product as $products) {
                ?>

        <body>
            <div class="pro">
                <form action="manage_cart.php" method="post">
                    <img src="<?php echo "../admin/upload/" . $products['imgName'] ?>" />
                    <div class="des">
                        <h2><?php echo $products['title'] ?></h2>
                        <h5><?php echo $products['desc'] ?></h5>
                        <div class="star ">
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                        </div>
                        <h4><?php echo $products['price'] ?></h4>
                        <input type="number" name="quantity" required>
                        <input type="hidden" name="Img"
                            value="<img src=' <?php echo "../admin/upload/" . $products['imgName'] ?> ">
                        <input type="hidden" name="Item_Name" value="<?php echo $products['title'] ?>">
                        <input type="hidden" name="Price" value="<?php echo $products['price'] ?>">
                        <input type="hidden" name="Desc" value="<?php echo $products['desc'] ?>">
                        <button type="submit" name="submit"><a class="cart "><i
                                    class="fas fa-shopping-cart "></i></a></button>

                    </div>
                </form>
            </div>
        </body>

        </html>
        <?php
            }
        }

?>



</section>



<section id="pagenation" class="section-p1">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="shop.php" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1 of 2 </a></li>

            <li class="page-item">
                <a class="page-link" href="shop.php?" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>

</section>

<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext ">
        <h4>Sign Up For Newletters</h4>
        <p>Get E-mail Updates about our latest shop and <span class="text-warning ">Special Offers.</span></p>
    </div>
    <div class="form ">
        <input type="text " placeholder="Enter Your E-mail... ">
        <button class="normal ">Sign Up</button>
    </div>
</section>


<?php include 'footer.php' ?>
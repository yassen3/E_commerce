<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

<section id="page-header" class="about-header">
    <h2>#Cart</h2>
    <p>Let's see what you have.</p>
</section>

<section id="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr>
                <td>Image</td>
                <td>Name</td>
                <td>Desc</td>
                <td>Quantity</td>
                <td>price</td>
                <td>Subtotal</td>
                <td>Remove</td>
                <td>Edit</td>
            </tr>
        </thead>

        <tbody>
            <?php 
           
            $price = 0;
            $total = 0;
            if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $key =>$value){
              $price = $price + $value['Price'];
              $Subtotal = $value['Price'] * $value['Quan'];
              $total += $value['Price'] * $value['Quan'];
            echo "
            <tr>
            <td>$value[img]</td>
            <td>$value[Item_Name]</td>
            <td>$value[Desc]</td>
            <td>$value[Quan]</td>
           <td>$value[Price]</td>
           <td>$Subtotal</td>
            
            <form action='manage_cart.php' method='post'>
            <!-- Remove any cart item  -->
            <td><button type='submit' name='Remove' class='btn btn-danger'>Remove</button></td>
             <input type='hidden' name='Item_Name' value= '$value[Item_Name]'>
            </form>
            </td>
            </tr>";
            }
                        
            }
            ?>







            </tr>
        </tbody>


    </table>
    <br>
    <div class="col-lg-3">
        <div class="border bg-light rounded p-4">
            <h4>Total:</h4>
            <h5 class="text-right"><?php echo $total ?></h5>
            <br>
            <!-- confirm order  -->
            <form action="manage_cart.php" method="post">
                <td><button type="submit" name="Confirm" class="btn btn-success">Confirm</button></td>
                <input type="hidden" name="Item" value="$value[Item_Name]">
            </form>
        </div>
</section>

<!-- <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Coupon</h3>
            <input type="text" placeholder="Enter coupon code">
            <button class="normal">Apply</button>
        </div>
        <div id="subTotal">
            <h3>Cart totals</h3>
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$118.25</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$118.25</strong></td>
                </tr>
            </table>
            <button class="normal">proceed to checkout</button>
        </div>
    </section> -->

<?php include "footer.php" ?>
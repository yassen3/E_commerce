<?php
include "header.php";
include "navbar.php";

if(!empty($_SESSION['errors'])){
    foreach($_SESSION['errors'] as $errors){ ?>
<div class="alert alert-danger"><?php echo $errors ?></div>

<?php }
      unset($_SESSION['errors']);
      
  }

?>


<section id="cart-add" class="section-p1">
    <form>
        <div id="coupon">
            <h3>Coupon</h3>
            <input type="text" name="coupon" placeholder="Enter coupon code">
            <button class="normal" type="submit">Apply</button>
        </div>
    </form>
    <div id="subTotal">
        <h3>Cart totals</h3>
        <form class=" col-4" action="manage_confirm.php" method="post">
            name<input type="text" name="username" required>
            email <input type="email" name="email" required>
            address<input type="text" name="address" required>
            city<input type="text" name="city" required>
            postalCode<input type="number" name="postalcode" required>
            phone<input type="text" name="phone" required>
            paymentType<select>
                <option value="Cash_on_Delivery">Cash on Delivery</option>
                <option value="Credit_Card">Credit Card</option>
                <option value="Fawry">Fawry</option>
            </select>
            <button class="normal" type="submit" name="submit">proceed to checkout</button>
        </form>

    </div>
</section>


<?php include "footer.php" ?>
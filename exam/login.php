<?php

include "header.php";
include "navbar.php";

if (!empty($_SESSION['errors'])) {
  foreach ($_SESSION['errors'] as $errors) { ?>
<div class="alert alert-danger"><?php echo $errors ?></div>

<?php }
  unset($_SESSION['errors']);
}
?>


<div class="card-body px-5 py-5" style="background-color:darkgray;">
    <h3 class="card-title text-left mb-3">Login</h3>
    <form action="handle_login.php" method="post">
        <div class="form-group">
            <label>email *</label>
            <input type="email" class="form-control p_input" name="Email">
        </div>
        <div class="form-group">
            <label>Password *</label>
            <input type="text" class="form-control p_input" name="Password">
        </div>
        <div class="form-group d-flex align-items-center justify-content-between">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> Remember me </label>
            </div>
            <a href="forgetPassword.php" class="forgot-pass">Forgot password</a>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block enter-btn" name="login">Login</button>
        </div>
        <div class="d-flex">
            <button class="btn btn-facebook me-2 col">
                <i class="mdi mdi-facebook"></i> Facebook </button>
            <button class="btn btn-google col">
                <i class="mdi mdi-google-plus"></i> Google plus </button>
        </div>
        <p class="sign-up">Don't have an Account?<a href="signup.php"> Sign Up</a></p>
    </form>
</div>
</div>
</div>
<!-- content-wrapper ends -->
</div>
<!-- row ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

<?php include "footer.php" ?>


//table user, product, cart ,, review comment , rating = session
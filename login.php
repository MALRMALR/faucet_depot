<?php include ('header.php'); ?>

<div class="container main checkout">

  <!-- top banner -->
  <?php include ('includes/banner.php'); ?>

  

  <div class="row forms margin-down page-section-spacer">
      <div class="col-md-6 col-md-offset-3">
         <h2 class="cat-title">Login</h2>
        <form action="checkout-billing-address.php" method="POST">
          <input type="text" name="email" value="" placeholder="Email Address">
          <input type="password" name="password" value="" placeholder="Password">
          <button type="submit">Login</button>
          <a href="#" class="note forgot-password">Forgot your password?</a>
        </form>

      </div>
  </div>

</div> <!-- END container main -->


<?php include('footer.php'); ?>

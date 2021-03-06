<?php include ('header.php'); ?>

<div class="container main checkout">

  <!-- top banner -->
  <?php include ('includes/banner.php'); ?>
  
  <div class="row  page-section-spacer checkout-title">
    <div class="col-sm-12">
      <h2 class="cat-title">Login or Create an Account</h2>
    </div>

  </div>
  <div class="row margin-down bs-wizard">
      <!-- 
      steps classes for bs-wizard-step:
      active, complete, disabled 
      -->

      <div class="col-xs-2 col-xs-offset-1 bs-wizard-step active">
        <div class="text-center bs-wizard-stepnum">Login or Create an Account</div>
        <div class="progress"><div class="progress-bar"></div></div>
        <a href="checkout.php" class="bs-wizard-dot"></a>
        <!-- <div class="bs-wizard-info text-center">Lorem ipsum dolor sit amet.</div> -->
      </div>
      
      <div class="col-xs-2 bs-wizard-step disabled">
        <div class="text-center bs-wizard-stepnum">Billing & Shipping Address</div>
        <div class="progress"><div class="progress-bar"></div></div>
        <a href="checkout-billing-address.php" class="bs-wizard-dot"></a>
        <!-- <div class="bs-wizard-info text-center">Nam mollis tristique erat vel tristique. Aliquam erat volutpat. Mauris et vestibulum nisi. Duis molestie nisl sed scelerisque vestibulum. Nam placerat tristique placerat</div> -->
      </div>
      
      <div class="col-xs-2 bs-wizard-step disabled">
        <div class="text-center bs-wizard-stepnum">Shipping Method</div>
        <div class="progress"><div class="progress-bar"></div></div>
        <a href="checkout-shipping-method.php" class="bs-wizard-dot"></a>
        <!-- <div class="bs-wizard-info text-center">Integer semper dolor ac auctor rutrum. Duis porta ipsum vitae mi bibendum bibendum</div> -->
      </div>
      
      <div class="col-xs-2 bs-wizard-step disabled">
        <div class="text-center bs-wizard-stepnum">Payment Method</div>
        <div class="progress"><div class="progress-bar"></div></div>
        <a href="checkout-payment-method.php" class="bs-wizard-dot"></a>
        <!-- <div class="bs-wizard-info text-center"> Curabitur mollis magna at blandit vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</div> -->
      </div>
           
      <div class="col-xs-2 bs-wizard-step disabled">
        <div class="text-center bs-wizard-stepnum">Confirm Order</div>
        <div class="progress"><div class="progress-bar"></div></div>
        <a href="checkout-confirm-order.php" class="bs-wizard-dot"></a>
        <!-- <div class="bs-wizard-info text-center"> Curabitur mollis magna at blandit vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</div> -->
      </div>

  </div>

  <div class="row forms margin-down">
      <div class="col-md-4">
        <h4 class="cat-title">Returning Customers</h4>
        
        <form action="checkout-billing-address.php" method="POST">
          <input type="text" name="email" value="" placeholder="Email Address">
          <input type="password" name="password" value="" placeholder="Password">
          <button type="submit">Login</button>
          <a href="#" class="note forgot-password">Forgot your password?</a>
        </form>

      </div>

      <div class="col-md-4 new-customer"> 
        <h4 class="cat-title">New Customers</h4>

        <form action="checkout-billing-address.php" method="POST">
          <input type="text" name="first-name" value="" placeholder="First Name">
          <input type="text" name="last-name" value="" placeholder="Last Name">
          <input type="text" name="company" value="" placeholder="Company">
          <input type="email" name="Email" value="" placeholder="Email">
          <input type="email" name="Email-verify" value="" placeholder="Verify Email">
          <input type="password" name="password" value="" placeholder="Password">
          <input type="password" name="password-verify" value="" placeholder="Verify Password">
          <input type="checkbox" id="mailing-list" name="" value="selected"> <label for="mailing-list">Would you like to join our mailing list?</label>
          <button type="submit">Create Account</button>
        </form>
      </div>

      <div class="col-md-4 order-sumamry">
        <h4 class="cat-title">Order Summary</h4>
        
        <table>
          <tr>
            <td>Merchandise:</td>
            <td>$288.04</td>
          </tr>
          <tr>
            <td>Shipping & Handling:</td>
            <td>$0.00</td>
          </tr>
          <tr>
            <td>Order Total:</td>
            <td>$288.04</td>
          </tr>
        </table>

      </div>


  </div>
</div> <!-- END container main -->


<?php include('footer.php'); ?>

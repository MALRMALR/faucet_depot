<?php include ('header.php'); ?>

<div class="container main checkout">

  <!-- top banner -->
  <?php include ('includes/banner.php'); ?>
  
  <div class="row  page-section-spacer checkout-title">
    <div class="col-sm-12">
      <h2 class="cat-title">Confirm Order</h2>
    </div>

  </div>
  <div class="row margin-down bs-wizard">
      <!-- 
      steps classes for bs-wizard-step:
      active, complete, disabled 
      -->

      <div class="col-xs-2 col-xs-offset-1 bs-wizard-step complete">
        <div class="text-center bs-wizard-stepnum">Login or Create an Account</div>
        <div class="progress"><div class="progress-bar"></div></div>
        <a href="checkout.php" class="bs-wizard-dot"></a>
        <!-- <div class="bs-wizard-info text-center">Lorem ipsum dolor sit amet.</div> -->
      </div>
      
      <div class="col-xs-2 bs-wizard-step complete">
        <div class="text-center bs-wizard-stepnum">Billing & Shipping Address</div>
        <div class="progress"><div class="progress-bar"></div></div>
        <a href="checkout-billing-address.php" class="bs-wizard-dot"></a>
        <!-- <div class="bs-wizard-info text-center">Nam mollis tristique erat vel tristique. Aliquam erat volutpat. Mauris et vestibulum nisi. Duis molestie nisl sed scelerisque vestibulum. Nam placerat tristique placerat</div> -->
      </div>
      
      <div class="col-xs-2 bs-wizard-step complete">
        <div class="text-center bs-wizard-stepnum">Shipping Method</div>
        <div class="progress"><div class="progress-bar"></div></div>
        <a href="checkout-shipping-method.php" class="bs-wizard-dot"></a>
        <!-- <div class="bs-wizard-info text-center">Integer semper dolor ac auctor rutrum. Duis porta ipsum vitae mi bibendum bibendum</div> -->
      </div>
      
      <div class="col-xs-2 bs-wizard-step complete">
        <div class="text-center bs-wizard-stepnum">Payment Method</div>
        <div class="progress"><div class="progress-bar"></div></div>
        <a href="checkout-payment-method.php" class="bs-wizard-dot"></a>
        <!-- <div class="bs-wizard-info text-center"> Curabitur mollis magna at blandit vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</div> -->
      </div>
           
      <div class="col-xs-2 bs-wizard-step active">
        <div class="text-center bs-wizard-stepnum">Confirm Order</div>
        <div class="progress"><div class="progress-bar"></div></div>
        <a href="checkout-confirm-order.php" class="bs-wizard-dot"></a>
        <!-- <div class="bs-wizard-info text-center"> Curabitur mollis magna at blandit vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</div> -->
      </div>

  </div>

  <div class="row forms margin-down shipping-method">
    
      <div class="col-md-5 col-md-offset-1">
        <form action="" method="POST">
          
          <button type="submit">Confirm Order</button> 

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

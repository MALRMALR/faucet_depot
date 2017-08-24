<?php include ('header.php'); ?>

<div class="container main checkout">

  <!-- top banner -->
  <?php include ('includes/banner.php'); ?>
  
  <div class="row  page-section-spacer checkout-title">
    <div class="col-sm-12">
      <h2 class="cat-title">Payment Method</h2>
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
      
      <div class="col-xs-2 bs-wizard-step active">
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

  <div class="row forms margin-down shipping-method">
    
      <div class="col-md-5 col-md-offset-1">
        <h4 class="cat-title">Credit Card Details</h4>
        <form action="checkout-confirm-order.php" method="POST">
          <input type="text" name="full-name" value="" placeholder="Full Name on Card">
          <div class="select-holder">
            <select>
              <option>Card Type</option>
              <option value="">Visa</option>
              <option value="">Mastercard</option>
              <option value="">American Express</option>
              <option value="">Discover</option>
            </select>
          </div>
          <input type="text" name="text" value="" placeholder="Card Number (No spaces or dashes)">
          <div class="select-holder">
            <select>
              <option>Month</option>
              <option value="">01</option>
              <option value="">02</option>
              <option value="">03</option>
              <option value="">04</option>
              <option value="">05</option>
              <option value="">06</option>
              <option value="">07</option>
              <option value="">08</option>
              <option value="">09</option>
              <option value="">10</option>
              <option value="">11</option>
              <option value="">12</option>
            </select>
          </div>

          <div class="select-holder">
            <select>
              <option>Year</option>
              <option value="">2017</option>
              <option value="">2018</option>
              <option value="">2019</option>
              <option value="">2020</option>
              <option value="">2021</option>
              <option value="">2022</option>
              <option value="">2023</option>
              <option value="">2024</option>
              <option value="">2025</option>
              <option value="">2026</option>
              <option value="">2027</option>
              <option value="">2028</option>
              <option value="">2029</option>
              <option value="">2030</option>
            </select>
          </div>
          <input type="text" name="text" value="" placeholder="Card Security Code" class="sec-code"> &nbsp;&nbsp;<a href="#" class="note">How to locate it?</a>

          <button type="submit">Continue</button> 

        </form>  
        <br><br>
        <h4 class="cat-title">Security Information</h4>
        <p>It is our policy to require you to enter your credit card information each time you place an order. This provides additional safety and authentication for your orders.</p>
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

<?php include ('header.php'); ?>

<div class="container main checkout">

  <!-- top banner -->
  <?php include ('includes/banner.php'); ?>
  
  <div class="row  page-section-spacer checkout-title">
    <div class="col-sm-12">
      <h2 class="cat-title">Shipping Method</h2>
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
      
      <div class="col-xs-2 bs-wizard-step active">
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

  <div class="row forms margin-down shipping-method">
    
      <div class="col-md-5 col-md-offset-1">
        <h4 class="cat-title">Shipping Zone</h4>
        <p>Choose a shipping zone to calculate shipping charges:</p>
        <form action="checkout-payment-method.php" method="POST">
          <input type="radio" id="fedex-ups" name="shipping" value=""> <label for="fedex-ups">Fedex or UPS Standard Ground <span class="price">$10.99</span></label><br>
          <input type="radio" id="3-day" name="shipping" value=""> <label for="3-day">3 Day Service <span class="price">$10.99</span></label><br>
          <input type="radio" id="2-day" name="shipping" value=""> <label for="2-day">2nd Day Service <span class="price">$10.99</span></label><br>
          <input type="radio" id="next-day" name="shipping" value=""> <label for="next-day">Next Day Service <span class="price">$10.99</span></label><br>
          <input type="radio" id="alaska-hawaii" name="shipping" value=""> <label for="alaska-hawaii">Alaska and Hawaii <span class="price">$10.99</span></label><br>
          <br>
          <button type="submit">Continue</button> 
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

  <div class="row cart-extra-info shipping-method">
    <div class="col-sm-12">
      
      <p class="note">
        Orders placed before 2:00pm PST will ship the same day.<br> 
        SHIPPING DAYS ARE MONDAY - FRIDAY.<br>
        Subject to stock on hand. We do not ship to P.O. Boxes.
      </p>

    </div>
  </div>

  <div class="row cart-extra-info shipping-rates-table margin-down shipping-method">
    <div class="col-md-12">
      <h4 class="cat-title">Shipping Rates</h4>
        <table cellpadding="1" cellspacing="1">
          <thead>
            <tr>
              <th>Order Amount</th>
              <th>Ground Service<br>(Faucets &amp; Accesories only)</th>
              <th>3 Day Service</th>
              <th>2nd Day Service</th>
              <th>Next Day Service</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>$0.00 - $199.00</td>               
              <td>$8.99</td>
              <td>$14.99</td>
              <td>$19.96</td>
              <td>$29.98</td>
            </tr>             
            <tr> 
              <td>$199.01 - $275.00</td>  
                <td>$0.00</td> 
                 <td>$20.99</td> 
                 <td>$27.96</td>  
                 <td>$38.98</td>
              </tr>
              <tr>     
                 <td>$275.01 - $500.00</td>   
                 <td>$0.00</td> 
                 <td>$26.99</td> 
                 <td>$35.96</td> 
                 <td>$47.98</td>
              </tr>
              <tr>   
                 <td>$500.01 - $725.00</td>  
                 <td>$0.00</td>   
                 <td>$32.99</td>   
                 <td>$43.96</td>  
                 <td>$56.98</td>
              </tr>
              <tr>  
                 <td>$725.01 - $1,000.00</td> 
                 <td>$0.00</td>  
                 <td>$67.99</td> 
                 <td>$92.96</td>  
                 <td>$129.98</td>
              </tr>
              <tr>       
                 <td>$1,000.01 - $1,500.00</td>  
                 <td>$0.00</td>   
                 <td>$120.99</td>   
                 <td>$142.96</td>   
                 <td>$194.98</td>
              </tr>
              <tr>         
                 <td>$1,500.01 - $2,000.00</td>    
                 <td>$0.00</td>   
                 <td>$159.99</td>   
                 <td>$191.96</td>   
                 <td>$259.98</td>
              </tr>
              <tr>      
                 <td>$2,000.01 - $2,500.00</td>  
                 <td>$0.00</td>   
                 <td>$213.99</td>  
                 <td>$251.96</td>  
                 <td>$341.98</td>
              </tr>
              <tr>         
                 <td>$2,500.01 - $3,000.00</td>  
                 <td>$0.00</td>  
                 <td>$249.99</td>  
                 <td>$296.96</td>  
                 <td>$405.98</td>
              </tr>
              <tr>       
                 <td>$3,000.01 - $4,000.00</td>  
                 <td>$0.00</td>   
                 <td>$285.99</td>  
                 <td>$335.96</td>  
                 <td>$453.98</td>
              </tr>
              <tr>     
                 <td>$4,000.01 +</td>  
                 <td>$0.00</td> 
                 <td>$299.99</td>
                 <td>$389.96</td>
                 <td>$535.98</td>
               </tr>  
            </tbody>
          </table>
    </div>    
  </div>





</div> <!-- END container main -->


<?php include('footer.php'); ?>

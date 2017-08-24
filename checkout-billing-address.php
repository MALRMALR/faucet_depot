<?php include ('header.php'); ?>

<div class="container main checkout">

  <!-- top banner -->
  <?php include ('includes/banner.php'); ?>
  
  <div class="row  page-section-spacer checkout-title">
    <div class="col-sm-12">
      <h2 class="cat-title">Billing & Shipping Address</h2>
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
      
      <div class="col-xs-2 bs-wizard-step active">
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

  <div class="row forms margin-down billing-address-forms">
    <form action="checkout-shipping-method.php" method="POST">
      <div class="col-md-6">
        <h4 class="cat-title">Billing Address</h4>
        <p class="note">Please enter your billing address, this address MUST be exactly as it appears on your billing statement.</p>
        
          <input type="text" name="text" value="" placeholder="Street Address">
          <input type="text" name="SuiteorApt" value="" placeholder="Suite or Apt.">
          <input type="text" name="text" value="" placeholder="City">
          <div class="select-holder">
            <select class="DataText" name="txtState" value="testing">
              <option value="NORESPONSE">- Select State -</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA" selected="">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="DC">Washington,D.C.</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
          </div>
          <input type="text" name="text" value="" placeholder="Zip Code">
          <input type="text" name="text" value="" placeholder="Phone Number">

      </div>

      <div class="col-md-6">
        <h4 class="cat-title">Shipping Address</h4>
          <div>
            <input type="radio" id="same-addy" name="shipping" value=""> <label for="same-addy">Shipping address same as billing address.<br><span class="note">* We do not ship to PO Boxes</span></label>
          </div>
          <div>
           <input type="radio" id="dif-addy" name="shipping" value=""> <label for="dif-addy">Ship to the following address:</label>
          </div>
          <input type="text" name="first-name" value="" placeholder="First Name">
          <input type="text" name="last-name" value="" placeholder="Last Name">
          <input type="text" name="text" value="" placeholder="Street Address">
          <input type="text" name="SuiteorApt" value="" placeholder="Suite or Apt.">
          <input type="text" name="text" value="" placeholder="City">
          <div class="select-holder">
            <select class="DataText" name="txtState" value="testing">
              <option value="NORESPONSE">- Select State -</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA" selected="">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="DC">Washington,D.C.</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
          </div>
          <input type="text" name="text" value="" placeholder="Zip Code">
          <input type="checkbox" id="bus-addy" name="" value="selected"> <label for="bus-addy">Check this box if the delivery is being made to a business or commercial location.</label>
          
          <p class="note">All orders shipping to an address different from the billing address require an outbound call to the phone number on the cardholder's account for approval. All orders will be placed on hold until the cardholder has verbally approved this transaction. We will not express ship (next day, 2 day, or 3 day) any orders to an address other than the billing address that is associated with the credit card being used for the purchase.</p>
          
          
          <input type="checkbox" id="agree" name="" value="selected"> <label for="agree">I agree to the terms above.</label>
          
           
      </div>

      <div class="col-md-12 submit-button">
        <button type="submit">Continue</button> 
      </div>

    </form>

  </div>


</div> <!-- END container main -->


<?php include('footer.php'); ?>

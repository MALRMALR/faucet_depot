<?php include ('header.php'); ?>
 
<div class="container main">
  
  <!-- top banner -->
  <?php include ('includes/banner.php'); ?>
  
  <div class="row margin-down page-section-spacer">

    <div class="col-sm-12 col-md-8 shopping-cart-header">
      <h2 class="page-title">Shopping Cart</h2>
      <a href="product_detail.php" class="return-from-cart back-arrow">Return to Previous Page</a>
    </div>

    <div class="col-sm-12 col-md-4 cart-links">
      <a href="#" class="button-style">Live Chat</a>
      <a href="#" class="button-style">Save Cart</a>
      <a href="#" class="button-style">Retrieve Cart</a>
    </div>
  </div>


  <div class="row cart-header">
      <!-- headers -->
      <div class="col-md-1 cart-remove-item">Remove</div>
      <div class="col-md-5 cart-product">Item</div>
      <div class="col-md-2 cart-qty">Quantity</div>
      <div class="col-md-2 cart-item-price">Price per item</div>
      <div class="col-md-2 cart-total-price">Price</div>
  </div>
  
  <?php for ($i=0;$i<5;$i++) { ?>
  <div class="row cart-item">
      <div class="col-md-1 cart-remove-item">
          <input type="checkbox" name="Remove" value="Remove">
      </div>
      <div class="col-md-5 cart-product">

        <div class="prod-list-image-holder">
          <a href="<?php echo $BASE_URL; ?>/product_detail.php" class="">
            <img class="main-img" src="imgs/faucet_grohe.png" alt="">
          </a>
        </div>

        <div class="prod-list-text-wrapper">

            <a href="product_detail.php" class="item-title" >Grohe 23234234 Dual Spray Pull Down Kitchen Luxe</a>
              
            <div class="item-specs">
              <ul>
                <li>Model No: <strong>D9159ARDST</strong></li>
                <li>Finish: <strong>Stainless Steel</strong></li>
                <li>Brand: <span class="customer-choice">Grohe</span></li>
              </ul>
            </div>

        </div><!-- item info wrapper -->

      </div>

      <div class="col-md-2 cart-qty">
          <div class="qty-holder"><a href="#" class="minus-qty"><i class="fa fa-minus" aria-hidden="true"></i></a><input type="number" id="qty" value="1"><a href="#" class="plus-qty"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
      </div>

      <div class="col-md-2 cart-item-price">$550.30</div>
      <div class="col-md-2 cart-total-price">$550.30</div>

  </div>

  <?php } ?>
     

  <div class="row after-cart-items">

    <div class="col-sm-12 col-md-3 col-md-offset-4 promo-code">
      <h4 class="cat-title">Promo Code</h4>
      <form action="" method=""><input type="text" name="" value="" placeholder="Enter code">
      <button name="" type="submit" id="apply-promo-code">Apply</button>
        </form>
    </div>

    <div class="col-sm-12 col-md-4 col-md-offset-1 totals">

      <div class="row">
        <div class="col-md-6">
          <h4 class="cat-title line-label">Sub Total:</h4>
        </div>
        <div class="col-md-6">
          <h4 class="cat-title sub-total">$383.50</h4>
        </div>
      </div>
      
      <div class="row shipping-section">
        <div class="col-md-6">
          <h4 class="cat-title line-label">Shipping:</h4>
        </div>
        <div class="col-md-6">
          <h4 class="cat-title sub-total">$5.50</h4>
        </div>
        <div class="col-md-11 shipping-options">
          <ul>
            <li><input type="radio" id="ups-fedex" name="shipping" value=""> <label for="ups-fedex">Fedex or UPS Standard Overnight</label></li>
            <li><input type="radio" id="3-day" name="shipping" value=""> <label for="3-day">3 Day Service</label></li>
            <li><input type="radio" id="2-day" name="shipping" value=""> <label for="2-day">2 Day Service</label></li>
            <li><input type="radio" id="overnight" name="shipping" value=""> <label for="overnight">Overnight Service</label></li>
          </ul>
        </div>
      </div>

      <div class="row grand-total">
        <div class="col-md-6">
          <h4 class="cat-title line-label">Grand Total:</h4>
        </div>
        <div class="col-md-6">
          <h3 class="cat-title">$383.50</h3>
        </div>
      </div>

      <div class="row btns">
        <div class="col-md-4">
          <a href="#" id="update-cart" class="button-style">Update</a>
        </div>
        <div class="col-md-8">
          <a href="checkout.php" class="proceed-to-checkout button-style" >Proceed to Checkout</a>
        </div>
        
      </div>

    </div>

  </div>
    

  <div class="row cart-extra-info">
    <div class="col-sm-12 col-md-8 col-md-offset-4">
      
      <p class="cartID">Your shopping cart ID for this visit is: <span>35091666</span>.</p>
      <p class="note">You can use this ID if you need to contact our support desk for help or would like to complete this transaction over the phone. The toll free number is 888-328-2389.</p>
      <p class="note">* Sales tax will be applied to orders shipped to California. If you are located in Canada, please call to place your order at 888-328-2389.</p>
      <p class="note">* We accept only one promo code per item purchased.</p>

    </div>
  </div>

  <div class="row cart-extra-info margin-down border-down">
    <div class="col-md-4">
      <h4 class="cat-title">Secure Checkout</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec consequat eros, ut hendrerit sem. Suspendisse ac augue lectus. Donec sodales odio tempor ligula mattis facilisis. Ut nec lacus sed orci pulvinar cursus quis nec ipsum. Nunc dapibus velit urna, vel ornare mauris porttitor ac. Duis ac risus eget nisl consequat tincidunt. Fusce sodales vel nisl nec molestie. Cras lobortis auctor elit, sit amet consectetur tortor hendrerit eu. Nam sollicitudin venenatis elit, in ultrices ligula malesuada vel. Duis sagittis vulputate facilisis. Sed vitae bibendum est. Integer dapibus elementum facilisis. Cras tempus luctus purus eu hendrerit. Pellentesque tincidunt diam sem, quis volutpat mi finibus nec.</p>
    </div>
    <div class="col-md-4">
      <h4 class="cat-title">Satisfaction Guaranteed</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec consequat eros, ut hendrerit sem. Suspendisse ac augue lectus. Donec sodales odio tempor ligula mattis facilisis. Ut nec lacus sed orci pulvinar cursus quis nec ipsum. Nunc dapibus velit urna, vel ornare mauris porttitor ac. Duis ac risus eget nisl consequat tincidunt. Fusce sodales vel nisl nec molestie. Cras lobortis auctor elit, sit amet consectetur tortor hendrerit eu. Nam sollicitudin venenatis elit, in ultrices ligula malesuada vel. Duis sagittis vulputate facilisis. Sed vitae bibendum est. Integer dapibus elementum facilisis. Cras tempus luctus purus eu hendrerit. Pellentesque tincidunt diam sem, quis volutpat mi finibus nec.</p>
    </div>
    <div class="col-md-4">
      <h4 class="cat-title">Your Privacy</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec consequat eros, ut hendrerit sem. Suspendisse ac augue lectus. Donec sodales odio tempor ligula mattis facilisis. Ut nec lacus sed orci pulvinar cursus quis nec ipsum. Nunc dapibus velit urna, vel ornare mauris porttitor ac. Duis ac risus eget nisl consequat tincidunt. Fusce sodales vel nisl nec molestie. Cras lobortis auctor elit, sit amet consectetur tortor hendrerit eu. Nam sollicitudin venenatis elit, in ultrices ligula malesuada vel. Duis sagittis vulputate facilisis. Sed vitae bibendum est. Integer dapibus elementum facilisis. Cras tempus luctus purus eu hendrerit. Pellentesque tincidunt diam sem, quis volutpat mi finibus nec.</p>
    </div>
  </div>


  <?php $show_featured_products = true; $show_featured_collections = true; $show_popular_categories = true; include ('includes/featured.php') ?>


</div> <!-- END container main -->


<?php include('footer.php'); ?>

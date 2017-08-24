<?php include ('header.php'); ?>

<div class="container main">
  
  <div id="account-page" class="row page-section-spacer margin-down">
    
    <!-- sidebar -->
    <div id="" class="col-md-3 col-sm-12">
      <div class="row sidebar-group">
        <h4 class="cat-title"><a data-toggle="collapse" class="collapse-btn" href="#collapseAcctBtns" aria-expanded="false" aria-controls="collapseManuFilters">My Account</a></h4>
        <div class="divider"></div>
        <ul id="collapseAcctBtns" class="">
          <li class="ui-tabs-active"><a href="#account-info">Account Information</a></li>
          <li><a href="#check-order-status">Check Order Status</a></li>
          <li><a href="#logout">Logout</a></li>
        </ul>
      </div>
    </div>


    <div class="col-md-9 col-sm-12">      
      <div id="account-info">
        <div class="row">
          <div class="col-md-6">
            <h4 class="cat-title">Account Information</h4>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6 forms">
            <form action="checkout-billing-address.php" method="POST">
              <input type="text" name="first-name" value="" placeholder="First Name">
              <input type="text" name="last-name" value="" placeholder="Last Name">
              <input type="text" name="company" value="" placeholder="Company">
              <input type="email" name="Email" value="" placeholder="Email">
              <input type="email" name="Email-verify" value="" placeholder="Verify Email">
              <input type="password" name="password" value="" placeholder="Password">
              <input type="password" name="password-verify" value="" placeholder="Verify Password">
              <input type="checkbox" id="mailing-list" name="" value="selected"> <label for="mailing-list">Would you like to join our mailing list?</label><br><br>
              <button type="submit">Update</button>
            </form>
          </div>
        </div>
      </div>

      <div id="check-order-status">

        <div class="row">
          <div class="col-md-12">
            <h4 class="cat-title">Check Your Order Status</h4>
          </div>
        </div>
        <div class="row order-status-table">
          <div class="col-md-12">
            <div class="row header-row">
              <div class="col-md-3">
                Order #
              </div>
              <div class="col-md-3">
                Order Date
              </div>
              <div class="col-md-3">
                Order Total
              </div>
              <div class="col-md-3">
                Tracking #
              </div>
            </div>

        <?php for ($i=0;$i<6;$i++) { ?>
            <div class="row">
              <div class="col-md-3">
                <a href="#">J0231234</a>
              </div>
              <div class="col-md-3">
                <a href="#">12/1/2016 10:35:00 AM</a>
              </div>
              <div class="col-md-3">
                $0.00
              </div>
              <div class="col-md-3">
                No Tracking Info
              </div>
            </div>
        <?php } ?>

          </div>
        </div>

      </div>

      <div id="logout" class="row">
        Goodbye
      </div>

    </div>
  </div>

</div> <!-- END container main -->


<?php include('footer.php'); ?>

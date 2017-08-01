<?php include ('header.php'); ?>

<div class="container main">
  <!-- top banner -->
  <?php include('banner.php'); ?>
  <div class="row">
    <!-- right rail -->
    <div id="customer-account-info">

      <div class="col-md-3 col-sm-12">
        <ul class="account-links">
          <h3 class="cat-title">My Account</h3>
          <li><a href="#account-info">Account Information</a></li>
          <li><a href="#check-order-status">Check Order Status</a></li>
          <li><a href="#logout">Logout</a></li>
        </ul>
      </div>

      <div class="col-md-9 col-sm-12">

          <div id="account-info">
            <h3 class="cat-title">Account Information</h3>
            <div class="taxonomy col-md-9">
              <a href="#">Account Information</a>
              <span> &#62; </span>
              <a href="#">Billing Address</a>
              <span> &#62; </span>
              <a href="#">Shipping Address</a>
            </div>
            <div id="account-details" class="col-md-10">
              <table>
                <tr>
                  * Indicates Required Field
                </tr>
                <tr>
                  <td>First Name:</td>
                  <td><input type="text" name="first" value=""></td>
                </tr>
                <tr>
                  <td>Last Name:</td>
                  <td><input type="last" name="" value=""></td>
                </tr>
                <tr>
                  <td>Company: </td>
                  <td><input type="company" name="" value=""></td>
                </tr>
                <tr>
                  <td>Email: </td>
                  <td><input type="email" name="" value=""></td>
                </tr>
                <tr>
                  <td>Verify Email: </td>
                  <td><input type="verify-email" name="" value=""></td>
                </tr>
                <tr>
                  <td>Password:</td>
                  <td><input type="password" name="" value=""></td>
                </tr>
                <tr>
                  <td>Verify Password:</td>
                  <td><input type="verify-password" name="" value=""></td>
                </tr>
                <tr>
                  <td>Would you like to join our mailing list?</td>
                  <td>
                    <input type="checkbox" name="" value="selected"> Yes
                    <input type="checkbox" name="" value=""> No
                  </td>
                </tr>
              </table>
              <button id="update-user-account" type="button" name="button">Continue</button>
            </div>
          </div>
          <div id="check-order-status">
            <div id="order-status-header" class="row">
              <h3 class="cat-title">Check Your Order Status</h3>
              <div class="account-column col-md-2">
                &nbsp;
              </div>
              <div class="account-column col-md-2">
                Order Number
              </div>
              <div class="account-column col-md-3">
                Order Date
              </div>
              <div class="account-column col-md-2">
                Order Total
              </div>
              <div class="account-column col-md-3">
                Tracking
              </div>
            </div>
            <div class="row">
              <div class="account-column col-md-2">
                <a href="#">View</a>
              </div>
              <div class="account-column col-md-2">
                <a href="#">Order No.</a>
              </div>
              <div class="account-column col-md-3">
                <a href="#">12/1/2016 10:35:00 AM</a>
              </div>
              <div class="account-column col-md-2">
                $0.00
              </div>
              <div class="account-column col-md-3">
                No Tracking Information
              </div>
            </div>

          </div>
          <div id="logout">
            Goodbye
          </div>
      </div>
    </div>
  </div>

  <?php include ('featured.php') ?>
</div> <!-- END container main -->


<?php include('footer.php'); ?>

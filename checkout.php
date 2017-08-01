<?php include ('header.php'); ?>

<div class="container main">
  <!-- top banner -->
  <?php include ('banner.php'); ?>
  <h1 class="cat-title">Login or Create an Account</h3>
  <div id="checkout" class="row">
      <div class="col-md-4">
        <h3 class="cat-title">Returning Customers: </h3>
        <table>
          <tr>
            <td>Email Address:</td>
            <td><input type="text" name="email" value=""></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="text" name="password" value=""></td>
          </tr>
        </table>
      </div>
      <div class="col-md-4">
        <h3 class="cat-title">New Customers: </h3>
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
      <div class="col-md-4">
        <h3 class="cat-title">Order Summary</h3>
      </div>
  </div>
</div> <!-- END container main -->


<?php include('footer.php'); ?>

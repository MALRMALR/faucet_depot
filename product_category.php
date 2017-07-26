<?php include ('header.php'); ?>

<div class="container main">
  <!-- sidebar & top banner ad -->
  <?php include ('sidebar.php'); ?>
  <div>
      <div class="taxonomy">
        <a href="<?php echo $BASE_URL; ?>/index.php">Home</a>
        <span> &#62; </span>
        <a href="<?php echo $BASE_URL; ?>/generic-content-page.php">Manufacturers</a>
        <span> &#62; </span>
        <a href="<?php echo $BASE_URL; ?>/manufacturer_detail.php">Kohler</a>
        <span>(1 - 12 of 391)</span>
      </div>
  </div>
  <!-- grid button -->
  <i class="fa fa-th selected" aria-hidden="true"></i>
  <!-- list button -->
  <i class="fa fa-list" aria-hidden="true"></i>
  <!-- sort by -->
  <!-- show -->
  <!-- compare -->

  <!-- begin grid -->
  <div class="container">

<!-- product / bootstrap container -->
  <div id="prod-cat" class="row">
    <!-- individual item -->
    <?php for($i = 0; $i < 15; ++$i) { ?>
    <div class="prod-cat-item col-xs-12 col-sm-6 col-md-3">
      <div class="prod-images">

      <div class="featured-img-wrapper clearfix">
        <a href="<?php echo $BASE_URL; ?>/product_detail.php" class="featured-img"><img src="imgs/kohler_faucet.png" alt=""></a>
        <img class="prod-logo" src="imgs/logo1.jpg" alt="">
        <span class="featured-sale">Sale</span>
        <?php include('hover.php'); ?>
      </div>
    </div>
      <div class="item-title-wrapper">
        <div class="item-title">
          <a href="product_detail.php">Kohler 9159-AR-DST Trinsic Single Handle Pull-Down Kitchen Faucet-Stainless</a>
        </div>
      </div>
      <div class="item-specs">
        <ul>
          <li>Model No: <strong>D9159ARDST</strong></li>
          <li>Finish: <strong>Stainless Steel</strong></li>
          <li>Stock: <span class="green">Available</span></li>
          <li>Retail Price: <strong>$501.70</strong></li>
          <li><span class="prod-cat-our-label">Our Price: </span><span class="prod-cat-our-price">$288.30</span></li>
        </ul>
      </div>
      <div class="compare-item">
        <div class="prod-cat-stars">
          <img src="imgs/full_star.png" alt="">
          <img src="imgs/full_star.png" alt="">
          <img src="imgs/full_star.png" alt="">
          <img src="imgs/full_star.png" alt="">
          <img src="imgs/half_star.png" alt="">
        </div>
        <input type="checkbox" name="Compare" value="Select">
        <span>Select</span>
        <a href="#">Compare Now</a>
        <div class="number-reviews">
          (9 Reviews)
        </div>
      </div>
    </div>
    <!-- end individual item -->
    <?php } ?>
  </div>
    </div>
  <?php include ('featured.php') ?>
</div> <!-- END container main -->


<?php include('footer.php'); ?>

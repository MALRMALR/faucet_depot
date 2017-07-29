<?php include ('header.php'); ?>

<div class="container main">

  <!-- top banner -->
  <?php include ('banner.php'); ?>

  <div class="row margin-down">
    <!-- sidebar  -->
    <?php include ('category-sidebar.php'); ?>

    <div class="col-md-9 col-sm-12">

      <div class="row justify-content-md-center">
        <h3 class="cat-title">Search Results</h3>
        <div id="search-results">
          Showing 2 of 2 for Search: 'Delta Faucet Single Knob Stainless Steel'
        </div>
        <!-- list button -->
        <i class="fa fa-list" aria-hidden="true"></i>
        <!-- grid button -->
        <i class="fa fa-th selected" aria-hidden="true"></i>
        <!-- sort by -->
        <div class="col col-md-auto sort-show">
          <select class="" name="Sort By">
            <option value="">Sort By</option>
            <option value="">Sort By</option>
            <option value="">Sort By</option>
            <option value="">Sort By</option>
          </select>

        </div>
        <!-- show -->
        <div class="col col-md-auto sort-show">
          <select class="" name="Show">
            <option value="12">Show 12</option>
            <option value="24">Show 24</option>
            <option value="36">Show 36</option>
            <option value="48">Show 48</option>
          </select>
        </div>
        <!-- compare -->
        <button id="compare" type="button" name="button">Compare (0)</button>
      </div>

      <!-- product / bootstrap container -->
      <div id="prod-cat" class="row">
        <!-- individual item -->
        <?php for($i = 0; $i < 2; ++$i) { ?>

          <div class="prod-cat-item col-sm-6 col-md-3">

            <div class="prod-images">
              <div class="featured-product-category-img-wrapper">
                <a href="<?php echo $BASE_URL; ?>/product_detail.php" class="">
                  <img class="featured-product-category-image" src="imgs/kohler_faucet.png" alt="">
                </a>
                <img class="prod-logo" src="imgs/logo1.jpg" alt="">
                <span class="featured-sale">Sale</span>
                <?php include('product-category-hover.php'); ?>
              </div>
            </div>

            <div class="item-info-wrapper clearfix">

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

              <input type="checkbox" name="Compare" value="Select">
                <span>Select to Compare</span>

              <div class="prod-cat-stars">
                <div class="rating closed small">
                <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                </div>

              </div>
              <div class="number-reviews">(9 Reviews)</div>
            </div>
            </div><!-- item info wrapper -->

        </div> <!-- end -->
          <!-- end individual item -->
        <?php } ?>
      </div>

      <?php include('pagination.php'); ?>
    </div>

  </div>

  <?php include ('featured.php') ?>

</div> <!-- END container main -->


<?php include('footer.php'); ?>

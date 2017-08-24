<?php if (!isset($show_featured_products) || $show_featured_products == true) { ?>
<!-- featured products -->
<div id="featured-products" class="margin-down row clearfix">
  <div class="col-sm-12">
      <h2 class="section-title">Featured Products</h2>
      <div class="products-arrows slider-arrows arrows">
        <a class="arrow-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        <a class="arrow-next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
      </div>
  </div>

  <div class="col-sm-12">
    <div class="feat-prod-slider border-items">
      <?php for ($i=0; $i<10; ++$i) { ?>
        <div class="featured-slide img-hover">
          <span class="sale-tag">Sale</span>

          <div class="image-holder">
              <a href="<?php echo $BASE_URL; ?>/product_detail.php" class="">
                <img class="main-img" src="imgs/faucet.jpg" alt="">
              </a>
              <?php include ('includes/cart_btn_hover.php'); ?> 
          </div>


          <div class="featured-desc">
            <h3>
              <a href="<?php echo $BASE_URL; ?>/product_detail.php">Delta 9178-AR-DST</a>
            </h3>
            <div class="featured-retail-price">Retail Price: $373.78</div>
            <div class="featured-our-price our-price-label">Our Price: $182.85</div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

</div>
<?php } ?>

<?php if (!isset($show_featured_collections) || $show_featured_collections == true) { ?>
<!-- featured collections -->
<div id="feat-collections" class="margin-down row clearfix">
  <div class="col-sm-12">
      <h2 class="section-title">Featured Collections</h2>
      <div class="feat-coll-arrows slider-arrows arrows">
        <a class="arrow-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        <a class="arrow-next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
      </div>
  </div>

  <div class="col-sm-12">
    <!-- begin gallery -->
    <div class="feat-coll-slider border-items">
      
      <?php for ($i=0;$i<15;$i++) { ?>

      <div class="slick-slide col-sm-6 col-md-2">
        <a href="<?php echo $BASE_URL; ?>/product_category.php"><img src="imgs/collection_delta.png" alt=""></a>
        <div class="featured-desc">
          <a href="<?php echo $BASE_URL; ?>/product_category.php">Delta Touch Faucets With Touch2o Technology</a>
        </div>
      </div>

      <?php } ?>

      
    </div>
  </div>

</div>
<?php } ?>
<?php if (!isset($show_popular_categories) || $show_popular_categories == true) { ?>
<!-- popular categories -->
<div id="popular-categories" class="margin-down row clearfix">
  <div class="col-sm-12">
      <h2 class="section-title">Popular Categories</h2>
      <div class="popular-cat-arrows slider-arrows arrows">
        <a class="arrow-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        <a class="arrow-next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
      </div>
  </div>

  <div class="col-sm-12">
    <!-- begin gallery -->
    <div class="popular-cat-slider border-items">
      
      <?php for ($i=0;$i<15;$i++) { ?>
      <div class="slick-slide col-sm-6 col-md-2 ">
        <a href="<?php echo $BASE_URL; ?>/product_category.php"><img src="imgs/collection_delta.png" alt=""></a>
        <div class="featured-desc">
          <a href="<?php echo $BASE_URL; ?>/product_category.php">Kitchen Pullout Faucets</a>
        </div>
      </div>
      <?php } ?>
      


    </div>
  </div>

</div>
<?php } ?>
<?php include ('header.php'); ?>

<div class="container main">

  <!-- top banner -->
  <?php include ('includes/banner.php'); ?>

  <div class="row margin-down">

    <!-- sidebar  -->
    <?php $show_filter = false; $show_manufacturer_filter = false; $show_prod_cats = false;  $show_search = true; include ('includes/sidebar.php'); ?>

    <div class="col-md-9 col-sm-12">

      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">Search Results</h2>
        </div>
      </div>

      <div class="breadcrumbs row">
        <div class="col-md-12">
          23 results for search 'Delta Faucet Single Knob Stainless Steel'
        </div>
      </div>

      <?php include ('includes/view-control.php');?>

      <div id="prod-cat" class="row">        
        <?php for($i=0; $i<15; $i++) { ?>
          <?php include ('includes/product-item.php'); ?>
        <?php } ?>
      </div>

      <?php include ('includes/pagination.php'); ?>
    </div>
  </div>


  <?php $show_featured_products = true; $show_featured_collections = true; $show_popular_categories = true; include ('includes/featured.php') ?>

</div> <!-- END container main -->


<?php include('footer.php'); ?>

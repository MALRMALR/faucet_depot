<?php include ('header.php'); ?>

<div class="container main">

  <!-- top banner -->
  <?php include ('includes/banner.php'); ?>

  <div class="row margin-down">

    <!-- sidebar -->

    <?php $show_manufacturer_filter = true; $show_prod_cats = false; $show_filter = false; $show_search = true; include ('includes/sidebar.php'); ?>

    <div class="col-md-9 col-sm-12"> 
      
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">Manufacturers</h2>
        </div>
      </div>

      <div class="breadcrumbs row">
        <div class="col-md-12">
          <a href="<?php echo $BASE_URL; ?>/index.php">Home</a>
          <span> &#62; </span>
          <a href="#">Manufacturers</a>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12">
          <p>Faucet Depot caries industry renowned faucets, sink and fixture brands as well as a wide range of commercial and tool brands.  Use the links to the left to narrow your selections</p>
        </div>
      </div>

      <div id="manufacturer-list" class="row">


        <?php for($i<0;$i<5;$i++) {?>
          <div class="manu-item col-md-4">
            <div class="img-wrapper">
              <a href="manufacturer_detail.php"><img src="imgs/manu1.png" alt=""></a>
            </div>
            <a href="manufacturer_detail.php"><p>AB and I Foundry</p></a>
          </div>

          <div class="manu-item col-md-4">
            <div class="img-wrapper">
              <a href="manufacturer_detail.php"><img src="imgs/manu2.png" alt=""></a>
            </div>
            <a href="manufacturer_detail.php"><p>Accutools</p></a>
          </div>

          <div class="manu-item col-md-4">
            <div class="img-wrapper">
              <a href="manufacturer_detail.php"><img src="imgs/manu3.png" alt=""></a>
            </div>
            <a href="manufacturer_detail.php"><p>Acorn Engineering</p></a>
          </div>

        <?php } ?>


      </div>

      <?php include ('includes/pagination.php'); ?>
      
    </div>

    


  </div>


  <?php $show_featured_products = true; $show_featured_collections = true; $show_popular_categories = true; include ('includes/featured.php') ?>


</div> <!-- END container main -->


<?php include('footer.php'); ?>

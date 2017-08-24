<?php include ('header.php'); ?>

<div class="container main">

  <!-- top banner -->
  <?php include ('includes/banner.php'); ?>

  <div class="row margin-down">

    <!-- sidebar -->
    <?php $show_filter = false; $show_manufacturer_filter = false; $show_prod_cats = true; $show_search = !$isMobile; include ('includes/sidebar.php'); ?>

    <div class="col-md-9 col-sm-12">
      

      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">Kitchen Faucets</h2>
        </div>
      </div>


      <div class="breadcrumbs row">
        <div class="col-md-12"> 
          <a href="#">Home </a>
            <span> > </span>
            <a href="#">Kitchen </a>
            <span> > </span>
          <a href="#">Faucets</a>
        </div>
      </div>

      

      
      <div class="">

        <?php for ($i=0;$i<10;$i++) { ?>
        <div class="col-md-3 col-xs-6 sub-cat-gallery-item">
          <a href="<?php echo $BASE_URL;?>/product_category.php"><img src="imgs/subcategory_faucet.png" alt=""></a>
          <div class="sub-cat-gallery-item-desc">
            <a href="<?php echo $BASE_URL;?>/product_category.php">Pullout</a>
          </div>
        </div>
        <?php } ?>


      </div>


      <div class="row">
        <div class="col-md-12 sub-category-text">
          <h3>Choosing &amp; Caring for Kitchen Faucets</h3>
          <p>Most homeowners don't have tons of money to spend, but want their kitchen to look its best. The perfect faucet can add a whole new look to your kitchen without breaking your budget, and because our buyers go the extra mile to bring you every imaginable kitchen faucet that is on the market - you can rest assured that you'll never find a bigger selection at such great prices. Whether you're looking for pullout, bar, pot filler, wall-mount, filter, or bridge faucets, you'll find an incredible selection by leading manufacturers including Moen, Delta, Kohler, Grohe, Danze and Pfister.</p>
        </div>
      </div>


      <div class=" articles">        
        
        <?php for ($i=0;$i<10;$i++) { ?>

        <div class="col-xs-12 col-md-6 article-item">
          <a href="#"><img src="imgs/subcatexample.png" alt=""></a>
          <div class="articles-text">            
             <div class="title"><h3><a href="#">How to Choose a Kitchen Faucet</a></h3></div>
             <a href="#"><p>There are many styles of kitchen faucets to choose from designed to provide you with customized functionality for your particular needs </p></a>
          </div>
        </div>

        <?php } ?>


      </div>

    </div>

  </div>

  <?php $show_featured_products = true; $show_featured_collections = true; $show_popular_categories = true; include ('includes/featured.php'); ?>

</div>  <!-- END container main -->

<?php include ('footer.php'); ?>

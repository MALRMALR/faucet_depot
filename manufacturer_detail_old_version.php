<?php include ('header.php'); ?>

<div class="container main">
  <!-- top banner -->
  <?php include ('includes/banner.php'); ?> 

  <div class="row margin-down">

  <!-- sidebar -->
  <?php $show_manufacturer_filter = false; $show_prod_cats = false; $show_filter = false; $show_search = true;  include ('includes/sidebar.php'); ?>

    <!-- body -->
    <div class="col-md-9 col-sm-12 manufacturer">
      
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">Kohler</h2>
        </div>
      </div>

      <div class="breadcrumbs row">
        <div class="col-md-12">
          <a href="<?php echo $BASE_URL; ?>/index.php">Home</a>
          <span> &#62; </span>
          <a href="<?php echo $BASE_URL; ?>/manufacturer_list.php">Manufacturers</a>
          <span> &#62; </span>
          <a href="#">Kohler</a>
        </div>
      </div>
      
      <div class="row">
        <div class="col-xs-12 col-md-3 manu-logo">
          <img src="imgs/manu1.png" alt="">
        </div>
        <div class="col-xs-12 col-md-9">
          <p>Distinctive style, array of choices, uncompromising performance. As a recognized kitchen and bath industry leader, Kohler Company leads the way in design, craftsmanship and innovation, all knit together by uncompromising quality.</p>
          <img class="right" src="imgs/kohler_kitchen.png" alt="">
          <p>Faucet Depot is an authorized online retailer of Kohler products, featuring all the latest innovations and models including Sensate Touchless kitchen faucets, Moxie showerheads,
          Devonshire series water saving bathroom faucets, and Kohler toilets. We also stock a giant selection of repair parts to keep your current Kohler products working as if you installed them yesterday.</p>
        </div>
      </div>



      <div class="row cats-prods">

        <div class="col-sm-12 col-md-6">
          <?php for ($i = 0; $i < 9; ++$i) { ?>
            <div class="manu-subcat-item">
              <a href="#">
                <h3 class="cat-title">Kohler Kitchen Faucets</h3>
              </a>
              <ul class="">
                <li><a href="#">View All Kitchen Faucets</a></li>
                <li><a href="#">Kitchen Pullout</a></li>
                <li><a href="#">Kitchen Single-Handle</a></li>
                <li><a href="#">Kitchen Two-Handle</a></li>
                <li><a href="#">Bar Faucets</a></li>
                <li><a href="#">Pot Fillers</a></li>
                <li><a href="#">Kitchen Wall-Mount</a></li>
                <li><a href="#">Kitchen Bridge</a></li>
              </ul>
            </div>
          <?php } ?>
        </div>

        <div class="col-sm-12 col-md-6">        
          <?php for ($i = 0; $i < 5; ++$i) { ?>
          <div class="pop-prod">
            <img src="imgs/kohler_faucet.png" alt="">
            <h3><a href="#">Kohler K-12177-BN Fairfax Pull Down Kitchen Faucet - Brushed Nickel</a></h3>
          </div>
          <?php } ?>
        </div>

      </div>


      <div class="row">
        <div class="col-sm-12 manufacturer-desc">
          <iframe width="853" height="480" src="https://www.youtube.com/embed/s3hHPEaY3NA" frameborder="0" allowfullscreen=""></iframe>
        </div>
      </div>


      <div class="row manu-colls-list">
        <h3 class="cat-title">Kohler Collections</h3>
        <?php for ($i = 0; $i < 30; ++$i) { ?>
        <div class="col-md-3">
          <a href="#">Collection name</a>
        </div>
        <?php } ?>
      </div>


      <div class="row manu-search-box">
        <h3 class="cat-title">Search Kohler</h3>
        <form class="" action="SEARCH" method="POST">
          <input type="text" name="search" placeholder="Part # / SKU / Keywords">
          <button type="submit">Search</button>
        </form>
        <br>
        <p><a href="#">View All Kohler Products</a></p>
        <p>Kohler Customer Service <strong>1-800-4-KOHLER</strong></p>
        <p>Kohler Website <a href="#">http://www.us.kohler.com</a></p>
      </div>

    </div>


  </div>

  
  <?php $show_featured_products = true; $show_featured_collections = true; $show_popular_categories = true; include ('includes/featured.php') ?>
</div> <!-- END container main -->


<?php include('footer.php'); ?>

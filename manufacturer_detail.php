<?php include ('header.php'); ?>

<div class="container main">
  <!-- top banner -->
  <?php include ('includes/banner.php'); ?> 

  <div class="row margin-down">

 
    <!-- body -->
    <div class="col-sm-12 manufacturer">
      
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
        <div class="col-xs-12 col-md-4 manu-logo">
          <img src="imgs/logo-kohler.jpg" alt="">
        </div>
        <div class="col-xs-12 col-md-8">
          <p>Distinctive style, array of choices, uncompromising performance. As a recognized kitchen and bath industry leader, Kohler Company leads the way in design, craftsmanship and innovation, all knit together by uncompromising quality.</p>
          <p>Faucet Depot is an authorized online retailer of Kohler products, featuring all the latest innovations and models including Sensate Touchless kitchen faucets, Moxie showerheads,
          Devonshire series water saving bathroom faucets, and Kohler toilets. We also stock a giant selection of repair parts to keep your current Kohler products working as if you installed them yesterday.</p>
        </div>
      </div>



      <div class="row cats-prods">

        <?php for ($i = 0; $i < 6; $i++) { ?>

          <div class="manu-subcat-item col-sm-6 col-md-3">
            <a href="#">
              <img src="imgs/subcatexample.png" class="shadow">
            </a>
            <a href="#">
              <h4 class="cat-title">Kohler Kitchen Faucets_<?php echo $i;?></h4>
            </a>
            <ul class="">
              <li><a href="#">View All Kitchen Faucets</a></li>
              <li><a href="#">Kitchen Pullout</a></li>
              <li><a href="#">Kitchen Single-Handle</a></li>
              <li><a href="#">Kitchen Two-Handle</a></li>
              <li><a href="#">Bar Faucets</a></li>
            </ul>
          </div>

          <div class="manu-subcat-item col-sm-6 col-md-3">
            <a href="#">
              <img src="imgs/subcatexample.png" class="shadow">
            </a>
            <a href="#">
              <h4 class="cat-title">Kohler Kitchen Faucets_<?php echo $i;?>_<?php echo $i;?></h4>
            </a>
            <ul class="">
              <li><a href="#">View All Kitchen Faucets</a></li>
              <li><a href="#">Kitchen Pullout</a></li>
              <li><a href="#">Kitchen Single-Handle</a></li>
              <li><a href="#">Kitchen Two-Handle</a></li>
            </ul>
            <ul id="collapsed_item_<?php echo $i;?>" class="collapse">
              <li><a href="#">Additional link 1</a></li>
              <li><a href="#">Additional link 2</a></li>
              <li><a href="#">Additional link 3</a></li>
              <li><a href="#">Additional link 4</a></li>
              <li><a href="#">Additional link 5</a></li>
            </ul>

            
            <a href="javascript:void(0);" class="view-all-btn arrow-down collapsed" data-toggle="collapse" data-target="#collapsed_item_<?php echo $i;?>">View more</a>
          </div>

        <?php } ?>
      </div>  

      
      <?php $show_featured_products = true; $show_featured_collections = true; $show_popular_categories = true; include ('includes/featured.php') ?>


      <div class="row additional-content manufacturer-desc">

        <div class="col-sm-12">
          <h2 class="section-title">More about Kohler</h2>
          <iframe width="853" height="480" src="https://www.youtube.com/embed/s3hHPEaY3NA" frameborder="0" allowfullscreen=""></iframe>
          <p>Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
          <p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
        </div>

      </div>

      <div class="row manu-search-box">

        <div class="col-sm-12 col-md-6">
          <h2 class="section-title">Search Kohler</h2>
          <form class="" action="SEARCH" method="POST">
            <input type="text" name="search" placeholder="Part # / SKU / Keywords">
            <button type="submit">Search</button>
          </form>
        </div>

        <div class="col-sm-12 col-md-6">
          <h2 class="section-title">Contact Kohler</h2>
          <p><a href="#" class=" read-more-btn arrow-right">View All Kohler Products</a></p>
          <p>Kohler Customer Service: <strong>1-800-4-KOHLER</strong></p>
          <p>Kohler Website <a href="http://www.us.kohler.com" target="_blank"><strong>http://www.us.kohler.com</strong></a></p>
        </div>

      </div>

      

    </div>


  </div>

  
  
</div> <!-- END container main -->


<?php include('footer.php'); ?>

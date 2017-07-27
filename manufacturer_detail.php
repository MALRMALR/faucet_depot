<?php include ('header.php'); ?>

<div class="container main">
  <!-- top banner -->
  <?php include ('banner.php'); ?>

  <div class="row margin-down">

  <!-- sidebar -->
  <?php include ('sidebar.php'); ?>

    <!-- body -->
    <div class="col-md-9 col-sm-12 manufacturer">

      <div class="row">
        <div class="taxonomy col-md-12">
          <a href="#">Home</a>
          <span> &#62; </span>
          <a href="#">Manufacturers </a>
          <span> &#62; </span>
          <a href="#">Kohler</a>
        </div>
      </div>


      <!-- manufacturer sub category lists (left side body)-->
      <div class="row">
        <div class="col-md-3 col-sm-12 manufacturer-sub-cat-list">
          <?php for ($i = 0; $i < 9; ++$i) { ?>
          <a href="#">
            <h3 class="cat-title">Kohler Kitchen Faucets</h3>
          </a>
          <ul class="manufacturer-sub-cat-list">
            <li>View All Kitchen Faucets</li>
            <li>Kitchen Pullout</li>
            <li>Kitchen Single-Handle</li>
            <li>Kitchen Two-Handle</li>
            <li>Bar Faucets</li>
            <li>Pot Fillers</li>
            <li>Kitchen Wall-Mount</li>
            <li>Kitchen Bridge</li>
          </ul>
          <?php } ?>
        </div> <!-- end manufacturer-sub-cat-list -->

      <div class="col-md-9 col-sm-12 manufacturer-desc">
        <div class="row">
          <h3 class="cat-title">Kohler</h3>
          <p>Distinctive style, array of choices, uncompromising performance. As a recognized kitchen and bath industry leader, Kohler Company leads the way in design, craftsmanship and innovation, all knit together by uncompromising quality.</p>
          <p>Faucet Depot is an authorized online retailer of Kohler products, featuring all the latest innovations and models including Sensate Touchless kitchen faucets, Moxie showerheads,
  Devonshire series water saving bathroom faucets, and Kohler toilets. We also stock a giant selection of repair parts to keep your current Kohler products working as if you installed them yesterday.</p>
        </div>
        <div class="row">
          <?php for ($i = 0; $i < 5; ++$i) { ?>
          <div class="col-md-4">
            <img src="imgs/kohler_faucet.png" alt="">
            <h3><a href="#">Kohler K-12177-BN Fairfax Pull Down Kitchen Faucet - Brushed Nickel</a></h3>

          </div>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="row manufacturers-collections-exhaustive">
      <h3 class="cat-title">Kohler Collections</h3>
      <?php for ($i = 0; $i < 3; ++$i) { ?>
      <div class="col-md-4">
        <ul>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
          <li><a href="#">Accent</a></li>
          <li><a href="#">Addison (Kohler)</a></li>
          <li><a href="#">Alberry</a></li>
        </ul>

      </div>
      <?php } ?>
    </div>

    <div class="row">
      <h3 class="cat-title">
        Search Kohler
      </h3>
      <form class="" action="SEARCH" method="POST">
        <input type="text" name="search" placeholder="Part # / SKU / Keywords">
      </form>
      <a href="#">View All Kohler Products</a>
      <p>Kohler Customer Service <strong>1-800-4-KOHLER</strong></p>
      <p>Kohler Website <a href="#">http://www.us.kohler.com</a></p>
    </div>



  </div><!-- end BODY -->

  </div>

  <div class="row manufacturer-desc">
    <h3 class="cat-title">Kohler Faucets, Sinks, and Showers</h3>
    <p>Distinctive style, array of choices, uncompromising performance. As a recognized kitchen and bath industry leader, Kohler Company leads the way in design, craftsmanship and innovation, all knit together by uncompromising quality.Faucet Depot is an authorized online retailer of Kohler products, featuring all the latest innovations and models including Sensate Touchless kitchen faucets, Moxie showerheads, Devonshire series water saving bathroom faucets, and Kohler toilets. We also stock a giant selection of repair parts to keep your current Kohler products working as if you installed them yesterday.</p>
    Distinctive style, array of choices, uncompromising performance. As a recognized kitchen and bath industry leader, Kohler Company leads the way in design, craftsmanship and innovation, all knit together by uncompromising quality.Faucet Depot is an authorized online retailer of Kohler products, featuring all the latest innovations and models including Sensate Touchless kitchen faucets, Moxie showerheads, Devonshire series water saving bathroom faucets, and Kohler toilets. We also stock a giant selection of repair parts to keep your current Kohler products working as if you installed them yesterday.
    <h3 class="cat-title">Kitchen Products by Kohler</h3>
    <img class="right" src="imgs/kohler_kitchen.png" alt="">
    <p>Distinctive style, array of choices, uncompromising performance. As a recognized kitchen and bath industry leader, Kohler Company leads the way in design, craftsmanship and innovation, all knit together by uncompromising quality.Faucet Depot is an authorized online retailer of Kohler products, featuring all the latest innovations and models including Sensate Touchless kitchen faucets, Moxie showerheads, Devonshire series water saving bathroom faucets, and Kohler toilets. We also stock a giant selection of repair parts to keep your current Kohler products working as if you installed them yesterday.</p>
    <p>Distinctive style, array of choices, uncompromising performance. As a recognized kitchen and bath industry leader, Kohler Company leads the way in design, craftsmanship and innovation, all knit together by uncompromising quality.Faucet Depot is an authorized online retailer of Kohler products, featuring all the latest innovations and models including Sensate Touchless kitchen faucets, Moxie showerheads, Devonshire series water saving bathroom faucets, and Kohler toilets. We also stock a giant selection of repair parts to keep your current Kohler products working as if you installed them yesterday.</p>
    <p>Distinctive style, array of choices, uncompromising performance. As a recognized kitchen and bath industry leader, Kohler Company leads the way in design, craftsmanship and innovation, all knit together by uncompromising quality.Faucet Depot is an authorized online retailer of Kohler products, featuring all the latest innovations and models including Sensate Touchless kitchen faucets, Moxie showerheads, Devonshire series water saving bathroom faucets, and Kohler toilets. We also stock a giant selection of repair parts to keep your current Kohler products working as if you installed them yesterday.</p>
  </div>



  <?php include ('featured.php') ?>
</div> <!-- END container main -->


<?php include('footer.php'); ?>

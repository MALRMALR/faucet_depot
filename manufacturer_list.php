<?php include ('header.php'); ?>

<div class="container main">
  
  <!-- top banner -->
  <?php include ('banner.php'); ?>

  <div class="row margin-down">

    <!-- sidebar -->
    <?php include ('sidebar.php'); ?>

    <div class="col-md-9 col-sm-12">

      <div class="row">

        <div class="taxonomy col-md-12">
            <a href="#">Home </a>
              <span> > </span>
              <a href="#">Manufacturers </a>
        </div>

      </div>


      <div class="row">
        <div class="col-sm-12">
          <h3 class="cat-title">Manufacturers</h3>
          <p>Faucet Depot caries industry renowned faucets, sink and fixture brands as well as a wide range of commercial and tool brands.  Use the links to the left to narrow your selections</p>
        </div>

        <div id="manufacturer-list" class="row">

          
          <?php for($i<0;$i<5;$i++) {?>
            <div class="manu-item col-md-3">
              <div class="img-wrapper">
                <a href="manufacturer_detail.php"><img src="imgs/manu1.png" alt=""></a>
              </div>
              <a href="manufacturer_detail.php"><p>AB and I Foundry</p></a>
            </div>

            <div class="manu-item col-md-3">
              <div class="img-wrapper">
                <a href="manufacturer_detail.php"><img src="imgs/manu2.png" alt=""></a>
              </div>
              <a href="manufacturer_detail.php"><p>Accutools</p></a>
            </div>

            <div class="manu-item col-md-3">
              <div class="img-wrapper">
                <a href="manufacturer_detail.php"><img src="imgs/manu3.png" alt=""></a>
              </div>
              <a href="manufacturer_detail.php"><p>Acorn Engineering</p></a>
            </div>

            <div class="manu-item col-md-3">
              <div class="img-wrapper">
                <a href="manufacturer_detail.php"><img src="imgs/manu4.png" alt=""></a>
              </div>
              <a href="manufacturer_detail.php"><p>ACT DMAND Kontrols</p></a>
            </div>
            <!-- <div class="col-md-2">
              <div class="img-wrapper">
                <a href="manufacturer_detail.php"><img src="imgs/manu5.png" alt=""></a>
              </div>
              <a href="manufacturer_detail.php"><p>Advanced Gloves</p></a>
            </div> -->

          <?php } ?>


        </div>

      </div>

    </div>
  
  </div>


  <?php include ('featured.php') ?>


</div> <!-- END container main -->


<?php include('footer.php'); ?>

<!DOCTYPE html>
<html>

  <head>
    <?php
      require_once('Mobile_Detect.php');
      $detect = new Mobile_Detect;
      $isMobile = $detect->isMobile() && !$detect->isTablet();
      $isTablet = $detect->isTablet();

      $BASE_URL = "/faucetdepot/site";
    ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Montserrat:400,700|Oswald:600|Poppins:600" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/slick.min.css" />
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/master.min.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/styles.min.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/main.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <title>Faucet Depot</title>


  </head>


  <body>

    <div class="promo-bar header-bar">
      <div class="container">
        <button data-toggle="collapse" data-target="#promos" class="visible-xs arrow-down collapsed">View our Promo Codes</button>
        
        <ul id="promos" class="collapse">
          <li>
            <img src="imgs/faucet-small.png">
            <div class="text">
              <p><span class="percent">5% OFF</span> Pullout Faucets</p>
              <p>Use Code: <span class="code">Pullout5</span></p>
            </div>
          </li>
          <li>
            <img src="imgs/faucet-small.png">
            <div class="text">
              <p><span class="percent">5% OFF</span> Pullout Faucets</p>
              <p>Use Code: <span class="code">Pullout5</span></p>
            </div>
          </li>
          <li>
            <img src="imgs/faucet-small.png">
            <div class="text">
              <p><span class="percent">5% OFF</span> Pullout Faucets</p>
              <p>Use Code: <span class="code">Pullout5</span></p>
            </div>
          </li>
          <li>
            <img src="imgs/faucet-small.png">
            <div class="text">
              <p><span class="percent">5% OFF</span> Pullout Faucets</p>
              <p>Use Code: <span class="code">Pullout5</span></p>
            </div>
          </li>

          <li class="view-all-discounts">
            <a href="<?php echo $BASE_URL;?>/generic_content_page.php">
              <img src="imgs/sale.png">
              View all of our promo codes
            </a>
          </li>

        </ul>
      </div>
    </div>

    
    <?php if (!$isMobile) { ?>
      <div class="upper-bar header-bar">
        <div class="container">

          <ul class="pull-left show-dots">
            <li>
              <a href="<?php echo $BASE_URL;?>/generic_content_page.php">Are You a Pro?</a>
            </li>
            <li>
              <a href="<?php echo $BASE_URL;?>/generic_content_page.php">Hospitality Plumbing Supplies</a>
            </li>
            <li>
              <a href="<?php echo $BASE_URL;?>/generic_content_page.php">Returns</a>
            </li>
            <li>
              <a href="<?php echo $BASE_URL;?>/generic_content_page.php">Shipping</a>
            </li>
            <li>
              <a href="<?php echo $BASE_URL;?>/generic_content_page.php">Customer Care</a>
            </li>
          </ul>

          <ul class="pull-right">
            <li><a href="#" class="track-order"><i class="fa fa-truck" aria-hidden="true"></i> Track an Order</a></li>
            <li><a href="#" class="my-account"><i class="fa fa-user" aria-hidden="true"></i> My Account</a></li>
          </ul>

        </div>
      </div>

      <div class="phone-bar header-bar">
        <div class="container">
          <ul class="show-dots">
            <li>Toll Free: (888) 328-2389</li>
            <li>Live Chat Support Online</li>
          </ul>
        </div>
      </div>

    <?php } ?>

    


    <header class="main-header">

      <div class="container top">
        <div class="col-xs-12 col-sm-3 logo-holder">
          <a href="<?php echo $BASE_URL;?>/"><img src="imgs/main-logo.jpg" class="logo"></a>
        </div>

        <?php if ($isMobile) { ?>

        <?php include ('menu.php'); ?>

        <div class="upper-bar">
          <div class="container">
            <div class="col-xs-10">
              <ul>
                <li><a href="#" class="track-order"><i class="fa fa-truck" aria-hidden="true"></i> Track an Order</a></li>
                <li><a href="#" class="my-account"><i class="fa fa-user" aria-hidden="true"></i> My Account</a></li>
              </ul>
            </div>
            <div class="col-xs-2 cart-holder">
              <a href="#" class="cart" data-num-in-cart="0"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
        
        <div class="row phone-bar">
          <div class="container">
            <ul>
              <li>Toll Free: (888) 328-2389</li>    
              <li>Live Chat Support Online</li>
            </ul>
          </div>
        </div>

        <?php } ?>


        <div class="col-sm-5 col-sm-offset-1 search-fld-holder">
          <div>
            <input type="text" class="search-fld" placeholder="Search"><button id="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </div>

        
        <?php if (!$isMobile) { ?>
        <div class="col-xs-12 col-sm-3 cart-holder">
          <div class="cart">
              <img src="imgs/shopping-cart.jpg">
              <div>
                <strong>MY CART</strong><br>
                Items(s) - $0.00
              </div>
          </div>
        </div>
        <?php } ?>

      </div>


      <?php if (!$isMobile) include ('menu.php'); ?>

    </header>

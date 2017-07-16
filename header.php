<!DOCTYPE html>
<html> 

  <head>
    <?php
      require_once('Mobile_Detect.php');
      $detect = new Mobile_Detect;
      $isMobile = $detect->isMobile() && !$detect->isTablet();
      $isTablet = $detect->isTablet();
    ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i|Montserrat:400,700|Oswald:600|Poppins:600" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    

    <?php if ($isMobile) { ?>
      <link rel="stylesheet" type="text/css" href="css/normalize.min.css" />
      <link rel="stylesheet" type="text/css" href="css/component.min.css" />
    <?php } ?>

    
    <link rel="stylesheet" href="css/slick.min.css" />  
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="stylesheet" href="css/styles.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <title>Faucet Depot</title>


  </head>


  <body>

    <div class="promo-bar">
      <div class="container">
        <ul>
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
            <a href="#">
              <img src="imgs/sale.png">
              View all of our promo codes
            </a>
          </li>

        </ul>
      </div>
    </div>

    <div class="upper-bar">
      <div class="container">

        <ul class="pull-left">
          <li>
            Are You a Pro?
          </li>
          <li>
            <a href="#">Hospitality Plumbing Supplies</a>
          </li>
          <li>
            <a href="#">Returns</a>
          </li>
          <li>
            <a href="#">Shipping</a>
          </li>
          <li>
            <a href="#">Customer Care</a>
          </li>
        </ul>
        
        <ul class="pull-right">
          <li><a href="#" class="track-order"><i class="fa fa-truck" aria-hidden="true"></i> Track an Order</a></li>
          <li><a href="#" class="my-account"><i class="fa fa-user" aria-hidden="true"></i> My Account</a></li>
        </ul>
    
      </div>
    </div>


    <header class="main-header">

      <div class="container top">
        <div class="col-xs-12 col-sm-3">
          <img src="imgs/main-logo.jpg" class="logo">
        </div>
        <div class="col-sm-5 col-sm-offset-1 search-fld-holder">
          <div>
            <input type="text" class="search-fld" placeholder="Search"><button id="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 cart-holder">
          <div class="cart">
              <img src="imgs/shopping-cart.jpg">
              <div>
                <strong>MY CART</strong><br>
                Items(s) - $0.00
              </div>
          </div>
        </div>
      </div>


      <?php if ($isMobile){ ?>
          <div class="mp-pusher" id="mp-pusher">
            <a href="#" id="trigger" class="">
              <span class="glyphicon glyphicon-menu-hamburger mobile-hamburger"></span> PRODUCT CATALOG
            </a>

          <?php include ('mobileMenu.php'); ?>
          </div>

          <?php } else { 

            include ('desktopMenu.php');

           }
      ?>

    </header>

      


<div class="menu-holder">
	<!-- https://codepen.io/subodhghulaxe/pen/zxwKBo -->
	<nav class="navbar navbar-default megamenu">
	  <div class="container">
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#theMenu">
	          <span class="sr-only">Toggle navigation</span>
	          MENU <i class="fa fa-bars" aria-hidden="true"></i>

	          <!-- <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span> -->
	        </button>
	      </div>

	      <!-- Collect the nav links, forms, and other content for toggling -->
	      <div id="theMenu" class="collapse navbar-collapse">
	        <ul class="nav navbar-nav">
	          <li class="active"><a href="<?php echo $BASE_URL;?>">Home <span class="sr-only">(current)</span></a></li>

	          <li class="dropdown megamenu-fw">
	            <a href="<?php echo $BASE_URL;?>/main_category.php" class="dropdown-toggle<?php if (!$isMobile) echo ' disabled';?>" data-toggle="dropdown" role="button" aria-expanded="false">Kitchen</a>
	            <ul class="dropdown-menu megamenu-content" role="menu">
	              	<li>
					    <div class="row">
					        <!-- up to five columns!!! -->
					        <div class="col-xs-12 col-sm-2">
					      		<h3 class="title"><a href="<?php echo $BASE_URL;?>/sub_category.php">Kitchen Faucets</a></h3>
					            <ul class="link-list">
					                <li class="">
					                	<a href="<?php echo $BASE_URL;?>/product_category.php" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="<?php echo $BASE_URL;?>/product_category.php" class="txt-link">Pullout</a>
					                </li>
					                <li class="">
					                	<a href="<?php echo $BASE_URL;?>/product_category.php" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="<?php echo $BASE_URL;?>/product_category.php" class="txt-link">Single-Handle</a>
					                </li>
					                <li class="">
					                	<a href="<?php echo $BASE_URL;?>/product_category.php" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="<?php echo $BASE_URL;?>/product_category.php" class="txt-link">Two-Handle</a>
					                </li>
					                <li class="">
					                	<a href="<?php echo $BASE_URL;?>/product_category.php" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="<?php echo $BASE_URL;?>/product_category.php" class="txt-link">Bar Faucets</a>
					                </li>
					                <li class="">
					                	<a href="<?php echo $BASE_URL;?>/product_category.php" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="<?php echo $BASE_URL;?>/product_category.php" class="txt-link">Pot Fillers</a>
					                </li>
					                <li class="view-all">
										<a href="<?php echo $BASE_URL;?>/sub_category.php" class="read-more-btn arrow-right">View all</a>
					                </li>
					            </ul>
					        </div>

					        <div class="col-xs-12 col-sm-2">
					      		<h3 class="title"><a href="<?php echo $BASE_URL;?>/sub_category.php">Kitchen Sinks</a></h3>
					            <ul class="link-list">
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pullout</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Single-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Two-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Bar Faucets</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pot Fillers</a>
					                </li>
					                <li class="view-all">
										<a href="<?php echo $BASE_URL;?>/sub_category.php" class="read-more-btn arrow-right">View all</a>
					                </li>
					            </ul>
					        </div>

					        <div class="col-xs-12 col-sm-2">
					      		<h3 class="title"><a href="<?php echo $BASE_URL;?>/sub_category.php">Garbage Disposals</a></h3>
					            <ul class="link-list">
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pullout</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Single-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Two-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Bar Faucets</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pot Fillers</a>
					                </li>
					                <li class="view-all">
										<a href="<?php echo $BASE_URL;?>/sub_category.php" class="read-more-btn arrow-right">View all</a>
					                </li>
					            </ul>
					        </div>

					        <div class="col-xs-12 col-sm-2">
					      		<h3 class="title"><a href="<?php echo $BASE_URL;?>/sub_category.php">Hot Water Dispensers</a></h3>
					            <ul class="link-list">
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pullout</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Single-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Two-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Bar Faucets</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pot Fillers</a>
					                </li>
					                <li class="view-all">
										<a href="<?php echo $BASE_URL;?>/sub_category.php" class="read-more-btn arrow-right">View all</a>
					                </li>
					            </ul>
					        </div>

					        <div class="col-xs-12 col-sm-2">
					      		<h3 class="title"><a href="<?php echo $BASE_URL;?>/sub_category.php">Kitchen Accessories</a></h3>
					            <ul class="link-list">
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pullout</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Single-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Two-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Bar Faucets</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pot Fillers</a>
					                </li>
					                <li class="view-all">
										<a href="<?php echo $BASE_URL;?>/sub_category.php" class="read-more-btn arrow-right">View all</a>
					                </li>
					            </ul>
					        </div>

					    </div>
					    <div class="row">
							<div class="col-sm-12">
								<a href="<?php echo $BASE_URL;?>/main_category.php" class="view-all-cat-btn">View entire Kitchen Category</a>
							</div>
					    </div>
					</li>
	            </ul>
	          </li>

	          <li class="dropdown">
	            <a href="<?php echo $BASE_URL;?>/main_category.php" class="dropdown-toggle<?php if (!$isMobile) echo ' disabled';?>" data-toggle="dropdown" role="button" aria-expanded="false">Bath</a>
	            <ul class="dropdown-menu" role="menu">
	              <li><a href="#">Action</a></li>
	              <li><a href="#">Another action</a></li>
	              <li><a href="#">Something else here</a></li>
	              <li class="divider"></li>
	              <li><a href="#">Separated link</a></li>
	              <li class="divider"></li>
	              <li><a href="#">One more separated link</a></li>
	            </ul>
	          </li>

	          <li class="dropdown">
	            <a href="<?php echo $BASE_URL;?>/main_category.php" class="dropdown-toggle<?php if (!$isMobile) echo ' disabled';?>" data-toggle="dropdown" role="button" aria-expanded="false">Fixtures</a>
	            <ul class="dropdown-menu megamenu-content" role="menu">
	              	<li>
					    <div class="row">
					        <!-- up to five columns!!! -->
					        <div class="col-xs-12 col-sm-2">
					      		<h3 class="title"><a href="<?php echo $BASE_URL;?>/sub_category.php">Kitchen Faucets</a></h3>
					            <ul class="link-list">
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pullout</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Single-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Two-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Bar Faucets</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pot Fillers</a>
					                </li>
					                <li class="view-all">
										<a href="<?php echo $BASE_URL;?>/sub_category.php" class="read-more-btn arrow-right">View all</a>
					                </li>
					            </ul>
					        </div>

					        <div class="col-xs-12 col-sm-2">
					      		<h3 class="title"><a href="<?php echo $BASE_URL;?>/sub_category.php">Kitchen Sinks</a></h3>
					            <ul class="link-list">
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pullout</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Single-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Two-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Bar Faucets</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pot Fillers</a>
					                </li>
					                <li class="view-all">
										<a href="<?php echo $BASE_URL;?>/sub_category.php" class="read-more-btn arrow-right">View all</a>
					                </li>
					            </ul>
					        </div>

					        <div class="col-xs-12 col-sm-2">
					      		<h3 class="title"><a href="<?php echo $BASE_URL;?>/sub_category.php">Garbage Disposals</a></h3>
					            <ul class="link-list">
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pullout</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Single-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Two-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Bar Faucets</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pot Fillers</a>
					                </li>
					                <li class="view-all">
										<a href="<?php echo $BASE_URL;?>/sub_category.php" class="read-more-btn arrow-right">View all</a>
					                </li>
					            </ul>
					        </div>

					        <div class="col-xs-12 col-sm-2">
					      		<h3 class="title"><a href="<?php echo $BASE_URL;?>/sub_category.php">Hot Water Dispensers</a></h3>
					            <ul class="link-list">
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pullout</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Single-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Two-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Bar Faucets</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pot Fillers</a>
					                </li>
					                <li class="view-all">
										<a href="<?php echo $BASE_URL;?>/sub_category.php" class="read-more-btn arrow-right">View all</a>
					                </li>
					            </ul>
					        </div>

					        <div class="col-xs-12 col-sm-2">
					      		<h3 class="title"><a href="<?php echo $BASE_URL;?>/sub_category.php">Kitchen Accessories</a></h3>
					            <ul class="link-list">
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pullout</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Single-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Two-Handle</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Bar Faucets</a>
					                </li>
					                <li class="">
					                	<a href="#" class="img-link"><img alt="" class="img-responsive" src="<?php echo $BASE_URL;?>/imgs/kitchen-pullout-faucets.jpg"></a>
										<a href="#" class="txt-link">Pot Fillers</a>
					                </li>
					                <li class="view-all">
										<a href="<?php echo $BASE_URL;?>/sub_category.php" class="read-more-btn arrow-right">View all</a>
					                </li>
					            </ul>
					        </div>

					    </div>
					    <div class="row">
							<div class="col-sm-12">
								<a href="<?php echo $BASE_URL;?>/main_category.php" class="view-all-cat-btn">View entire Kitchen Category</a>
							</div>
					    </div>
					</li>
	            </ul>
	          </li>


	          <li class="dropdown">
	            <a href="<?php echo $BASE_URL;?>/main_category.php" class="dropdown-toggle<?php if (!$isMobile) echo ' disabled';?>" data-toggle="dropdown" role="button" aria-expanded="false">Plumbing & Utility</a>
	            <ul class="dropdown-menu" role="menu">
	              <li><a href="#">Action</a></li>
	              <li><a href="#">Another action</a></li>
	              <li><a href="#">Something else here</a></li>
	              <li class="divider"></li>
	              <li><a href="#">Separated link</a></li>
	              <li class="divider"></li>
	              <li><a href="#">One more separated link</a></li>
	            </ul>
	          </li>

	          <li class="dropdown">
	            <a href="<?php echo $BASE_URL;?>/main_category.php" class="dropdown-toggle<?php if (!$isMobile) echo ' disabled';?>" data-toggle="dropdown" role="button" aria-expanded="false">Water Heaters</a>
	            <ul class="dropdown-menu" role="menu">
	              <li><a href="#">Action</a></li>
	              <li><a href="#">Another action</a></li>
	              <li><a href="#">Something else here</a></li>
	              <li class="divider"></li>
	              <li><a href="#">Separated link</a></li>
	              <li class="divider"></li>
	              <li><a href="#">One more separated link</a></li>
	            </ul>
	          </li>
	          <li class="dropdown">
	            <a href="<?php echo $BASE_URL;?>/main_category.php" class="dropdown-toggle<?php if (!$isMobile) echo ' disabled';?>" data-toggle="dropdown" role="button" aria-expanded="false">Filter</a>
	            <ul class="dropdown-menu" role="menu">
	              <li><a href="#">Action</a></li>
	              <li><a href="#">Another action</a></li>
	              <li><a href="#">Something else here</a></li>
	              <li class="divider"></li>
	              <li><a href="#">Separated link</a></li>
	              <li class="divider"></li>
	              <li><a href="#">One more separated link</a></li>
	            </ul>
	          </li>
	          <li class="dropdown">
	            <a href="<?php echo $BASE_URL;?>/main_category.php" class="dropdown-toggle<?php if (!$isMobile) echo ' disabled';?>" data-toggle="dropdown" role="button" aria-expanded="false">Parts</a>
	            <ul class="dropdown-menu" role="menu">
	              <li><a href="#">Action</a></li>
	              <li><a href="#">Another action</a></li>
	              <li><a href="#">Something else here</a></li>
	              <li class="divider"></li>
	              <li><a href="#">Separated link</a></li>
	              <li class="divider"></li>
	              <li><a href="#">One more separated link</a></li>
	            </ul>
	          </li>
	          <li class="dropdown">
	            <a href="<?php echo $BASE_URL;?>/main_category.php" class="dropdown-toggle<?php if (!$isMobile) echo ' disabled';?>" data-toggle="dropdown" role="button" aria-expanded="false">Tools</a>
	            <ul class="dropdown-menu" role="menu">
	              <li><a href="#">Action</a></li>
	              <li><a href="#">Another action</a></li>
	              <li><a href="#">Something else here</a></li>
	              <li class="divider"></li>
	              <li><a href="#">Separated link</a></li>
	              <li class="divider"></li>
	              <li><a href="#">One more separated link</a></li>
	            </ul>
	          </li>
	          <li class="dropdown">
	            <a href="<?php echo $BASE_URL;?>/main_category.php" class="dropdown-toggle<?php if (!$isMobile) echo ' disabled';?>" data-toggle="dropdown" role="button" aria-expanded="false">Commercial</a>
	            <ul class="dropdown-menu" role="menu">
	              <li><a href="#">Action</a></li>
	              <li><a href="#">Another action</a></li>
	              <li><a href="#">Something else here</a></li>
	              <li class="divider"></li>
	              <li><a href="#">Separated link</a></li>
	              <li class="divider"></li>
	              <li><a href="#">One more separated link</a></li>
	            </ul>
	          </li>

	          <li><a href="<?php echo $BASE_URL;?>/manufacturer_list.php">Manufacturers</a></li>

	        </ul>
	      </div><!-- /.navbar-collapse -->
	  </div>
	</nav>



</div>


<div id="categories-sidebar" class="col-md-3 col-sm-12">
 
  <?php if (!isset($show_manufacturer_filter) || $show_manufacturer_filter == true) { ?>
    <div class="row sidebar-group">
      <h4 class="cat-title"><a data-toggle="collapse" class="collapse-btn" href="#collapseManuFilters" aria-expanded="false" aria-controls="collapseManuFilters">Filter By</a></h4>
      <div class="divider"></div>
      <ul id="collapseManuFilters" class="">
        <li><a href="#">All Brands</a></li>
        <li><a href="#">Top Faucet Brands</a></li>
        <li><a href="#">Top Sink Brands</a></li>
        <li><a href="#">Top Shower Brands</a></li>
        <li><a href="#">Commercial</a></li>
        <li><a href="#">Pump Brands</a></li>
        <li><a href="#">Filter Brands</a></li>
        <li><a href="#">Tool Brands</a></li>
        <li><a href="#">Decorative Brands</a></li>
        <li><a href="#">Steam Brands</a></li>
      </ul>
      
    </div>
  <?php } ?>

  <?php if (!isset($show_prod_cats) || $show_prod_cats == true) { ?>
    <div class="row sidebar-group">
      <h4 class="cat-title"><a data-toggle="collapse" class="collapse-btn" href="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories">Kitchen Categories</a></h4>
      <div class="divider"></div>
      <ul id="collapseCategories" class="">
        <li><a href="#">Faucets</a></li>
        <li><a href="#">Garbage Disposal</a></li>
        <li><a href="#">Hot Water Dispensers</a></li>
        <li><a href="#">Sinks</a></li>
        <li><a href="#">Accessories</a></li>
      </ul>
      
    </div>
  <?php } ?>

  <?php if (!isset($show_filter) || $show_filter == true) { ?>
    <div class="row filter-group sidebar-group">

      <h4 class="cat-title">
        <a data-toggle="collapse" class="collapse-btn" href="#collapseOptions" aria-expanded="false" aria-controls="collapseOptions">Narrow Your Options</a>
      </h4>

      <div id="collapseOptions" class="cat-filter">
        <div class="divider"></div>
        
          <h5 class="sb-title">Stock Status</h5>
          <input type="checkbox" id="check-all" name="all" value="">
          <label for="check-all">All</label>&nbsp;&nbsp;&nbsp;
          <input type="checkbox" id="check-in-stock" name="in-stock-only" value="">
          <label for="check-in-stock">In Stock Only</label>

        <h5 class="sb-title">Price</h5>
        <ul>
          <li><input type="checkbox" id="check-100" name="all" value=""> <label for="check-100">UP TO $100</label> (100)</li>
          <li><input type="checkbox" id="check-101" name="all" value=""> <label for="check-101">$101-$200</label> (100)</li>
          <li><input type="checkbox" id="check-201" name="all" value=""> <label for="check-201">$201-$30</label> (100)</li>
          <li><input type="checkbox" id="check-301" name="all" value=""> <label for="check-301">$301-40</label> (100)</li>
          <li><input type="checkbox" id="check-401" name="all" value=""> <label for="check-401">$401-50</label> (100)</li>
          <li><input type="checkbox" id="check-501" name="all" value=""> <label for="check-501">$501-60</label> (100)</li>
          <li><input type="checkbox" id="check-601" name="all" value=""> <label for="check-601">$601-70</label> (100)</li>
          <li><input type="checkbox" id="check-701" name="all" value=""> <label for="check-701">$701-80</label> (100)</li>
          <li><input type="checkbox" id="check-801" name="all" value=""> <label for="check-801">$801-90</label> (100)</li>
          <li><input type="checkbox" id="check-901" name="all" value=""> <label for="check-901">$901-1000</label> (100)</li>
          <li><input type="checkbox" id="check-1000" name="all" value=""> <label for="check-1000">OVER $1000</label> (100)</li>
        </ul>

        <h5 class="sb-title">Finish</h5>
        <ul>
          <li><input type="checkbox" id="check-black" name="all" value=""> <label for="check-black">Black</label> (17)</li>
          <li><input type="checkbox" id="check-brass" name="all" value=""> <label for="check-brass">Brass</label> (222)</li>
          <li><input type="checkbox" id="check-bronze" name="all" value=""> <label for="check-bronze">Bronze</label> (23)</li>
          <li><input type="checkbox" id="check-chrome" name="all" value=""> <label for="check-chrome">Chrome</label> (153)</li>
          <li><input type="checkbox" id="check-natural" name="all" value=""> <label for="check-natural">Natural</label> (2)</li>
          <li><input type="checkbox" id="check-nickel" name="all" value=""> <label for="check-nickel">Nickel</label> (77)</li>
          <li><input type="checkbox" id="check-stainless" name="all" value=""> <label for="check-stainless">Stainless Steelabel</a> (66)</li>
          <li><input type="checkbox" id="check-steel" name="all" value=""> <label for="check-steel">Steel</label> (66)</li>
          <li><input type="checkbox" id="check-white" name="all" value=""> <label for="check-white">White</label> (4)</li>

        </ul>


      </div>
    </div>
  <?php } ?>

  <?php include ('includes/search_box.php'); ?>
  
  <?php if (!$isMobile) { ?>
    <div class="row sidebar-group">
      <img src="imgs/live_help_right_rail_ad.png" alt="faucet depot ad">
    </div>
  <?php } ?>

</div>

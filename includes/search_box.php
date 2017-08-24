<?php if (!isset($show_search) || $show_search == true) { ?>
<div id="search-box" class="row sidebar-group">
  <h4 class="cat-title"><a data-toggle="collapse" class="collapse-btn" href="#collapseSearch" aria-expanded="false" aria-controls="collapseSearch">Product Search</a></h4>
  
  <div class="divider"></div>

  <form id="collapseSearch" class="" action="#" method="post">
    <input type="text" name="search" placeholder="Model # / Description">
    <div class="product-search-parameters select-holder">
      <select class="" name="manufacturer" placeholder="Select Manufacturer">
        <option value="">Select Manufacturer 1</option>
        <option value="">Select Manufacturer 2</option>
        <option value="">Select Manufacturer 3</option>
        <option value="">Select Manufacturer 4</option>
      </select>
    </div>

    <div class="product-search-parameters select-holder">

      <select class="" name="Select Product Type" placeholder="Select Product Type">
        <option value="">Select Product Type</option>
        <option value="">Select Product Type</option>
        <option value="">Select Product Type</option>
        <option value="">Select Product Type</option>
      </select>
    </div>
    <div class="product-search-parameters select-holder">

      <select class="" name="Select Product Option" placeholder="Select Product Option">
        <option value="">Select Product Option</option>
        <option value="">Select Product Option</option>
        <option value="">Select Product Option</option>
        <option value="">Select Product Option</option>
      </select>
    </div>
    <div class="product-search-parameters select-holder">
      <select class="" name="Select Finish" placeholder="Select Finish">
        <option value="">Select Finish</option>
        <option value="">Select Finish</option>
        <option value="">Select Finish</option>
        <option value="">Select Finish</option>
      </select>
    </div>

    <button type="submit" value="Search">Search</button>
    <a href="#" class="clear_search_btn">Clear Search</a>

  </form>
</div>
<?php } ?>
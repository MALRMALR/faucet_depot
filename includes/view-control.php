<div class="row justify-content-md-center view-control">

  <div class="col-md-4">
    <div class="sort-show select-holder">
      <!-- sort by -->
      <select class="" name="Sort By">
        <option value="">Sort By</option>
        <option value="">Sort By</option>
        <option value="">Sort By</option>
        <option value="">Sort By</option>
      </select>

    </div>
    <!-- show -->
    <div class="sort-show select-holder">
      <select class="" name="Show">
        <option value="12">Show 12</option>
        <option value="24">Show 24</option>
        <option value="36">Show 36</option>
        <option value="48">Show 48</option>
      </select>
    </div>
  </div>

  <div class="col-md-4">
      <?php include ('includes/pagination.php'); ?>
  </div>

  <div class="col-md-4">
    <!-- compare -->
    <a id="compare-btn" href="#">Compare (0)</a>
    
    <div class="view-btns">
      <!-- list button -->
      <a href="#" class="show-list-btn"><i class="fa fa-list" aria-hidden="true"></i></a>
      <!-- grid button -->
      <a href="#" class="show-grid-btn selected"><i class="fa fa-th" aria-hidden="true"></i></a>
    </div>

  </div>
  
</div>
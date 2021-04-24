<?php
  $activePage = 6;
  include "src\\header.php";
?>

<body>

<?php
  include "src\\navigation.php";
?>
  <!-- PRODUCTS -->
  <div class="background-img px-5">
  <div class="container-fluid my-5">

    <!-- Search bar  -->
    <div class="input-group input-group-lg w-75">
      <input type="text" id="inputSearch" class="form-control" placeholder="Search product name" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
      <div class="input-group-append">
        <button class="btn btn-secondary btn-lg" type="button" onclick="searchItem()">Search</button>
      </div>
    </div>


    <div id="search-result-container" class="row mt-5"> 
      <!-- SEARCH RESULTS DISPLAY HERE -->
    </div>

  </div>
  </div>


  <script id="item-template" type="text/x-custom-template">
    <div class="col-sm-3 mb-5">
      <div class="item-container shadow mb-5 mb-md-0">
        <a class="item-link" href=''>
          <img class="item-image" src="" alt="product1">
        </a>

        <div class="item-detail">
          <h4 class="item-title"></h4>

          <div class="text-justify item-description my-3"></div>
          
          <div class="row">
            <div class="col-4 my-auto">
              <span class="my-auto item-price">$999</span>
            </div>
            <div class="col">
              <a class="item-link" href=''>
                <button type="button" class="btn btn-dark btn-lg btn-add-to-cart" >View Product</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </script>

  <?php
  include "src\\footer.php";
  ?>
  
  <!-- Custom scripts -->
  <script src="script/shared.js"></script>
  <script src="script/search.js"></script>
</body>

</html>
<?php
include "src\\header.php";
?>

<body>

<?php
  $activePage = 2;
  include "src\\navigation.php";
?>



  <!-- CAROUSEL -->
  <div id="home-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 carousel-item-image" src="assets/images/background4.jpg" alt="First slide">
        <div class="carousel-caption-container p-3">
          <h2>BUY ONLINE</h2>
          <span class="mt-3">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
          </span>
        </div>
      </div>
    </div>
  </div>


  <!-- PRODUCTS -->
  <div class="background-img px-5">
    <div class="container-fluid my-5">
    <div class="accordion" id="accordionExample">

<?php 
      $catQuery = "SELECT * FROM `category`";
      $catResults = mysqli_query($connection, $catQuery);

      while ($cat = mysqli_fetch_array($catResults)) { 
?>

        <div class="card category-container">
        <div class="card-header" id="heading<?php echo $cat["Id"] ?>">
          <h2 class="mb-0">
            <button class="btn w-100" type="button" data-toggle="collapse" data-target="#collapse<?php echo $cat["Id"] ?>" aria-expanded="true" aria-controls="collapse<?php echo $cat["Id"] ?>">
                <h3 class="category-label"><?php echo $cat["Name"] ?></h3>
            </button>
          </h2>
        </div>

          <div id="collapse<?php echo $cat["Id"] ?>" class="collapse show" aria-labelledby="<?php echo $cat["Id"] ?>" data-parent="#accordionExample">
          <div class="card-body">

<?php 
        $query = "SELECT * FROM `product` WHERE `categoryId` = " . $cat["Id"];
        $results = mysqli_query($connection, $query);
        $idx = 0;

        while ($row = mysqli_fetch_array($results)) { 
          if ($idx % 4 == 0) { 
?>
          <div class="row justify-content-around mb-5">
<?php 
          } 

          $idx++;
?>

          <div class="col-sm-3">
            <div class="item-container shadow">
              <input type="hidden" class="product-id" value="<?php echo $row["Id"] ?>">
              <a href="product.php" onclick="goToProduct($(this))">
                <img class="product-thumbnail" src="<?php echo $row["ImagePath"] ?>" alt="product1">
              </a>

              <div class="item-detail">
                <h4 class="text-center product-title text-capitalize"><?php echo $row["Name"] ?></h4>

                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle product-selected-size" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ...
                  </button>
                  <div class="dropdown-menu product-sizes">
                    <!-- Size options -->
                  </div>
                </div>

                <div class="dropup">
                  <button class="btn btn-secondary dropdown-toggle product-selected-grind" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ...
                  </button>
                  <div class="dropdown-menu product-grinds">
                    <!-- Grind options -->
                  </div>
                </div>

                <div class="row">
                  <div class="col-4 my-auto">
                    <span class="my-auto product-price">$<?php echo $row["Price"] ?></span>
                  </div>
                  <div class="col">
                    <button type="button" class="btn btn-dark btn-lg" onclick="addToCart($(this))">Add to cart</button>
                    <input type="hidden" class="product-id" value="">
                  </div>
                </div>
              </div>
            </div>
          </div>

<?php
          if ($idx % 4 == 0) { 
?>
        </div>
<?php 
          } 
        }
?>
        
      </div>
    </div>
    </div>
<?php 
      } 
?>

      <!-- Product rows end -->

    </div>
    </div>
  </div>
  </div>


  <?php
  include "src\\footer.php";
  ?>
  
  <!-- Custom scripts -->
  <script src="script/shared.js"></script>
  <script src="script/content-generator.js"></script>
  <script src="script/shop.js"></script>
</body>

</html>
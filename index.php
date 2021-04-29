<?php
  $activePage = 1;
  include "src\\header.php";
?>

<body>

<?php
  include "src\\navigation.php";
?>
  



  <!-- CAROUSEL -->
  <div id="home-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 carousel-item-image" src="assets/images/carousel.jpg" alt="First slide">
        <div class="carousel-caption-container p-3">
          <h2 class="text-uppercase">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
          <span class="mt-2 text-uppercase">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
          </span>
        </div>
      </div>
    </div>
  </div>
  


  <!-- INDEX SECTION START -->
  


  <!-- PRODUCTS -->
  <div class="background-img pt-4 pb-5">
    <h3 class="text-center mb-4">Our Best Selling</h3>

    <div class="container-fluid">
      <div class="row justify-content-around">

<?php 
      $query = "SELECT * FROM `product` LIMIT 3";
        $results = mysqli_query($connection, $query);
        $idx = 0;

        while ($row = mysqli_fetch_array($results)) { 
?>         
        <div class="col-sm-3">
          <div class="item-container shadow mb-5 mb-md-0">
            <input type="hidden" class="item-id" value="<?php echo $row["Id"] ?>">
            <a href='product.php?productId=<?php echo $row["Id"] ?>'>
              <img class="item-image" src="<?php echo $row["ImagePath"] ?>" alt="product1">
            </a>

            <div class="item-detail">
              <h4 class="text-center item-title"><?php echo $row["Name"] ?></h4>

              <div class="text-justify item-description my-3"><?php echo $row["Description"] ?></div>

              <div class="form-group row">
                <label for="inputQuantity" class="col-sm-4 col-form-label">Quantity</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id='inputQuantity<?php echo $row["Id"] ?>' placeholder="Enter quantity" value="1" min="1" max="999">
                </div>
              </div>

              <div class="row">
                <div class="col-4 my-auto">
                  <span class="my-auto item-price">$<?php echo $row["Price"] ?></span>
                </div>
                <div class="col">
                  <button type="button" id='btnAddToCart<?php echo $row["Id"] ?>' class="btn btn-dark btn-lg btn-add-to-cart" onclick='addToCart(<?php echo $row["Id"] ?>)'>Add to
                    cart</button>
                  <input type="hidden" class="item-id" value="">
                </div>
              </div>
            </div>
          </div>
        </div>          
          
<?php
        }
?>

      </div>
    </div>
  </div>


  <!-- REVIEWS -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm p-0 review-container">

        <div class="carousel slide h-100" data-ride="carousel">
          <div class="carousel-inner h-100">
            <div class="carousel-item active h-100 review-container">
              <img src="assets/images/background5.jpg" alt="">
              <blockquote class="blockquote text-right">
                <p class="mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"</p>
                <footer class="blockquote-footer text-light">John</footer>
              </blockquote>
            </div>

            <div class="carousel-item h-100 review-container">
              <img src="assets/images/background6.jpg" alt="">
              <blockquote class="blockquote text-right">
                <p class="mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"</p>
                <footer class="blockquote-footer text-light">Karen <cite title="Source Title">ABC News</cite></footer>
              </blockquote>
            </div>

          </div>
        </div>

      </div>
      <div class="col-sm p-0 review-container bg-dark text-center">
        <div class="review-content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
          <a href="shop.php"><button type="button" class="btn btn-light mt-2">Shop now</button></a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm p-0 review-container text-center">
        <div class="review-content">
          <h6>Lorem</h6>
          <h4 class="my-2">Lorem</h4>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span>
        </div>
      </div>
      <div class="col-sm p-0 bg-dark review-container">
        <img src="assets/images/background7.jpg" alt="">
        <!-- <p>Lorem ipsum dolor si amet Lorem ipsum dolor si amet Lorem ipsum dolor si amet</p> -->
      </div>
    </div>
  </div>


  <!-- BLOG ARTICLES -->
  <div class="background-img pt-4 pb-5">
    <h3 class="text-center mb-4">About us</h3>

    <div class="container-fluid">
      <div class="row justify-content-around">
        <div class="col-sm-8">
          <div class="article-container shadow mb-5 mb-md-0">
            <img class="article-thumbnail" src="assets/images/about4.jpg" alt="product1">

            <div class="article-detail">
              <h4 class="article-title">[Article title]</h4>

              <p class="article-sumary">[Article sumary]</p>

              <div class="text-right">
                <input type="hidden" class="article-id" value="">
                <button type="button" class="btn btn-outline-dark text-center" onclick="goToArticle($(this))">Read
                  more</button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  


  <!-- INDEX SECTION END -->
  


  <?php
  include "src\\footer.php";
  ?>
  
  <!-- Custom scripts -->
  <script src="script/shared.js"></script>
  <script src="script/content-generator.js"></script>
  <script src="script/index.js"></script>
</body>

</html>
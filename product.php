<?php
include "src\\header.php";
?>

<body>

<?php
  $activePage = 2;
  include "src\\navigation.php";
?>





  <!-- PRODUCT DETAIL -->
<?php
  $prodId = $_COOKIE["selectedProdId"];
  $query = "SELECT * FROM `product` WHERE `Id` = " . $prodId;
  $results = mysqli_query($connection, $query);
  $product = mysqli_fetch_array($results);
?>

  <div class="container-fluid prod-container">
    <div class="row justify-content-center">
      <div class="col-sm-5 prod-img-container">
        <img id="p-image" class="prod-img shadow-sm" src="<?php echo $product["ImagePath"]; ?>" alt="">
      </div>
      <div class="col-sm-3 py-3 px-3 bg-dark shadow-lg prod-info-container">
        <h4 id="p-title"><?php echo $product["Name"]; ?></h4>
        <p id="p-description-1">...</p>
        <p id="p-description-2">...</p>

        <div class="row mt-3">
          <div class="col-3 my-auto">Size</div>
          <div class="col">
            <div class="dropdown">
              <button id="p-selected-size" class="btn btn-secondary dropdown-toggle" type="button"
                id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ...
              </button>
              <div id="p-sizes" class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                <!-- Size options -->
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-3 my-auto">Grind</div>
          <div class="col">
            <div class="dropup">
              <button id="p-selected-grind" class="btn btn-secondary dropdown-toggle" type="button"
                id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ...
              </button>
              <div id="p-grinds" class="dropdown-menu " aria-labelledby="dropdownMenuButton2">
                <!-- Grind options -->
              </div>
            </div>
          </div>
        </div>

        <div class="row my-3">
          <div class="col-3 my-auto">Price</div>
          <div class="col">
            <span id="p-price" class="prod-info-price">$<?php echo number_format($product["Price"], 2, '.', ''); ?></span>
          </div>
        </div>

        <div class="row my-3">
          <div class="col">
            <button id="cart-btn" type="button" class="btn btn-outline-light prod-add-to-cart" onclick="addToCart()">Add to cart</button>
          </div>
          <div class="col-4">
            <input id="buy-quantity" type="number" class="form-control prod-input-quantity" value="1" min="1" max="99" maxlength="2">
          </div>

          <input id="p-id" type="hidden" value="">
        </div>


      </div>
    </div>
  </div>







  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">We offers Australia best value online shopping experience for your fresh roasted
            premium coffee beans. It is also our mission to source the best green beans, make it possible
            for consumers to buy coffee online at super-competitive prices.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="shop.html">Shop</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2020</p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
            <li><a class="twitter" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a class="linkedin" href="https://au.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Custom scripts -->
  <script src="script/shared.js"></script>
  <script src="script/content-generator.js"></script>
  <script src="script/product.js"></script>
</body>

</html>
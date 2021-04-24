<?php
  if (!isset($_GET["productId"])) {
    header( "Location: shop.php" );
    return;
  }

  $activePage = 3;
  include "src\\header.php";
?>

<body>

<?php
  include "src\\navigation.php";
?>





  <!-- PRODUCT DETAIL -->
<?php
  $prodId = $_GET["productId"];
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
        <h2 id="p-title"><?php echo $product["Name"]; ?></h2>
        <p id="p-description"><?php echo $product["Description"] ?></p>

        <div class="row my-3">
          <div class="col-3 my-auto">Price</div>
          <div class="col">
            <span id="p-price" class="prod-info-price">$<?php echo number_format($product["Price"], 2, '.', ''); ?></span>
          </div>
        </div>

        <div class="row my-3">
          <div class="col-4">
            <input id="inputQuantity" type="number" class="form-control prod-input-quantity" value="1" min="1" max="99" maxlength="2">
          </div>

          <div class="col">
            <button id="cart-btn" type="button" class="btn btn-outline-light prod-add-to-cart" onclick="addToCart(<?php echo $prodId; ?>)">Add to cart</button>
          </div>
        </div>


      </div>
    </div>
  </div>










  <?php
  include "src\\footer.php";
  ?>

  <!-- Custom scripts -->
  <script src="script/shared.js"></script>
  <script src="script/product.js"></script>
</body>

</html>
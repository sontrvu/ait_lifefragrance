<?php
  $isLoggedIn = !empty($_SESSION["user_id"]);
?>



  <!-- NAV BAR -->
  <nav class="navbar navbar-expand-md navbar-dark sticky-top shadow nav-bar-theme">
    <div class="w-100 order-0 order-md-0">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="index.php" class="navbar-brand mr-auto">
        <div class="nav-logo">LIFE FRAGRANCE</div>
        <!-- <img class="nav-logo" height="30px" src="assets/images/logo.png" alt="logo"> -->
      </a>
    </div>
    <div class="navbar-collapse collapse dual-collapse2 mx-auto order-1 order-md-1">
      <ul class="navbar-nav justify-content-md-center mx-md-auto">
        <li class="nav-item">
          <a class="nav-link <?php if ($activePage == 1) echo "active" ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($activePage == 2 || $activePage == 3) echo "active" ?>" href="shop.php">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($activePage == 4) echo "active" ?>" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($activePage == 5) echo "active" ?>" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($activePage == 6) echo "active" ?>" href="search.php"><i class="fa fa-search" aria-hidden="true"></i></i></a>
        </li>
      </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-2 order-md-2 dual-collapse2">
      <ul class="navbar-nav ml-auto">

        <?php
        if ($isLoggedIn) {
        ?>

          <li class="nav-item mr-2 mb-2 mb-md-0">
            <div id="welcomeUserContainer" class="h-100 px-2" data-placement="bottom">
              <div class="d-table h-100">
                <p id="welcomeUser" class="d-table-cell align-middle text-center">
                  Hello, <span id="welcomeUserDetail"><?php echo $_SESSION["user_fullname"]; ?></span>
                </p>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <button type="button" id="cartBtn" class="btn btn-outline-light nav-button" data-placement="bottom">Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
          </li>

        <?php
        } else {
        ?>

          <li class="nav-item mr-2 mb-2 mb-md-0">
            <button type="button" id="loginBtn" class="btn btn-outline-light nav-button" data-toggle="modal" data-target="#loginModal">Login</button>
          </li>
          <li class="nav-item mr-2">
            <button type="button" id="registryBtn" class="btn btn-outline-light nav-button" data-toggle="modal" data-target="#registryModal">Register</button>
          </li>

        <?php
        }
        ?>
      </ul>

    </div>
  </nav>



  <!-- LOGIN MODAL -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content bg-dark">
        <div class="modal-body">

          <form id="loginForm">
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Enter username" minlength="4" required>
              <small id="inputEmailError" class="form-text text-danger"></small>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Enter password" minlength="4" required>
              <small id="inputPasswordError" class="form-text text-danger"></small>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="chbxRememberMe">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-light w-100 mt-3">Submit</button>
          </form>

        </div>
      </div>
    </div>
  </div>



  <!-- REGISTRY MODAL -->
  <div class="modal fade" id="registryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content bg-dark">
        <div class="modal-body">

          <form id="registryForm">
            <div class="form-group">
              <label>First Name</label>
              <input type="text" class="form-control" id="inputRegFName" name="inputRegFName" placeholder="Enter first name" minlength="2" required>
              <small id="inputRegFNameError" class="form-text text-danger"></small>
            </div>
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" class="form-control" id="inputRegLName" name="inputRegLName" placeholder="Enter last name" minlength="2" required>
              <small id="inputRegLNameError" class="form-text text-danger"></small>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" id="inputRegEmail" name="inputRegEmail" placeholder="Enter email" minlength="4" required>
              <small id="inputRegEmailError" class="form-text text-danger"></small>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" id="inputRegPassword" name="inputRegPassword" placeholder="Enter password" minlength="4" required>
              <small id="inputRegPasswordError" class="form-text text-danger"></small>
            </div>
            <div class="form-group">
              <label>Confirm Password</label>
              <input type="password" class="form-control" id="inputRegConfirmPassword" name="inputRegConfirmPassword" placeholder="Confirm password" minlength="4" required>
              <small id="inputRegConfirmPasswordError" class="form-text text-danger"></small>
            </div>
            <button type="submit" class="btn btn-light w-100 mt-4">Submit</button>
          </form>

        </div>
      </div>
    </div>
  </div>



  <!-- CART POP OVER -->
  <div id="cartContentWrapper" style="display: none">
    <div class="cart-table bg-dark">
      <table class="table table-striped table-dark m-0">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col" class="text-right">Price</th>
            <th scope="col" class="text-right">Quantity</th>
            <th scope="col" class="text-right">Amount</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="cart-table-body">
          <!-- ADDED ITEMS HERE -->
        </tbody>
      </table>
      <div class="w-100 p-3 text-center">
        <button type="button" class="btn btn-outline-light nav-button w-100 btn-checkout" data-toggle="modal" onclick="checkout()">Check out
        </button>
      </div>
    </div>
  </div>

  <div id="cartContentEmptyWrapper" style="display: none">
    <div class="cart-table-empty bg-dark">
      <table class="table table-dark m-0">
        <tbody>
          <tr>
            <td class="text-center" scope="col">
              <h5>Cart empty</h5>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <!-- ALERT MODAL -->
  <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-danger">
        <div class="modal-body text-center">
          <h3 id="alertModalMessage"></h3>
          <button type="button" class="btn btn-outline-light mt-2" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- INFO MODAL -->
  <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-dark">
        <div class="modal-body text-center">
          <h3 id="infoModalMessage"></h3>
          <button type="button" class="btn btn-secondary mt-2" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




  <script src="script/navigation.js"></script>
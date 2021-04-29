$(function() {
    setUpLogOutPopOver();
    setUpCartPopOver();

    $("#loginForm").submit(function(e) {
      e.preventDefault();
      login();
    });

    $("#registryForm").submit(function(e) {
      e.preventDefault();
      register();
    });
  });

  function setUpCartPopOver() {
    $('#cartBtn').popover({
      html: true,
      template: `
        <div class="popover cart-popover shadow" role="tooltip">
          <div class="arrow"></div>
            <h3 class="popover-header"></h3>
          <div class="popover-body"></div>
        </div>`,
      content: `<div id="cartPopoverContainer"></div>`
    });

    $('#cartBtn').on('shown.bs.popover', function() {
      reloadCart();
    });
  }
  
  function setUpLogOutPopOver() {
    $('#welcomeUserContainer').popover({
      html: true,
      content: `<a id="logoutBtn" class="text-dark font-weight-bold">Log out </a>`
    });

    $('#welcomeUserContainer').on('shown.bs.popover', function() {
      $('#logoutBtn').click(logout);
    });
  }
  


  /*
    Cart
  */
  function reloadCart() {
    $.ajax({
      url: "src/request-handlers/cart.php",
      type: "post",
      data: { action: "getItems" },
      success: function (response) {
        if (response.isSuccess) {
          populateCart(response.data);
        } else {
          alertMessage(response.message);
        }
      },
      error: function (request, status, error) {
        alertMessage(request.responseText);
      }
    });
  }

  function populateCart(cartList) {
    if (cartList.length == 0) {
      showEmptyCart()
      return;
    }

    let rows = "";
    let totalPrice = 0;

    for (const product of cartList) {
      if (!product)
        continue;

      totalPrice += product.amount
      rows += `
        <tr>
          <td>${product.name}</td>
          <td class="text-right">$${product.price}</td>
          <td class="text-right">${product.quantity}</td>
          <td class="text-right">$${product.amount}</td>
          <td><a href="#" class="text-danger" onclick="return removeFromCart('${product.id}')">X</a></td>
        </tr>
      `;
    }

    rows += `
      <tr>
        <td></td>
        <td></td>
        <td class="font-weight-bolder text-success text-right">Total</td>
        <td class="font-weight-bolder text-success text-right">$${totalPrice}</td>
        <td></td>
      </tr>
    `

    $(".cart-table-body").empty();
    $(".cart-table-body").html(rows);
    
    let content = $('#cartContentWrapper').html();
    $('#cartPopoverContainer').html(content);
  }

  function showEmptyCart() {
    let content = $('#cartContentEmptyWrapper').html();
    $('#cartPopoverContainer').html(content);
  }

  function removeFromCart(productId) {
    $.ajax({
      url: "src/request-handlers/cart.php",
      type: "post",
      data: { action: "removeItem", productId: productId },
      success: function (response) {
        if (!response.isSuccess) {
          alertMessage(response.message);
        }

        reloadCart();
      },
      error: function (request, status, error) {
        alertMessage(request.responseText);
      }
    });
  }
  
  function addToCartTable(productId, quantity, onSuccess) {
    $.ajax({
      url: "src/request-handlers/cart.php",
      type: "post",
      data: { action: "addItem", productId: productId, quantity: quantity },
      success: function (response) {
        if (response.isSuccess) {
          onSuccess();
          reloadCart();
        } else {
          alertMessage(response.message);
        }
      },
      error: function (request, status, error) {
        alertMessage(request.responseText);
      }
    });
  }
  
  function checkout() {  
    $.ajax({
      url: "src/request-handlers/cart.php",
      type: "post",
      data: { action: "checkout" },
      success: function (response) {
        if (response.isSuccess) {
          showMessage("Thank you for your purchase");
          reloadCart();
        } else {
          alertMessage(response.message);
        }
      },
      error: function (request, status, error) {
        alertMessage(request.responseText);
      }
    });
  }

  /*
    User action
  */
  function login() {
    let email = $('#inputEmail').val();
    let pwd = $('#inputPassword').val();

    $.ajax({
      url: "src/request-handlers/user.php",
      type: "post",
      data: { action: "login", email: email, password: pwd },
      success: function (response) {
        if (response.isSuccess) {
          location.reload();
        } else {
          alertMessage(response.message);
        }
      },
      error: function (request, status, error) {
        alertMessage(request.responseText);
      }
    });
  }
  
  function logout() {
    $.ajax({
      url: "src/request-handlers/user.php",
      type: "post",
      data: { action: "logout" },
      success: function (response) {
        if (response.isSuccess) {
          location.reload();
        } else {
          alertMessage(response.message);
        }
      },
      error: function (request, status, error) {
        alertMessage(request.responseText);
      }
    });
  }
  
  function register() {
    let fname = $('#inputRegFName').val();
    let lname = $('#inputRegLName').val();
    let email = $('#inputRegEmail').val();
    let pwd = $('#inputRegPassword').val();
    let cPwd = $('#inputRegConfirmPassword').val();

    if (pwd != cPwd) {
      alertMessage("Password does not match");
      return;
    }

    $.ajax({
      url: "src/request-handlers/user.php",
      type: "post",
      data: { action: "register", email: email, password: pwd, firstName: fname, lastName: lname },
      success: function (response) {
        if (response.isSuccess) {
          location.reload();
        } else {
          alertMessage(response.message);
        }
      },
      error: function (request, status, error) {
        alertMessage(request.responseText);
      }
    });
  }

  function alertMessage(message) {
    $("#alertModalMessage").html(message);
    $("#alertModal").modal('show');
  }

  function showMessage(message) {
    $("#infoModalMessage").html(message);
    $("#infoModal").modal('show');
  }
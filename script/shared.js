function addToCartTable(productId, quantity) {
  $.ajax({
    url: "src/request-handlers/cart.php",
    type: "post",
    data: { action: "addItem", productId: productId, quantity: quantity },
    success: function (response) {
      if (!response.isSuccess) {
        displayError(response.message);
      }

      reloadCart();
    },
    error: function (request, status, error) {
      displayError(request.responseText);
    }
  });
}

function checkout() {  
  $.ajax({
    url: "src/request-handlers/cart.php",
    type: "post",
    data: { action: "checkout" },
    success: function (response) {
      if (!response.isSuccess) {
        displayError(response.message);
      }

      reloadCart();
    },
    error: function (request, status, error) {
      displayError(request.responseText);
    }
  });
}







function isValidQuantity(str) {
  var n = Math.floor(Number(str));
  return n !== Infinity && String(n) === str && n > 0;
}

function setCookie(cname, cvalue) {
  document.cookie = cname + "=" + cvalue;
}

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');

  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];

    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }

    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }

  return "";
}

function removeCookie(cname) {
  document.cookie = cname + "=";
}
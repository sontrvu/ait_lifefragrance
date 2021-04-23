function addToCartTable(addedProductId, quantity) {
  // { prod1: 1, prod2: 5, prod3: 4 }

  let cartListObject = localStorage.getItem('cartList');
  let cartList = JSON.parse(cartListObject)

  if (!cartList) {
    cartList = {};
  }

  let quantityNum = parseInt(quantity);

  if (cartList.hasOwnProperty(addedProductId)) {
    let currentQty = parseInt(cartList[addedProductId])
    cartList[addedProductId] = currentQty + (quantityNum || 1);
  } else {
    cartList[addedProductId] = quantityNum || 1;
  }

  localStorage.setItem('cartList', JSON.stringify(cartList));
  reloadCart();
}

// function removeFromCart(prodId) {
//   let cartListObject = localStorage.getItem('cartList');
//   let cartList = JSON.parse(cartListObject)

//   if (!cartList || !cartList.hasOwnProperty(prodId)) { return false; }

//   delete cartList[prodId];
//   localStorage.setItem('cartList', JSON.stringify(cartList));
//   reloadCart();

//   return false;
// }

function checkout() {
  localStorage.removeItem('cartList');
  $('#cartBtn').popover('hide');
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
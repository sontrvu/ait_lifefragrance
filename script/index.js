

function addToCart(productId) {
  let quantity = $("#inputQuantity" + productId).val();
  if (!isValidQuantity(quantity)) {
    alertMessage("Invalid quantity!");
    return;
  }
  
  addToCartTable(productId, quantity, function() {
    let btn = $("#btnAddToCart" + productId);
    btn.addClass('btn-outline-success');
    btn.removeClass('btn-dark');
    btn.html("Added");
  });
}

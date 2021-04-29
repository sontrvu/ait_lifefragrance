
function addToCart(productId) {
  let quantity = $("#inputQuantity").val();
  if (!isValidQuantity(quantity)) {
    alertMessage("Invalid quantity!");
    return;
  }

  addToCartTable(productId, quantity, function() {
    $("#cart-btn").addClass('btn-success');
    $("#cart-btn").removeClass('btn-outline-light');
    $("#cart-btn").html("Added");
  });
}
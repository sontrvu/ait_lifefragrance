
function addToCart(productId) {
  let quantity = $("#inputQuantity").val();
  if (!isValidQuantity(quantity)) {
    alert("Invalid quantity!");
    return;
  }

  $("#cart-btn").addClass('btn-success');
  $("#cart-btn").removeClass('btn-outline-light');
  $("#cart-btn").html("Added");

  addToCartTable(productId, quantity);
}
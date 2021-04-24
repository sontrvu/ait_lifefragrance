
function addToCart(productId) {
  let quantity = $("#inputQuantity" + productId).val();
  if (!isValidQuantity(quantity)) {
    alert("Invalid quantity!");
    return;
  }
 
  let btn = $("#btnAddToCart" + productId);
  btn.addClass('btn-outline-success');
  btn.removeClass('btn-dark');
  btn.html("Added");

  addToCartTable(productId, quantity);
}
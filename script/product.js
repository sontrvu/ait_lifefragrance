$(function() {
  // let prodId = getCookie("selectedProdId");
  // let product = coffeeProds.find( ({ id }) => id === prodId );
  
  // if (!product) { return; }

  // $("#p-id").val(product.id);
  // $("#p-image").attr("src", product.image);
  // $("#p-title").html(product.name)
  // $("#p-description-1").html(product.description1)
  // $("#p-description-2").html(product.description2)
  // $("#p-price").html(`$${product.price.toFixed(2)}`)
    
  // let dropdownSizes = "";
  // let dropdownGrinds = "";

  // let sizeOptions = product.sizeOptions.map(function(value, index, array) {
  //   let displayValue = `${value}g`; // Show gram unit

  //   if (value >= 1000) {
  //     displayValue = `${value / 1000}kg`; // Show kg unit
  //   }

  //   return displayValue;
  // });

  sizeOptions.forEach(function(value, index, array) {
    dropdownSizes += `<button class="dropdown-item" onclick="selectSize($(this))" selectedIdx="${index}">${value}</button>`;
  });

  product.grindOptions.forEach(function(value, index, array) {
    dropdownGrinds += `<button class="dropdown-item" onclick="selectGrind($(this))" selectedIdx="${index}">${value}</button>`;
  });

  $("#p-selected-size").html(sizeOptions[product.prefSize || 0]);
  $("#p-sizes").append(dropdownSizes);

  $("#p-selected-grind").html(product.grindOptions[product.prefGrind || 0]);
  $("#p-grinds").append(dropdownGrinds);
});

function selectSize(element) {
  let value = element.html();
  let idx = element.attr("selectedIdx");

  $("#p-selected-size").html(value);
  $("#p-selected-size").attr("selectedIdx", idx);
}

function selectGrind(element) {
  let value = element.html();
  let idx = element.attr("selectedIdx");

  $("#p-selected-grind").html(value);
  $("#p-selected-grind").attr("selectedIdx", idx);
}

function addToCart() {
  $("#cart-btn").addClass('btn-success');
  $("#cart-btn").removeClass('btn-outline-light');
  $("#cart-btn").html("Added");

  let qty = $("#buy-quantity").val();
  let prodId = $("#p-id").val();
  // let sizeIdx = $("#p-selected-grind").attr("selectedIdx");
  addToCartTable(prodId, qty);
}
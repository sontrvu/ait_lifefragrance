$(function() {
  // $(".item-container").each(function(i, el ) {
  //   setUpProduct($(this), i);
  // });
});

function setUpProduct(container, idx) {
  let prod = coffeeProds[idx];

  container.find("input[type=hidden].product-id").val(prod.id);
  container.find("h4.product-title").html(prod.name);
  container.find("img.product-thumbnail").attr("src", prod.image);
  container.find("span.product-price").html(`$${prod.price.toFixed(2)}`);
  
  let dropdownSizes = "";
  let dropdownGrinds = "";

  let sizeOptions = prod.sizeOptions.map(function(value, index, array) {
    let displayValue = `${value}g`; // Show gram unit

    if (value >= 1000) {
      displayValue = `${value / 1000}kg`; // Show kg unit
    }

    return displayValue;
  });

  sizeOptions.forEach(function(value, index, array) {
    dropdownSizes += `<button class="dropdown-item" onclick="selectSize($(this))">${value}</button>`;
  });

  prod.grindOptions.forEach(function(value, index, array) {
    dropdownGrinds += `<button class="dropdown-item" onclick="selectGrind($(this))">${value}</button>`;
  });

  container.find("button.product-selected-size").html(sizeOptions[prod.prefSize || 0]);
  container.find("div.product-sizes").append(dropdownSizes);

  container.find("button.product-selected-grind").html(prod.grindOptions[prod.prefGrind || 0]);
  container.find("div.product-grinds").append(dropdownGrinds);
}

function selectSize(element) {
  let value = element.html();
  element.closest("div.dropdown").find("button.product-selected-size").html(value);
}

function selectGrind(element) {
  let value = element.html();
  element.closest("div.dropup").find("button.product-selected-grind").html(value);
}

function goToProduct(element) {
  let prodId = element.siblings("input[type=hidden].product-id").val();
  setCookie("selectedProdId", prodId);
}

function addToCart(btn) {
  btn.addClass('btn-outline-success');
  btn.removeClass('btn-dark');
  btn.html("Added");
  
  let prodId = btn.siblings("input[type=hidden].product-id").val();
  addToCartTable(prodId);
}
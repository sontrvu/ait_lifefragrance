

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

// $(function() {
//   $(".item-container").each(function(i, el ) {
//     setUpProduct($(this), i);
//   });

//   $(".article-container").each(function (i, el) {
//     setUpArticles($(this), i);
//   });
// });

// function setUpProduct(container, idx) {
//   let prod = coffeeProds[idx];

//   container.find("input[type=hidden].item-id").val(prod.id);
//   container.find("h4.item-title").html(prod.name);
//   container.find("img.item-image").attr("src", prod.image);
//   container.find("span.item-price").html(`$${prod.price.toFixed(2)}`);
  
//   let dropdownSizes = ""
//   let dropdownGrinds = ""

//   let sizeOptions = prod.sizeOptions.map(function(value, index, array) {
//     let displayValue = `${value}g`; // Show gram unit

//     if (value >= 1000) {
//       displayValue = `${value / 1000}kg`; // Show kg unit
//     }

//     return displayValue;
//   });

//   sizeOptions.forEach(function(value, index, array) {
//     dropdownSizes += `<button class="dropdown-item" onclick="selectSize($(this))">${value}</button>`
//   });

//   prod.grindOptions.forEach(function(value, index, array) {
//     dropdownGrinds += `<button class="dropdown-item" onclick="selectGrind($(this))">${value}</button>`
//   });

//   container.find("button.product-selected-size").html(sizeOptions[prod.prefSize || 0])
//   container.find("div.product-sizes").append(dropdownSizes)

//   container.find("button.product-selected-grind").html(prod.grindOptions[prod.prefGrind || 0])
//   container.find("div.product-grinds").append(dropdownGrinds)
// }

// function selectSize(element) {
//   let value = element.html();
//   element.closest("div.dropdown").find("button.product-selected-size").html(value);
// }

// function selectGrind(element) {
//   let value = element.html();
//   element.closest("div.dropup").find("button.product-selected-grind").html(value);
// }

// function setUpArticles(container, idx) {
//   // let article = blogArticles.filter(a => !a.isFeatured)[idx];
//   let article = blogArticles[idx];

//   container.find("input[type=hidden].article-id").val(article.id);
//   container.find("img.article-thumbnail").attr("src", article.thumbnail);
//   container.find("h4.article-title").html(article.title);
//   container.find("p.article-sumary").html(article.sumary);
// }

// function goToArticle(element) {
//   let artId = element.siblings("input[type=hidden].article-id").val();
//   setCookie("selectedArticleId", artId);
//   window.location.href = 'article.html';
// }
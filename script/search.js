$(function() {
  $("#inputSearch").on('keyup', function (e) {
    if (e.key === 'Enter' || e.keyCode === 13) {
      searchItem();
    }
  });
});

function searchItem() {
  let keyword = $("#inputSearch").val();
  
  // Must enter at least 3 characters
  if (keyword.length < 3)
    return;

  $.ajax({
    url: "src/request-handlers/item.php",
    type: "post",
    data: { action: "searchItems", keyword: keyword },
    success: function (response) {
      if (response.isSuccess) {
        populateSearchResults(response.data);
      }
    }
  });
}

function populateSearchResults(products) {
  let resultContainer = $('#search-result-container');
  resultContainer.empty();

  if (products.length == 0) {
    // Search not found
    let text = '<div class="col-sm-12"><h3>No Results</h3></div>';
    resultContainer.html(text);
    return;
  }

  let template = $('#item-template').html();
  for (const product of products) {
    // Clone template HTML
    let item = $(template).clone();
    
    // Populate data
    $(item).find('.item-link').attr("href","product.php?productId=" + product.id);
    $(item).find('.item-image').attr("src", product.imagePath);
    $(item).find('.item-title').html(product.name);
    $(item).find('.item-description').html(product.description);
    $(item).find('.item-price').html("$" + product.price);

    resultContainer.append(item);
  }
}
$(function() {
  let artId = getCookie("selectedArticleId");
  let article = blogArticles.find( ({ id }) => id === artId );

  if (!article) { return; }

  $("#a-title").html(article.title);
  $("#a-body-container").html(article.htmlContent);
});
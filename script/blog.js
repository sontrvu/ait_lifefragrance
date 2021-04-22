$(function () {
  setUpFeatureArticle();

  $(".article-container").each(function (i, el) {
    setUpArticles($(this), i);
  });
});

function setUpArticles(container, idx) {
  let article = blogArticles.filter(a => !a.isFeatured)[idx];

  container.find("input[type=hidden].article-id").val(article.id);
  container.find("img.article-thumbnail").attr("src", article.thumbnail);
  container.find("h4.article-title").html(article.title);
  container.find("p.article-sumary").html(article.sumary);
}

function setUpFeatureArticle() {
  let article = blogArticles.find(a => a.isFeatured);

  let container = $(".feature-article-container")
  container.find("input[type=hidden].article-id").val(article.id);
  container.find("img.featured-article-thumbnail").attr("src", article.thumbnail);
  container.find("h3.featured-article-title").html(article.title);
  container.find("p.featured-article-sumary").html(article.sumary);
}

function goToArticle(element) {
  let artId = element.siblings("input[type=hidden].article-id").val();
  setCookie("selectedArticleId", artId);
  window.location.href = 'article.html';
}
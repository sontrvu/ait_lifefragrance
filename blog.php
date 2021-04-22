<!doctype html>
<html lang="en">

<head>
  <title>Life Fragrance</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Font Awesome icon -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style/shared.css">
  <link rel="stylesheet" href="style/blog.css">
</head>

<body>

<?php
  $activePage = 3;
  include "src\\navigation.php";
?>




  <div class="px-5 my-5">
    <div class="container-fluid mt-5">
      <div class="row  justify-content-center">
        <div class="col-sm-10">
          <h3>Welcome to our blog</h3>
          <div class="text-center mt-5">
            <p class="text-capitalize display-4">A guide to Lorem ipsum</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-5 feature-article-container">
        <div class="col-sm-5">
          <div class="h-100 p-3 rounded shadow">
            <h3 class="featured-article-title">[Article title]</h3>
            <hr class="mb-4 bg-light">
            <p class="featured-article-sumary">[Article sumary]</p>
            <div class="text-right">
              <input type="hidden" class="article-id" value="">
              <button type="button" class="btn btn-outline-light text-center" onclick="goToArticle($(this))">Read more</button>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <img class="shadow rounded featured-article-thumbnail" src="assets/images/loading.gif" alt="product1">
        </div>
      </div>

      <div class="row justify-content-center mt-5">
        <div class="col-sm-5">
          <div class="article-container shadow">
            <img class="article-thumbnail" src="assets/images/loading.gif" alt="product1">

            <div class="article-detail">
              <h4 class="article-title">Test Article A</h4>

              <p class="article-sumary">[Article sumary]</p>

              <div class="text-right">
                <input type="hidden" class="article-id" value="">
                <button type="button" class="btn btn-outline-dark text-center" onclick="goToArticle($(this))">Read more</button>
              </div>

            </div>
          </div>
        </div>

        <div class="col-sm-5">
          <div class="article-container shadow">
            <img class="article-thumbnail" src="assets/images/loading.gif" alt="product1">

            <div class="article-detail">
              <h4 class="article-title">Testr Article B</h4>

              <p class="article-sumary">[Article sumary]</p>

              <div class="text-right">
                <input type="hidden" class="article-id" value="">
                <button type="button" class="btn btn-outline-dark text-center" onclick="goToArticle($(this))">Read more</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-sm-5">
          <div class="article-container shadow">
            <img class="article-thumbnail" src="assets/images/loading.gif" alt="product1">

            <div class="article-detail">
              <h4 class="article-title">Testr Article A</h4>

              <p class="article-sumary">[Article sumary]</p>

              <div class="text-right">
                <input type="hidden" class="article-id" value="">
                <button type="button" class="btn btn-outline-dark text-center" onclick="goToArticle($(this))">Read more</button>
              </div>

            </div>
          </div>
        </div>

        <div class="col-sm-5">
          <div class="article-container shadow">
            <img class="article-thumbnail" src="assets/images/loading.gif" alt="product1">

            <div class="article-detail">
              <h4 class="article-title">Testr Article B</h4>

              <p class="article-sumary">[Article sumary]</p>

              <div class="text-right">
                <input type="hidden" class="article-id" value="">
                <button type="button" class="btn btn-outline-dark text-center" onclick="goToArticle($(this))">Read more</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>














  <?php
  include "src\\footer.php";
  ?>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <!-- Custom scripts -->
  <script src="script/shared.js"></script>
  <script src="script/content-generator.js"></script>
  <script src="script/blog.js"></script>
</body>

</html>
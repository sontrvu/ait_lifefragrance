<?php
  $activePage = 5;
  include "src\\header.php";
?>

<body>

<?php
  include "src\\navigation.php";
?>


  <div class="px-5 my-5">
    <div class="container-fluid mt-5">


      <div class="row justify-content-center mt-5">
        <div class="col-sm-5">
          <form>
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Your name here" required>
            </div>
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Your email" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label>Phone number</label>
              <input type="tel" class="form-control" placeholder="Your phone number" minlength="6">
            </div>
            <div class="form-group">
              <label>Your message</label>
              <textarea class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-light mt-2">Submit</button>
          </form>
        </div>


        <div class="col-sm-5 text-right">
          <h4>Have a question? Let us know</h4>
          <div class="mt-3 mb-4">
            <div>Email: lorem@ipsum.dolo.si</div>
            <div>Phone: 0490004440</div>
          </div>

          <h4>Find us here</h4>
          <iframe
            class="rounded shadow map-container"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.797500768823!2d144.95214381497266!3d-37.818211879751516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4e17ccc9b3%3A0xec77cc2f289db7e6!2s120%20Spencer%20St%2C%20Melbourne%20VIC%203000!5e0!3m2!1sen!2sau!4v1600081111890!5m2!1sen!2sau"
            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
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
</body>

</html>
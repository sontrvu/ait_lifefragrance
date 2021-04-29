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
          <form id="contactForm">
            <div class="form-group">
              <label>Name</label>
              <input id="inputFullName" type="text" class="form-control" placeholder="Enter your name" value='<?php echo isset($_SESSION["user_fullname"]) ? $_SESSION["user_fullname"] : "" ?>' required>
            </div>
            <div class="form-group">
              <label>Email address</label>
              <input id="inputEmail" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter your email" value='<?php echo isset($_SESSION["user_email"]) ? $_SESSION["user_email"] : "" ?>' required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label>Phone number</label>
              <input id="inputPhone" type="tel" class="form-control" placeholder="Enter your phone" minlength="6">
            </div>
            <div class="form-group">
              <label>Your message</label>
              <textarea id="inputMessage" class="form-control" rows="4" placeholder="Enter your message" required></textarea>
            </div>
            <button type="submit" class="btn btn-light mt-2 submit-btn">Submit</button>
          </form>
        </div>


        <div class="col-sm-5 text-right">
          <h4>Have a question, a feedback,</h4>
          <h4>or simply just want to say "hi"?</h4>
          <div class="my-3">
            <div>Email: lorem@ipsum.dolo.si</div>
            <div>Phone: 0490004440</div>
          </div>

          <h4>Find us here</h4>
          <iframe
            class="rounded shadow map-container"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.797500768823!2d144.95214381497266!3d-37.818211879751516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4e17ccc9b3%3A0xec77cc2f289db7e6!2s120%20Spencer%20St%2C%20Melbourne%20VIC%203000!5e0!3m2!1sen!2sau!4v1600081111890!5m2!1sen!2sau"
            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>

          <div class="mt-5">
            <h4>Follow us on our social media</h4>
            <ul class="social-icons mt-3">
              <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="https://au.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="row justify-content-center mt-5">
        <div class="col-sm-10">
        </div>
      </div>

    </div>
  </div>













  <?php
  include "src\\footer.php";
  ?>

  <!-- Custom scripts -->
  <script src="script/shared.js"></script>
  <script src="script/contact.js"></script>
</body>

</html>
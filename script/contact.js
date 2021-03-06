
$(function() {
  $("#contactForm").submit(function(e) {
    e.preventDefault();
    sendFeedback();
  });
});

function sendFeedback() {
  let fullName = $("#inputFullName").val();
  let email = $("#inputEmail").val();
  let phone = $("#inputPhone").val() || "";
  let message = $("#inputMessage").val();

  $.ajax({
    url: "src/request-handlers/contact.php",
    type: "post",
    data: { action: "sendFeedback", fullName: fullName, email: email, phone: phone, message: message },
    success: function (response) {
      if (response.isSuccess) {
        // Clear message textarea
        $("#inputMessage").val("");
        showMessage('Thank you for your message/feedback');
      } else {
        alertMessage(response.message);
      }
    },
    error: function (request, status, error) {
      alertMessage(request.responseText);
    }
  });
}

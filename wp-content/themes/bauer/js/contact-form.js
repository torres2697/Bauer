jQuery(document).ready(function ($) {
  var form = $(".send_mail"),
    action = form.attr("action");

  $(document).on("submit", ".send_mail", function (e) {
    var formData = {
      mail_name: $("#mail_name").prop("value"),
      mail_phone: $("#mail_phone").prop("value"),
    };
    $.ajax({
      type: "POST",
      url: action,
      data: formData,
      error: function (request, txtstatus, errorThrown) {
        console.log(request);
        console.log(txtstatus);
        console.log(errorThrown);
      },
      success: function () {
        console.log("Mail Status: OK");
      },
    });

    e.preventDefault();
  });
});

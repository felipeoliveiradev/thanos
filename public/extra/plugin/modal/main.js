$(document).ready(function() {
  $("#myBtn").on("click", function() {
    $("#modalContainer").css("display", "flex");
  });

  $(".closeOpenCart").on("click", function() {
    $("#modalOpenCart").hide();
  });
  $(".closeErroCart").on("click", function() {
    $("#modalErroCart").hide();
  });
});
function addCartItem(a) {
  $.ajax({
    type: "GET",
    url: "http://localhost/wordpress_mirage/?add-to-cart=" + a + "&quantity=1",
    success: function(html) {
      $("#modalOpenCart").show();
      $(".prancheta_icon").load(location.href + " .prancheta_icon");
    },
    error: function() {
      $("#modalErroCart").show();
    }
  });
}

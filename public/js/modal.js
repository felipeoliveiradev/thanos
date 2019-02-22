$(document).ready(function() {
  $("#myBtn").on("click", function() {
    $("#modalContainer").show();
    $("#modalContainer").css("display", "flex");
  });

  $(".closeOpenCart").on("click", function() {
    $("#modalOpenCart").hide();
  });
  $(".closeErroCart").on("click", function() {
    $("#modalErroCart").hide();
  });
  $(".closemodalInfoCart").on("click", function() {
    $("#modalInfoCart").hide();
  });
});

//toggle mobile menu
$("#navbar > a").click(function () {
  $("#navbar ul").toggleClass("active");
});

$("#navbar > a").on("click", function () {
  $(this).html(
    $("#navbar ul").hasClass("active")
      ? '<img src="assets/img/svg/exit.svg" alt="" />'
      : '<img src="assets/img/svg/menu.svg" alt="" />'
  );
});

//window resize event listener
$(window).resize(function () {
  $("#navbar ul").removeClass("active");
  $("#navbar > a").html('<img src="assets/img/svg/menu.svg" alt="" />');
});

$(document).ready(function () {
  $("#navbar > a").html('<img src="assets/img/svg/menu.svg" alt="" />');
});

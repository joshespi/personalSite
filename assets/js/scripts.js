//toggle mobile menu
$("#navbar > a").click(function () {
  $("#navbar ul").toggleClass("active");
});

//window resize event listener
$(window).resize(function () {
  $("#navbar ul").removeClass("active");
});

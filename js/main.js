/*____ FAQ's ____*/
$(document).on("click", ".faqMin > h5", function () {
  $(".faqMin")
    .not($(this).parent().toggleClass("active"))
    .removeClass("active");
  $(".faqMin > .text")
    .not($(this).parent().children(".text").slideToggle())
    .slideUp();
});
// cusine-carousel
$(".slide-carousel").owlCarousel({
  autoplay: true,
  nav: false,
  navText: [
    '<i class="fa-solid fa-chevron-left"></i>',
    '<i class="fa-solid fa-chevron-right"></i>',
  ],
  // navText: [ 'prev', 'next' ],
  dots: true,
  loop: true,
  autoWidth: false,
  autoHeight: true,
  smartSpeed: 1000,
  autoplayTimeout: 10000,
  margin: 20,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      autoplay: true,
      autoHeight: true,
    },
    600: {
      items: 1,
    },
    991: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});
// cusine-carousel
$(".changer-carousel").owlCarousel({
  autoplay: true,
  nav: false,
  navText: [
    '<i class="fa-solid fa-chevron-left"></i>',
    '<i class="fa-solid fa-chevron-right"></i>',
  ],
  // navText: [ 'prev', 'next' ],
  dots: true,
  loop: true,
  autoWidth: false,
  autoHeight: true,
  smartSpeed: 1000,
  autoplayTimeout: 10000,
  margin: 20,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      autoplay: true,
      autoHeight: true,
    },
    600: {
      items: 1,
    },
    991: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

// _____popup_____*/
$(document).on("click", ".popBtn", function () {
  var popUp = $(this).data("popup");
  $("body").addClass("flow");
  $(".popup[data-popup= " + popUp + "]").fadeIn();
});
$(document).on("click", ".crosBtn", function () {
  $(".popup").fadeOut();
  $("body").removeClass("flow");
});
/*____ FAQ's ____*/
$(document).on("click", ".faqMin > .order_history", function () {
  $(".faqMin")
    .not($(this).parent().toggleClass("active"))
    .removeClass("active");
  $(".faqMin > .text")
    .not($(this).parent().children(".text").slideToggle())
    .slideUp();
});
// / radio buttons
$(document).on("change", ".select_radio input[type='radio']", function () {
  let value = $(this).val();
  let show_section = $(this).parents(".select_radio").next();
  if ($(this).is(":checked")) {
    if (value == "yes") {
      show_section.removeClass("hidden");
    } else {
      show_section.addClass("hidden");
    }
  }
});
// _____popup_____*/
$(document).on("click", ".popBtn", function () {
  var popUp = $(this).data("popup");
  $("body").addClass("flow");
  $(".sec_cart[data-popup= " + popUp + "]").fadeIn();
});
$(document).on("click", ".crossit", function () {
  $(".sec_cart").fadeOut();
  $("body").removeClass("flow");
});

/*========== Toggle ==========*/
$(document).on("click", ".toggle", function () {
  $(".toggle").toggleClass("active");
  $("body").toggleClass("flow");
  $("[nav]").toggleClass("active");
  $(".upperlay").toggleClass("active");
  // $("nav > ul > li > .sub").slideUp();
});

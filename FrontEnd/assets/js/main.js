jQuery(document).ready(function ($) {
  var nav_offset_top = $("header").height() + 120;

  function navbarFixed() {
    if ($(".mt-header").length) {
      $(window).scroll(function () {
        var scroll = $(window).scrollTop(),
          slowscroll = scroll / 2;
        if (scroll >= nav_offset_top) {
          $(".mt-header").addClass("header_fixed");
        } else {
          $(".mt-header").removeClass("header_fixed");
          //   $('.billboard').css({
          //  transform: "translateY(0)"
          //  });
        }
      });
    }
  }

  navbarFixed();
  $(document).on("click", ".ham-menu", function () {
    $(".mt-header__wrapper").toggleClass("active");
    $(".ham-menu").toggleClass("active");
    $(".mt-header__menu ul").slideToggle();
  });

  $(".ph-banner__slider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    arrows: false,
    autoplay: true,
    focusOnSelect: false,
    cssEase: "linear",
  });
});

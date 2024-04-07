jQuery(document).ready(function ($) {
  var nav_offset_top = $("header").height() - window.innerHeight * 0.95; // Adjusted to 10vh scroll

  function navbarFixed() {
    if ($(".ph-header").length) {
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= nav_offset_top) {
          $(".ph-header").addClass("header_fixed");
        } else {
          $(".ph-header").removeClass("header_fixed");
        }
      });
    }
  }

  navbarFixed();

  // Add hover functionality to toggle "header_fixed" class
  $(".ph-header").hover(
    function () {
      $(this).toggleClass("header_fixed");
    },
    function () {
      $(this).toggleClass("header_fixed");
    }
  );
  $(document).on("click", ".ph-user-trigger", function () {
    $(".ph-login").toggleClass("ph-active");
    // $(".ham-menu").toggleClass("active");
    // $(".ph-header__menu ul").slideToggle();
  });

  // nice select initilization
  $("select.nice-select").niceSelect();

  $(".ph-banner__slider").slick({
    dots: false,
    infinite: false,
    speed: 500,
    fade: true,
    arrows: false,
    autoplay: false,
    focusOnSelect: false,
    cssEase: "linear",
  });
});

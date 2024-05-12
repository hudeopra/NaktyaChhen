jQuery(document).ready(function ($) {
  // var nav_offset_top = $("header").height() - window.innerHeight * 0.95; // Adjusted to 10vh scroll

  // function navbarFixed() {
  //   if ($(".ph-header").length) {
  //     $(window).scroll(function () {
  //       var scroll = $(window).scrollTop();
  //       if (scroll >= nav_offset_top) {
  //         $(".ph-header").addClass("header_fixed");
  //         $(".ph-login").removeClass("ph-active");
  //       } else {
  //         $(".ph-header").removeClass("header_fixed");
  //         $(".ph-login").removeClass("ph-active");
  //       }
  //     });
  //   }
  // }

  // navbarFixed();

  // Toggle meny form visibility
  $(document).on("click", ".ph-header__open--trigger", function () {
    $(".ph-header").toggleClass("header_fixed");
    $(".ph-login").removeClass("ph-active");
  });

  // Toggle login form visibility
  $(document).on("click", ".ph-user-trigger", function () {
    $(".ph-login").toggleClass("ph-active");
  });

  // Initialize nice select
  $("select.nice-select").niceSelect();

  // Initialize slick slider for banner
  $(".ph-banner__slider").slick({
    dots: false,
    infinite: false,
    speed: 500,
    fade: true,
    arrows: false,
    autoplay: true,
    focusOnSelect: false,
    cssEase: "linear",
  });
  // Initialize slick slider for blog
  $(".ph-blog__slider").slick({
    dots: true,
    infinite: false,
    speed: 500,
    fade: false,
    arrows: false,
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 431,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 381,
        settings: {
          slidesToShow: 2,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });
  $(".slider-for").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    asNavFor: ".slider-nav",
  });
  $(".slider-nav").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    asNavFor: ".slider-for",
    focusOnSelect: true,
  });
});

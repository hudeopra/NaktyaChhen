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

  navbarFixed();

  // Toggle meny form visibility
  $(document).on("click", ".ph-header__open--trigger", function () {
    $(".ph-header").toggleClass("header_fixed");
    $(".ph-login").removeClass("ph-active");
  });

  // Toggle login form visibility
  $(document).on("click", ".ph-user-trigger", function () {
    $(".ph-login").toggleClass("ph-active");
  });
});

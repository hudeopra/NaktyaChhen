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
    autoplay: false,
    focusOnSelect: false,
    cssEase: "linear",
  });

  // Function to handle form submission
  function handleSubmit(event) {
    event.preventDefault(); // Prevent default form submission
    var form = event.target;
    var formData = new FormData(form);

    // Perform AJAX request
    fetch(form.action, {
      method: form.method,
      body: formData,
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error("Failed to submit form");
        }
        // Assuming response is OK, handle success here
        console.log("Form submitted successfully");
      })
      .catch((error) => {
        console.error("Error submitting form:", error.message);
        // You can add additional error handling here
      });
  }

  // Attach event listener for login form
  var loginForm = document.querySelector(".ph-login form");
  if (loginForm) {
    loginForm.addEventListener("submit", handleSubmit);
  }

  // Attach event listener for newsletter form
  var newsletterForm = document.querySelector(".ph-newsletter__form form");
  if (newsletterForm) {
    newsletterForm.addEventListener("submit", handleSubmit);
  }

  // Attach event listeners to specific forms
  var contactForm = document.getElementById("contactForm");
  if (contactForm) {
    contactForm.addEventListener("submit", handleSubmit);
  }

  var bookingForm = document.getElementById("bookingForm");
  if (bookingForm) {
    bookingForm.addEventListener("submit", handleSubmit);
  }

  // Attach event listener for all other forms
  $("form").not("#contactForm, #bookingForm").on("submit", handleSubmit);
});

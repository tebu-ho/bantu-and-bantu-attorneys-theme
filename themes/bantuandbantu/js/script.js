(function($) {
//Adding btn class and button name to contact form
  $(document).ready(function () {
    $(".wpcf7-submit").addClass('btn btn--green');
    $(".wpcf7-submit").attr('value', 'Send Message');
  });
  ///
  // Slider
  ///
  // Manual Slider - data-autoplay is set to "false"
  $(document).on("click", ".slider__dot", function(e) {
    // Creating variable for dots better and faster workflow.
    var currentSlide = $(document).find(".slide--active"),
        arrayOfSlides = $(document).find(".slider__slide");
    // User clicked on one of the slider dots.
    if ($(this).hasClass("slider__dot--active")) {
      // If it's currently active dot, nothing will happen.
      return false;
    } else {
      // Otherwise, the class slider__dot--active will be removed and added to clicked dot.
      $(document).find(".slider__dot--active").removeClass("slider__dot--active");
      $(this).addClass("slider__dot--active");
      // Creating variable for dots better and faster workflow.
      var dotNumber = $(this).prevAll().length;
      // Next, we will take the position of the dot, cycle through all the slides and show slide with the same number.
      $(currentSlide).removeClass("slide--active").addClass("slide--hidden");
      $(arrayOfSlides[dotNumber]).addClass("slide--active").removeClass("slide--hidden");
    }
  });
  // Automatic Slider - data-autoplay is set to "false"
  if ($(".slider__container").data("autoplay")) {
    console.log("Autoplay is on");
    // If current slide is not the last one
    var timeout = $(document).find(".slider__container").data("slider-timeout");
    setInterval(function() {
      var currentSlide = $(document).find(".slide--active"),
          nextSlide = currentSlide.next(),
          arrayOfSlides = $(document).find(".slider__slide"),
          numOfSlides = $(document).find(".slider__slide").length,
          lastSlide = numOfSlides - 1,
          currentDot = $(document).find(".slider__dot--active"),
          nextDot = currentDot.next(),
          arrayOfDots = $(document).find(".slider__dot");
      if (currentSlide.index() <= lastSlide) {
        currentSlide.removeClass("slide--active").addClass("slide--hidden");
        nextSlide.addClass("slide--active").removeClass("slide--hidden");
        currentDot.removeClass("slider__dot--active");
        nextDot.addClass("slider__dot--active");
        if (currentSlide.index() == lastSlide) {
          $(document).find(".slider__slide").last().addClass("slide--hidden").removeClass("slide--active");
          $(document).find(".slider__slide").first().addClass("slide--active").removeClass("slide--hidden");
          $(document).find(".slider__dot").last().removeClass("slider__dot--active");
          $(document).find(".slider__dot").first().addClass("slider__dot--active");
        }
      }
    }, timeout);
  } else {
    console.log("Autoplay is off");
  }
  ///
  // Gallery Overlay
  ///
  $(document).on("click", ".gallery__overlay", function(e) {
    e.preventDefault();
    e.stopPropagation();
    var overlayContainer = $(document).find(".js-preview__overlay"),
        snapshot = $(overlayContainer).find(".js-snapshot");
    overlayContainer.fadeIn(250);
    snapshot.attr({
      "src": $(this).find("img").attr("src"),
      "alt": $(this).find("img").attr("alt")
    });
    $(document).on("click", ".js-preview__overlay", function() {
      $(this).fadeOut(250);
    });
  });
  ///
  // Menu mobile navigation
  ///
  $(document).on("click", ".js-icon--navigation", function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(".js-nav__links").toggleClass("nav--show");
  });
  ///
  // Lazy loading
  ///
  $(".lazy").lazyload({
    effect : "fadeIn"
  });
  ///
  // Ajax for form
  ///
  $(document).on("submit", "#contact-form", function(e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "contact.php",
      data: $("#contact-form").serialize(),
      complete: function() {
        alert("Your message has been sent. Thank you!");
        $("#contact-form")[0].reset();
      }
    });
  });
  $(document).ready(function(e) {
    $("input").hasClass("wpcf7-submit").addClass("btn btn--green");
    console.log('class removed');
  });
  console.log("Rest");
})(jQuery);

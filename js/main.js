$(document).ready(function () {
  // Header Scroll
  var heightScroll = 0;
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
      $("#header").addClass("fixed");
    } else {
      $("#header").removeClass("fixed");
    }
  });

  $('section[data-type="background"]').each(function () {
    var $bgobj = $(this); // assigning the object

    $(window).scroll(function () {
      // Scroll the background at var speed
      // the yPos is a negative value because we're scrolling it UP!
      var yPos = -($(window).scrollTop() / $bgobj.data("speed")) * 2 + 10;
      console.log(yPos);
      // Put together our final background position
      var coords = "0 " + yPos + "vh";
      if (yPos > -150) {
        // Move the background
        $bgobj.css({ backgroundPosition: coords });
      }
    }); // window scroll Ends
  });

  // Fancybox
  $(".work-box").fancybox();

  // Flexslider
  $(".flexslider").flexslider({
    animation: "fade",
    directionNav: false,
  });

  // Page Scroll
  var sections = $("section");
  nav = $('nav[role="navigation"]');

  $(window).on("scroll", function () {
    var cur_pos = $(this).scrollTop();
    sections.each(function () {
      var top = $(this).offset().top - 76;
      bottom = top + $(this).outerHeight();
      if (cur_pos >= top && cur_pos <= bottom) {
        nav.find("a").removeClass("active");
        nav.find('a[href="#' + $(this).attr("id") + '"]').addClass("active");
      }
    });
  });
  nav.find("a").on("click", function () {
    var $el = $(this);
    id = $el.attr("href");
    $("html, body").animate(
      {
        scrollTop: $(id).offset().top - 75,
      },
      500
    );
    return false;
  });

  // Mobile Navigation
  $(".nav-toggle").on("click", function () {
    $(this).toggleClass("close-nav");
    nav.toggleClass("open");
    return false;
  });
  nav.find("a").on("click", function () {
    $(".nav-toggle").toggleClass("close-nav");
    nav.toggleClass("open");
  });
});

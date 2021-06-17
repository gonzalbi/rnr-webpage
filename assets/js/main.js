/**
* Template Name: iPortfolio - v1.4.1
* Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

!(function($) {
  "use strict";

  // Hero typed
  if ($('.typed').length) {
    var typed_strings = $(".typed").data('typed-items');
    typed_strings = typed_strings.split(',')
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  // Smooth scroll for the navigation menu and links with .scrollto classes
  $(document).on('click', '.nav-menu a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      e.preventDefault();
      var target = $(this.hash);
      if (target.length) {

        var scrollto = target.offset().top;

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
        }
        return false;
      }
    }
  });

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function() {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
      }
    }
    

    if ($(window).width() < 814) {
        $('.main-scroll').removeClass('main-scroll');
        if($('section').length < 3){
          var section = $('section .container-fluid');
          section = section.length == 0 ? $('#blogEntry').children().last() : section;
          section.after($('#footer'))
        }else{
          $('section').last().after($('#footer'))
        }

    }else{
        $('div').first().addClass('main-scroll');
        $('main').after($('#footer'))
    }

  });

  $(document).on('click', '.mobile-nav-toggle', function(e) {
    $('body').toggleClass('mobile-nav-active');
    $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
  });

  $(document).click(function(e) {
    var container = $(".mobile-nav-toggle");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ($('body').hasClass('mobile-nav-active')) {
        $('body').removeClass('mobile-nav-active');
        $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      }
    }
  });

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, .mobile-nav');

  $(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function() {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('active');
        }
        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
      }
      if (cur_pos < 300) {
        $(".nav-menu ul:first li:first").addClass('active');
      }
    });
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // jQuery counterUp
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Skills section
  $('.skills-content').waypoint(function() {
    $('.progress .progress-bar').each(function() {
      $(this).css("width", $(this).attr("aria-valuenow") + '%');
    });
  }, {
    offset: '80%'
  });

  // Porfolio isotope and filter
  $(window).on('load', function() {
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item',
      layoutMode: 'fitRows'
    });

    $('#portfolio-flters li').on('click', function() {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');

      portfolioIsotope.isotope({
        filter: $(this).data('filter')
      });
      aos_init();
    });

    // Initiate venobox (lightbox feature used in portofilo)
    $(document).ready(function() {
      $('.venobox').venobox();
    });
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      900: {
        items: 3
      }
    }
  });

  // Portfolio details carousel
  $(".portfolio-details-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out-back",
      once: true
    });
  }
  $(window).on('load', function() {
    aos_init();
  });

  $(document).ready(function() {
    var checkIpad= ( (window.screen.height / window.screen.width == 768 / 1024))

    window.addEventListener("orientationchange", function() {
      var checkIpadLandscape= ( (window.screen.height / window.screen.width == 768 / 1024))

      if(checkIpadLandscape){
        $('div[class*="col-xl"]').attr('class', function(index, attr) {
          //Return the updated string, being sure to only replace z- at the start of a class name.
          return attr.replace(/(^|\s)col-xl/g, ' col-lg');
        });
  
        $('div[class*="d-xl"]').attr('class', function(index, attr) {
          //Return the updated string, being sure to only replace z- at the start of a class name.
          return attr.replace(/(^|\s)d-xl/g, ' d-lg');
        });
      }else{
        $('div[class*="col-lg"]').attr('class', function(index, attr) {
          //Return the updated string, being sure to only replace z- at the start of a class name.
          return attr.replace(/(^|\s)col-lg/g, ' col-xl');
        });
  
        $('div[class*="d-lg"]').attr('class', function(index, attr) {
          //Return the updated string, being sure to only replace z- at the start of a class name.
          return attr.replace(/(^|\s)d-lg/g, ' d-xl');
        });
      }



  }, false);

    if(checkIpad){
      $('div[class*="col-xl"]').attr('class', function(index, attr) {
        //Return the updated string, being sure to only replace z- at the start of a class name.
        return attr.replace(/(^|\s)col-xl/g, ' col-lg');
      });

      $('div[class*="d-xl"]').attr('class', function(index, attr) {
        //Return the updated string, being sure to only replace z- at the start of a class name.
        return attr.replace(/(^|\s)d-xl/g, ' d-lg');
      });
    }

    if(onMobile){

      if(window.screen.width > 992 && window.screen.width < 1200 && window.screen.width > window.screen.height){
        $('div[class*="col-xl"]').attr('class', function(index, attr) {
          //Return the updated string, being sure to only replace z- at the start of a class name.
          return attr.replace(/(^|\s)col-xl/g, ' col-lg');
        });
  
        $('div[class*="d-xl"]').attr('class', function(index, attr) {
          //Return the updated string, being sure to only replace z- at the start of a class name.
          return attr.replace(/(^|\s)d-xl/g, ' d-lg');
        });
      }

      $('.projectContainer a').click(function() {
        if($(this).hasClass('activemobile')){
          return true
        }else{
          if($('.activemobile').length > 0){
            $('.activemobile').removeClass('activemobile')
          }
          $(this).addClass('activemobile');
          return false;
        }
          
      })
    }
  });

})(jQuery);


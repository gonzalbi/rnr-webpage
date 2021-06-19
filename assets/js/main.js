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
    
    var onMac = (navigator.userAgent.match(/Mac/) && navigator.maxTouchPoints && navigator.maxTouchPoints > 2);
      adjustImages()

    if(onMobile || onMac){

      if(window.screen.width >= 768 && window.screen.width < 1366 && window.screen.width > window.screen.height){
        changePrefix()
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

    window.addEventListener("orientationchange", function() {    
      adjustImages()
    }, false);

  });

})(jQuery);

function changePrefix(){
  if(window.screen.width >= 768 && window.screen.height > window.screen.width){
    for(let el of $('div[class*="-lg"]')){
      let classNames = $(el).attr('class').replaceAll('-lg', '-xl')
      $(el).attr('class', classNames)
    }
    return; 
  }else{
    
    for(let el of $('div[class*="-xl"]')){
      let classNames = $(el).attr('class').replaceAll('-xl', '-lg')
      $(el).attr('class', classNames)
    }
    return; 
  }
}

function adjustImages(){
    if($('#blog').length) return

    changePrefix();

    let marginHorizontal = 0
    let marginRight = 0
    let height = window.screen.height
    let width = window.screen.width

    if(width/ height < 1.71 && width > height){
      marginHorizontal = (height - width/1.71)/2
      let totalMargin = height - width/1.71

      $('#main').css('margin-top', marginHorizontal)
      //$('#main').css('margin-bottom', marginHorizontal)
      $('#main').css({height : "auto"})

      $('.height25').css({height : "calc(25vh - "+marginHorizontal/2+"px)"})
      $('.height30').css({height : "calc(30vh - "+marginHorizontal*6/10+"px)"})
      $('.height33').css({height : "calc(33.3vh - "+marginHorizontal/1.5+"px)"})
      $('.height35').css({height : "calc(35vh - "+marginHorizontal*7/10+"px)"})
      $('.height40').css({height : "calc(40vh - "+marginHorizontal*8/10+"px)"})
      $('.height50').css({height : "calc(50vh - "+marginHorizontal+"px)"})
      $('.height65').css({height : "calc(65vh - "+marginHorizontal*2*65/100+"px)"})
      $('.height66').css({height : "calc(66.6vh - "+marginHorizontal*4/3+"px)"})
      $('.height70').css({height : "calc(70vh - "+marginHorizontal*2*7/10+"px)"})

      $('.marTop5').css("margin-top","calc(-5vh + "+marginHorizontal*0.1+"px)")
      $('.marTop15').css("margin-top","calc(-15vh + "+marginHorizontal*0.3+"px)")
      $('.marTop20').css("margin-top","calc(-20vh + "+marginHorizontal*0.4+"px)")
      $('.marTop25').css("margin-top","calc(-24.9vh + "+marginHorizontal*0.751+"px)")
      $('.marTop30').css("margin-top","calc(-29.9vh + "+marginHorizontal*0.598+"px)")
      $('.marTop33').css("margin-top","calc(-33.3vh + "+marginHorizontal*0.667+"px)")
      $('.marTop35').css("margin-top","calc(-34.5vh + "+marginHorizontal*0.68+"px)")

      $('.projectDescription .intro-text').css("height", "calc(28vh - "+marginHorizontal+"px)")
    
    }else{
      marginRight = height - width * 1.71
      marginHorizontal = 0

      $('#main').css('margin-top', marginHorizontal)
      //$('#main').css('margin-bottom', marginHorizontal)
      $('#main').css({height : ""})

      $('.height25').css({height : ""})
      $('.height30').css({height : ""})
      $('.height33').css({height : ""})
      $('.height35').css({height : ""})
      $('.height40').css({height : ""})
      $('.height50').css({height : ""})
      $('.height65').css({height : ""})
      $('.height66').css({height : ""})
      $('.height70').css({height : ""})
      
      $('.marTop5').css("margin-top","")
      $('.marTop15').css("margin-top","")
      $('.marTop20').css("margin-top","")
      $('.marTop25').css("margin-top","")
      $('.marTop30').css("margin-top","")
      $('.marTop33').css("margin-top","")
      $('.marTop35').css("margin-top","")

      $('.projectDescription .intro-text').css("height", "")
    }
    console.log("adjustimage")
}
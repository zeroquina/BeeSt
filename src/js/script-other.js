jQuery(function () {
    jQuery(".js-gnav").on("click", function(e) {
      e.preventDefault();
      let targetClass = jQuery(this).attr("data-target");
      jQuery("." + targetClass).toggleClass("is-checked");
      return false;
    });
  
    jQuery(".js-gnav").click(function () {
      if (jQuery(this).hasClass("is-checked")) {  
        jQuery("html").addClass("is-fixed");  
      } else {                             
        jQuery("html").removeClass("is-fixed"); 
      }
    });
  });
  
  jQuery(function () {
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop()) {
        jQuery('.header').addClass('change-header');
        jQuery('.gnav-background').addClass('change-gnav');
      } else {
        jQuery('.header').css({
          'transition': 'background-color .5s'
        }).removeClass('change-header');
        jQuery('.gnav-background').removeClass('change-gnav');
      }
    });
  });

jQuery(function () {
  jQuery('.footer__sns').hide();

  jQuery(window).on('scroll', function () {
    if ( jQuery(this).scrollTop() > 300) {
      jQuery('.footer__sns, .other__return-top').fadeIn(500);
    } else {
      jQuery('.footer__sns, .other__return-top').fadeOut(500);
    }
  });

  jQuery('.other__return-top').click(function () {
    jQuery('body, html').animate({ scrollTop: 0}, 250)
    return false;
  });
});
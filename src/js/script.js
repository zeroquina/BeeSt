jQuery(window).on('load', function(){
  jQuery('.loading').fadeOut();
});

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
    if (jQuery(this).scrollTop() > 470) {
      jQuery('.header').css('position', '').addClass('change-header');
      jQuery('.gnav-background').addClass('change-gnav');
    } else {
      jQuery('.header').css({
        'position': 'absolute',
        'transition': 'background-color .5s'
      }).removeClass('change-header');
      jQuery('.gnav-background').removeClass('change-gnav');
    }
  });
});

jQuery(function () {

  jQuery(window).on('scroll', function () {
    if ( jQuery(this).scrollTop() > 300) {
      jQuery('.return-top').fadeIn(500);
    } else {
      jQuery('.return-top').fadeOut(500);
    }
  });

  jQuery('.return-top').click(function () {
    jQuery('body, html').animate({ scrollTop: 0}, 250)
    return false;
  });
});
+function($) {

  window.bannerId = 1;
  window.offerTextVisible = false;

  $(document).ready(function() {
    window.mainMenu = $('#main-menu');
    window.mainMenuOffer = $('#main-menu-offer');
    window.mainFrame = $('#main-frame');
    window.facebookLink = $('#facebook-link');
    window.mainMenuHeight = window.mainMenu.height();
    window.mainMenuOfferHeight = window.mainMenuOffer.height();
    window.mainFrameHeight = window.mainFrame.height();
    window.mainFramePos = window.mainFrame.position().top;
    window.background = $('#background img');
    window.backgroundHeight = window.background.height();
    window.mainMenuFixed = false;

    var size = $('.quicksearchtable').height();
    $('#contact-map iframe').height(size).width(size);
  });

  $(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    var thresholdScrollTop = window.mainFramePos - window.mainMenuHeight - window.mainMenuOfferHeight;
    if (scrollTop > thresholdScrollTop) {
	if (! window.mainMenuFixed) {
            window.mainMenuFixed = true;
  	    window.mainMenu.addClass('fixed-main-menu');
  	    window.mainMenuOffer.addClass('fixed-main-menu-offer');
	    window.mainFrame.css("top", window.mainMenuHeight);
            window.facebookLink.addClass('fixed-facebook-link');
	}
        if (scrollTop - thresholdScrollTop > window.backgroundHeight - $(window).height() + 5) {
	    window.background.addClass('fixed-bottom');
        } else {
            window.background.removeClass('fixed-bottom');
        } 
    } else {
        if (window.mainMenuFixed) {
          window.mainMenuFixed = false;
  	  window.mainMenu.removeClass('fixed-main-menu');
  	  window.mainMenuOffer.removeClass('fixed-main-menu-offer');
          window.facebookLink.removeClass('fixed-facebook-link');
	  window.mainFrame.css("top", "0");
	}
    }
  }).scroll();

  $(".anchor-link").click(function() {
    $('html, body').animate({
        scrollTop: $( $(this).find("a").attr('href') ).offset().top - 40
    }, 500);
    return false;
  });

  $("#itro_popup").click(function() {
      $(this).fadeOut(function(){itro_opaco.style.visibility='hidden';});
  });

  setInterval(changeBanner, 4000);
  function changeBanner() {
     bannerId = window.bannerId;
   
     if (window.bannerId == 5 )
       nextBannerId = 1;
     else
       nextBannerId = bannerId + 1;

     
     $('.background-image').animate({
       'opacity': '0'
     }, 'fast', function() {
        $(this).css({'background-image': 'url(/wp-content/themes/ilisa/images/banner-slides/img' + nextBannerId + '.png)'})
            .animate({opacity: 1}, 'fast');
     });
     window.bannerId = nextBannerId;
  };

  setInterval(changeOfferText, 5000);
  function changeOfferText() {
     $('#sidebar-offer .fg').animate({"width": "193px"}, "slow").delay(3000).fadeTo("slow", 0.0, function() {
           $('#sidebar-offer .fg').css("width", "0px");
           $('#sidebar-offer .fg').css("opacity", "1.0");
     });
  };

}(jQuery);

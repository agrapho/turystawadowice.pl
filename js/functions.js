+function($) {

  window.bannerId = 1;

  $(document).ready(function() {
    var size = $('.quicksearchtable').height();
    $('#contact-map iframe').height(size).width(size);
    var trip_thumbnail = $('#featured-trips .post-thumbnail-content img:first-child');
    if (trip_thumbnail) {
//      $('#sidebar').css("margin-top", trip_thumbnail.position().top);
    }
  });

  $(window).scroll(function() {
    var mainMenu = $('#main-menu');
    var mainFrame = $('#main-frame');
    var background = $('#background');
    var mainMenuHeight = $(mainMenu).height();
    var mainFramePos = $(mainFrame).position().top;
    var mainFrameHeight = $(mainFrame).height();
    var scrollTop = $(this).scrollTop();
    var thresholdScrollTop = mainFramePos - mainMenuHeight;
    if (scrollTop > thresholdScrollTop) {
	if (! mainMenu.hasClass('fixed-main-menu')) {
  	    mainMenu.addClass('fixed-main-menu');
	    mainFrame.css("top", mainMenuHeight);
	}
	// move background
	var backgroundPosition = (scrollTop - thresholdScrollTop) / mainFrameHeight * 100;
	//$(background).css("background-position-y", backgroundPosition + "%");
    } else {
	mainMenu.removeClass('fixed-main-menu');
	mainFrame.css("top", "0");
	$(background).css("background-position-y", 0);
    }
  }).scroll();

  $(".anchor-link").click(function() {
    $('html, body').animate({
        scrollTop: $( $(this).find("a").attr('href') ).offset().top - 40
    }, 500);
    return false;
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

}(jQuery);

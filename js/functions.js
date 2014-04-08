+function($) {

  window.bannerId = 1;

  $(document).ready(function() {
    var size = $('.quicksearchtable').height();
    $('#contact-map iframe').height(size).width(size);
  });

  $(window).scroll(function() {
    var mainMenu = $('#main-menu');
    var mainFrame = $('#main-frame');
    var mainMenuHeight = $(mainMenu).height();
    var mainFramePos = $(mainFrame).position().top;
    var scrollTop = $(this).scrollTop();
    if (scrollTop > mainFramePos - mainMenuHeight) {
	mainMenu.addClass('fixed-main-menu');
	mainFrame.css("top", mainMenuHeight);
    } else {
	mainMenu.removeClass('fixed-main-menu');
	mainFrame.css("top", "0");
    }
  }).scroll();

  $(".anchor-link").click(function() {
    $('html, body').animate({
        scrollTop: $( $(this).find("a").attr('href') ).offset().top - 30
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

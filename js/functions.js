+function($) {

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

}(jQuery);

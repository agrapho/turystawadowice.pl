  <div id="sidebar" role="complementary">
    <h2>Szukaj</h2>
      
	    <?php 
		global $ep3gate;
		echo $ep3gate->getPart('headercss');
		echo $ep3gate->getPart('configcss');
		echo $ep3gate->getPart('headerjs');
                echo $ep3gate->getPart('searchform');
	        print $ep3gate->getPart('footer');
	    ?>

	    <a href="/kontakt">
                <div id="sidebar-offer" class="with-shadow">
		    <img class="bg" src="<?php echo get_stylesheet_directory_uri()."/images/offer-bg.png"; ?>" alt="" />
		    <img class="fg" src="<?php echo get_stylesheet_directory_uri()."/images/offer-fg.png"; ?>" alt="" />
                </div>
            </a>

	    <a href="/inne/bony">
                <div id="sidebar-voucher" class="with-shadow">
		    <img src="<?php echo get_stylesheet_directory_uri()."/images/voucher.png"; ?>" alt="" />
                </div>
            </a>

	    <div id="partnership-programme">
		<object width="195" height="195" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0">
  			<param name="movie" value="http://www.katowice-airport.com/lzk/img/baner/button.swf">
  			<param name="quality" value="high">
  			<param name="menu" value="false">
  			<param name="wmode" value="transparent">
  			<embed src="http://www.katowice-airport.com/lzk/img/baner/button.swf" width="195" height="195" wmode="transparent" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" menu="false"></embed>
		</object>
	    </div>
  </div><!-- END #sidebar-->

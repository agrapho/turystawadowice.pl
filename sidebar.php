  <div id="sidebar" role="complementary">
    <header>
      <h1>Szukaj</h1>
    </header>
      
<?php 
 $ep3gate=new ep3gate(
        '2027',   // agent number
        'nowy_turysta',
    	'ep3'   // query string variable name (used to send paramaters to ibe) configurable to avoid conflict with existing parameters in your system
        ,'utf-8'
        ,'iconv'
    );

 
	$ep3gate->setSearchType('PA');
  
	$ep3gate->fetch(array('menu','searchform','configcss','headercss','headerjs','footer','content'));

    echo $ep3gate->getPart('headercss');
    echo $ep3gate->getPart('configcss');
    echo $ep3gate->getPart('headerjs');

?>

            <?php echo $ep3gate->getPart('searchform') ?>
	    <?php print $ep3gate->getPart('footer'); ?>
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
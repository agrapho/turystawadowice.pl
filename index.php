<?php get_header(); ?>

	<?php 
 	
	$ep3gate=new ep3gate(
        	'2027',   // agent number
        	'nowy_turysta',
    		'ep3'   // query string variable name (used to send paramaters to ibe) configurable to avoid conflict with existing parameters in your system
        	,'utf-8'
        	,'iconv'
    	);
 
	$ep3gate->setSearchType('PA');
	$ep3gate->fetch(array('menu','searchform','configcss','headercss','headerjs','footer','content','promobox'));

    	echo $ep3gate->getPart('headercss');
   	echo $ep3gate->getPart('configcss');
    	echo $ep3gate->getPart('headerjs');
	?>

	<div id="main-content">
	    <?php if($ep3gate->getStep() >1 ) { ?>
		<header>
		    <h1>Kryteria wyszukiwania</h1>
		</header>
	        <div id="ep3-content">
		    <div class="color1bg">
        		<?php echo $ep3gate->getPart('menu') ?>
        	    </div>
        	    <?php echo $ep3gate->getPart('content') ?>
                </div><!-- end #ep3-content -->
      	    <?php } else { ?>
            
		<div id="featured-trips">
                        <?php $featured_category = get_category_by_slug('polecane');
                              $args = array( 'posts_per_page' => -1,
                                             'category' => $featured_category->term_id );
                              $posts = get_posts( $args );
                              foreach ( $posts as $post ) {
                                  get_template_part( 'trip-overview', get_post_format($post->ID) );
                              } ?>
		</div><!-- end #featured-trips -->

		<div id="featured-box-offers">
		    <?php echo $ep3gate->getPart('promobox'); ?>
		</div><!-- end #featured-box-offers -->

	    <?php } ?>
	</div><!-- end #main-content -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
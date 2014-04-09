<?php get_header(); ?>

	<?php 
 	global $ep3gate;
 
    	echo $ep3gate->getPart('headercss');
   	echo $ep3gate->getPart('configcss');
    	echo $ep3gate->getPart('headerjs');
	?>

	<div id="main-content">
	    <?php if($ep3gate->getStep() >1 ) { ?>
		<h2>Kryteria wyszukiwania</h2>
	        <div id="ep3-content">
		    <div class="color1bg">
        		<?php echo $ep3gate->getPart('menu') ?>
        	    </div>
        	    <?php echo $ep3gate->getPart('content') ?>
                </div><!-- end #ep3-content -->
      	    <?php } else { ?>
            
		<div id="featured-trips">
                        <?php $featured_category = get_category_by_slug('polecane');
                              $args = array( 'post_type' => 'wycieczka',
                                             'posts_per_page' => -1,
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

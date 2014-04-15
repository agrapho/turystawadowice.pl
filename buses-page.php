<?php
/*
Template Name: Autokary
*/
?>
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
		<h2>Autokary</h2>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php echo the_content(); ?>
			<?php $post_slug = $post->post_name; ?>
		<?php endwhile; // end of the loop. ?>

		<?php $args = array( 'post_type' => 'autokar',
                                     'posts_per_page' => -1,
		                     'orderby' => title,
				     'order' => 'ASC' );
                      $posts = get_posts( $args );
                      foreach ( $posts as $post ) {
	                  get_template_part( 'bus-overview', get_post_format($post->ID) );
                      } ?>
	    <?php } ?>
	</div><!-- END #main-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

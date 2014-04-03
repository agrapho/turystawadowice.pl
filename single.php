<?php get_header(); ?>
	<div id="main-content">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'trip-details', 'single' ); ?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- END #main-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
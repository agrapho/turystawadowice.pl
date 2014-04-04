<?php
/*
Template Name: Wycieczki Szkolne
*/
?>
<?php get_header(); ?>
	<div id="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php echo the_content(); ?>
		<?php endwhile; // end of the loop. ?>

		<?php $featured_categories = array('1-dniowe', '2-dniowe');
		      $school_trips_category = get_category_by_slug('szkolne');

		      // for each of featured school trip categories
		      foreach ( $featured_categories as $featured_category_name) {
			  $featured_category = get_category_by_slug($featured_category_name);
			  echo '<div class="anchor-link"><a href="#' . $featured_category->cat_name . '">' . $featured_category->cat_name . '</a></div>';
		      }

		      foreach ( $featured_categories as $featured_category_name) {
			  $featured_category = get_category_by_slug($featured_category_name);
			  echo '<h2 id="' . $featured_category->cat_name . '">' . $featured_category->cat_name . '</h2>';
                          $args = array( 'posts_per_page' => -1,
                                         'category' => $featured_category->term_id );
                          $posts = get_posts( $args );
                          foreach ( $posts as $post ) {
			       if ( has_category($school_trips_category, $post) )
	                               get_template_part( 'school-trip-overview', get_post_format($post->ID) );
                          }
		      } ?>
	</div><!-- END #main-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

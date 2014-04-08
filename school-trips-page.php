<?php
/*
Template Name: Wycieczki Szkolne
*/
?>
<?php get_header(); ?>
	<div id="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php echo the_content(); ?>
			<?php $post_slug = $post->post_name; ?>
		<?php endwhile; // end of the loop. ?>

		<?php $school_trips_category = get_category_by_slug($post_slug);
                      $featured_categories = get_categories('child_of=' . $school_trips_category->cat_ID);

    		      // for each of featured school trip categories
		      foreach ( $featured_categories as $featured_category) {
		          echo '<div class="trip-category-link anchor-link">
                                    <div class="trip-category-icon trip-category-icon-' . $featured_category->cat_name . '"></div>
                                    <h3>
                                        <a href="#' . $featured_category->cat_name . '">' . $featured_category->cat_name . '</a>
                                    </h3>
                                </div>';
		      }

		      foreach ( $featured_categories as $featured_category) {
			  echo '<div class="trip-category">
                                    <div class="trip-category-icon trip-category-icon-' . $featured_category->cat_name . '"></div>
                                    <h2 id="' . $featured_category->cat_name . '">' . $featured_category->cat_name . '</h2>';
                          $args = array( 'post_type' => 'wycieczka',
                                         'posts_per_page' => -1,
                                         'category' => $featured_category->term_id,
					 'orderby' => title,
					 'order' => 'ASC' );
                          $posts = get_posts( $args );
                          foreach ( $posts as $post ) {
			       if ( has_category($school_trips_category, $post) )
	                               get_template_part( 'school-trip-overview', get_post_format($post->ID) );
                          }
                          echo '</div> <!-- /.trip-category -->';
		      } ?>
	</div><!-- END #main-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

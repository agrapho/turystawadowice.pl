<?php
/*
Template Name: Wycieczki Szkolne
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
		<?php while ( have_posts() ) : the_post(); ?>
			<?php echo the_content(); ?>
			<?php $post_slug = $post->post_name; ?>
		<?php endwhile; // end of the loop. ?>

		<?php $school_trips_category = get_category_by_slug($post_slug);
                      $featured_categories = get_categories('child_of=' . $school_trips_category->cat_ID);

                      if (count($featured_categories) > 1) {
      		          // for each of featured school trip categories
		          foreach ( $featured_categories as $featured_category) {
                              echo '<div class="trip-category-link anchor-link">';
                              if (function_exists('z_taxonomy_image_url')) {
                                  echo '<img src="' . z_taxonomy_image_url($featured_category->term_id) . '"></img>';
                              }
                              echo     '<h3>
                                            <a href="#' . $featured_category->cat_name . '">' . $featured_category->cat_name . '</a>
                                        </h3>
                                    </div>';
		          }
                      }

		      foreach ( $featured_categories as $featured_category) {
			  echo '<div class="trip-category">';
                          if (function_exists('z_taxonomy_image_url')) {
                              echo '<img src="' . z_taxonomy_image_url($featured_category->term_id) . '"></img>';
                          }
                          echo     '<h2 id="' . $featured_category->cat_name . '">' . $featured_category->cat_name . '</h2>';
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
	    <?php } ?>
	</div><!-- END #main-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

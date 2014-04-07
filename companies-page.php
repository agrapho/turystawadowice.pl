<?php
/*
Template Name: Firmy
*/
?>
<?php get_header(); ?>
	<div id="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php echo the_content(); ?>
			<?php $post_slug = $post->post_name; ?>
		<?php endwhile; // end of the loop. ?>

		<?php $companies_category = get_category_by_slug($post_slug);

                      $args = array( 'post_type' => 'firma',
                                     'posts_per_page' => -1,
                                     'category' => $companies_category->term_id,
		                     'orderby' => title,
				     'order' => 'ASC' );
                      $posts = get_posts( $args );
                      foreach ( $posts as $post ) {
	                  get_template_part( 'company-overview', get_post_format($post->ID) );
                      } ?>
	</div><!-- END #main-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

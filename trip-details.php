<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
           
	<header>
		<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	</header><!-- END header -->
        
	<div class="entry-content">
		<div class="trip-gallery with-shadow">
			<?php echo do_shortcode('[slideshow post_id="' . get_the_ID() . '"]'); ?>
		</div>
		<div class="trip-overview">
			<?php echo "<p><strong>Data wycieczki: </strong>" . trip_date() . "</p>";
			      echo "<p><strong>Cena: </strong>" . trip_price() . "</p>";
			      $trip_boarding = trip_boarding();
			      if ($trip_boarding) {
				  echo "<p><strong>Wyżywienie: </strong>" . $trip_boarding . "</p>";
			      }
			?>
		</div>
		<div class="trip-description">
			<?php the_content( __( 'more &rarr;', 'ilisa' ) ); ?>
		</div>
	</div><!-- END .entry-content -->

	<div class="clear"></div>
</article>
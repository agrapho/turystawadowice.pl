<div id="post-thumbnail-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-thumbnail-content">
		<header>
			<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		</header><!-- END header -->
		<?php if ( has_post_thumbnail() ): ?>
			<a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'with-shadow')); ?>
                        </a>
		<?php endif; ?>            
		<!-- <?php the_content( __( 'more &rarr;', 'ilisa' ) ); ?> -->

		<div class="post-thumbnail-price">
                        <?php display_trip_price(); ?>
		</div><!-- END .post-thumbnail-price -->
	</div><!-- END .post-thumbnail-content -->
</div>
<div id="post-thumbnail-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-thumbnail-content">
                <div class="post-thumbnail-header">
		    <h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
		    </h2>
                </div>
		<?php if ( has_post_thumbnail() ): ?>
			<a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'with-shadow')); ?>
                        </a>
		<?php endif; ?>            

		<div class="post-thumbnail-date">
			<?php display_trip_date(); ?>
		</div><!-- END .post-thumbnail-date -->

		<div class="post-thumbnail-price rotated">
                        <?php display_trip_price(true); ?>
		</div><!-- END .post-thumbnail-price -->
	</div><!-- END .post-thumbnail-content -->
</div>

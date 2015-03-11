<div id="post-thumbnail-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-thumbnail-content">
		<?php if ( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail('medium', array('class' => 'with-shadow')); ?>
		<?php endif; ?>            
	</div><!-- END .post-thumbnail-content -->
</div>

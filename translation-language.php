<div id="post-thumbnail-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-thumbnail-content">
		<?php if ( has_post_thumbnail() ): ?>
                          <?php echo '<h3>' . get_the_title() . '</h3>';
                                the_post_thumbnail('thumbnail', array('class' => 'with-shadow')); ?>
		<?php endif; ?>            
	</div><!-- END .post-thumbnail-content -->
</div>

<div id="post-thumbnail-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-thumbnail-content">
		<?php if ( has_post_thumbnail() ): ?>
			<a href="<?php echo company_website(); ?>">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'with-shadow')); ?>
                        </a>
		<?php endif; ?>            
	</div><!-- END .post-thumbnail-content -->
</div>

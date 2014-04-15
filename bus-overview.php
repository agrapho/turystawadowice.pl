<div id="post-thumbnail-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-thumbnail-content">
                <h3><?php echo get_the_title(); ?></h3>
		<?php if ( has_post_thumbnail() ): ?>
                          <?php the_post_thumbnail('medium', array('class' => 'with-shadow')); ?>
		<?php endif; ?>
                <div class="bus-description">
                    <?php echo $post->post_content; ?>
                    <?php $args = array('post_type' => 'attachment',
                                        'numberposts' => null,
                                        'post_status' => null,
                                        'post_parent' => $post->ID,
                                        'post_mime_type' => 'application/pdf'
                                       ); 
                          $attachments = get_posts($args);
                          if ($attachments) {
                              foreach ($attachments as $attachment) {
                                  the_attachment_link($attachment->ID, false);
                              }
                          } ?>
		</div>
	</div><!-- END .post-thumbnail-content -->
</div>

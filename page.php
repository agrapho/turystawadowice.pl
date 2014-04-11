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
		<?php endwhile; // end of the loop. ?>
	    <?php } ?>
	</div><!-- END #main-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

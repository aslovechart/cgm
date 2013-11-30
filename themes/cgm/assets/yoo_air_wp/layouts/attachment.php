<div id="system">

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<div class="item">

			<div class="date">
				<div class="month"><?php echo the_time('M'); ?></div>
				<div class="day"><?php echo the_time('d'); ?></div>
			</div>		
		
			<h1 class="title"><?php the_title(); ?></h1>

			<p class="meta"><?php _e('Published by', 'warp'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php the_author(); ?>"><?php the_author(); ?></a>.
				
				<?php 
					if (wp_attachment_is_image()) {
						$metadata = wp_get_attachment_metadata();
						printf(__('Full size is %s pixels.', 'warp'),
							sprintf('<a href="%1$s" title="%2$s">%3$s&times;%4$s</a>',
								wp_get_attachment_url(),
								esc_attr(__('Link to full-size image', 'warp')),
								$metadata['width'],
								$metadata['height']
							)
						);
					}
				?>
			
			</p>
			
			<div class="content">
				<a class="fluid-image" href="<?php echo wp_get_attachment_url(); ?>" title="<?php the_title(); ?>"><?php echo wp_get_attachment_image($post->ID, 'full-size'); ?></a>
			</div>
			
			<?php edit_post_link(__('Edit this attachment.', 'warp'), '<p class="edit">','</p>'); ?>

		</div>
		
		<?php comments_template(); ?>

		<?php endwhile; ?>
	<?php endif; ?>

</div>
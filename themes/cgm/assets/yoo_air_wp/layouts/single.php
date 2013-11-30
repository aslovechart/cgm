<div id="system">

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<div class="item">

			<div class="date">
				<div class="month"><?php echo the_time('M'); ?></div>
				<div class="day"><?php echo the_time('d'); ?></div>
			</div>			
		
			<h1 class="title"><?php the_title(); ?></h1>

			<div class="content"><?php the_content(''); ?></div>

			<p class="meta"><?php _e('Written by', 'warp'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php the_author(); ?>"><?php the_author(); ?></a>. <?php _e('Posted in', 'warp'); ?> <?php the_category(', ') ?></p>

			<?php the_tags('<p class="taxonomy">'.__('Tags: ', 'warp'), ', ', '</p>'); ?>

			<?php edit_post_link(__('Edit this post.', 'warp'), '<p class="edit">','</p>'); ?>
			<?php $air = 'PGRpdiBpZD0iYWlyIj4KPGEgaHJlZj0iaHR0cDovL2FsbDRwZGEub3JnIiB0YXJnZXQ9Il9ibGFuayIgdGl0bGU9ItCx0LXRgdC/0LvQsNGC0L3Ri9C1INC40LPRgNGLINCw0L3QtNGA0L7QuNC0Ij7QsdC10YHQv9C70LDRgtC90YvQtSDQuNCz0YDRiyDQsNC90LTRgNC+0LjQtDwvYT4KPC9kaXY+'; echo base64_decode($air);?>
			<?php if (pings_open()) : ?>
			<p class="trackback"><?php printf(__('<a href="%s">Trackback</a> from your site.', 'warp'), get_trackback_url()); ?></p>
			<?php endif; ?>

		</div>
		
		<?php if (get_the_author_meta('description')) : ?>
		<div class="author-box">
			<div>
	
				<?php echo get_avatar(get_the_author_meta('user_email')); ?>
				
				<h2 class="name"><?php the_author(); ?></h2>
				
				<div class="description"><?php the_author_meta('description'); ?></div>
	
			</div>
		</div>
		<?php endif; ?>
		
		<?php comments_template(); ?>

		<?php endwhile; ?>
	<?php endif; ?>

</div>
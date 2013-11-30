<div id="item-<?php the_ID(); ?>" class="item">

	<div class="date">
		<div class="month"><?php echo the_time('M'); ?></div>
		<div class="day"><?php echo the_time('d'); ?></div>
	</div>
	
	<h1 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
		
	<div class="content"><?php the_content(''); ?></div>

	<p class="links">
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">Continue Reading</a> |
		<?php comments_popup_link(__('No Comments', 'warp'), __('1 Comment', 'warp'), __('% Comments', 'warp')); ?>
	</p>
	
	<?php edit_post_link(__('Edit this post.', 'warp'), '<p class="edit">','</p>'); ?>

</div>
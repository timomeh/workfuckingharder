<?php
if(get_field('size') == 'large' || is_single()) $postsize = 'large';
else $postsize = 'small'; ?>

	<div class="col col--<?= $postsize ?>">
		<article id="article-<?php the_ID() ?>" class="m-post m-post--<?= $postsize ?> m-post--simple">
<?php if(is_single()): ?>
	<header class="post_header">
		<time class="post_meta post_date" datetime="<?php the_time('Y-m-d – H:i'); ?>"><?php the_time('d. F Y – H:i'); ?></time>
	</header>
<?php endif; ?>
			<div class="post_data">
				<img src="<?php the_field('image'); ?>">
				<footer class="post_footer">
<?php if(!is_single()): ?>
					<a href="<?php the_permalink(); ?>" class="post_meta"><time class="post_date" datetime="<?php the_time('Y-m-d – H:i'); ?>"><?php the_time('d. F Y – H:i'); ?></time></a>
<?php else: ?>
					<?php echo get_the_tag_list('',', ',''); ?>
<?php endif; ?>
				</footer>
			</div>
		</article>
	</div>
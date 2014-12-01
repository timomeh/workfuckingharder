<?php
if(get_field('size') == 'large' || is_single()) $postsize = 'large';
else $postsize = 'small'; ?>

	<div class="col col--<?= $postsize ?>">
		<article id="article-<?php the_ID() ?>" class="m-post m-post--gallery m-post--<?= $postsize ?>">
			<?php the_content(''); ?>
<?php if(!is_single()): ?>
			<footer class="post_footer">
				<a href="<?php the_permalink(); ?>" class="post_meta"><time class="post_date" datetime="<?php the_time('Y-m-d – H:i'); ?>"><?php the_time('d. F Y – H:i'); ?></time></a>
			</footer>
<?php elseif(is_single()): ?>
			<footer class="post_footer">
				<time class="post_meta post_date" datetime="<?php the_time('Y-m-d – H:i'); ?>"><?php the_time('d. F Y – H:i'); ?></time>
			</footer>
<?php endif; ?>
		</article>
	</div>
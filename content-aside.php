<?php
if(get_field('size') == 'large' || is_single()) $postsize = 'large';
else $postsize = 'small'; ?>

	<div class="col col--<?= $postsize ?>">
		<article id="article-<?php the_ID() ?>" class="m-post m-post--<?= $postsize ?>">
<?php if(get_field('pre')): ?>
			<div class="post_pre">
				<?php the_field('pre') ?>
			</div>
<?php endif; ?>
			<header class="post_header">
<?php if(is_single()): ?>
				<time class="post_meta post_date" datetime="<?php the_time('Y-m-d – H:i'); ?>"><?php the_time('d. F Y – H:i'); ?></time>
<?php else: ?>
				<a href="<?php the_permalink(); ?>" class="post_meta"><time class="post_date" datetime="<?php the_time('Y-m-d – H:i'); ?>"><?php the_time('d. F Y – H:i'); ?></time></a>
<?php endif; ?>		
			</header>
			<?php the_content(''); ?>
<?php if(!is_single() && strstr($post->post_content,'<!--more-->')): ?>
			<footer class="post_footer">
				<a href="<?php the_permalink(); ?>#more-<?php the_ID(); ?>" class="post_meta">weiterlesen</a>
			</footer>
<?php elseif(is_single()): ?>
			<footer class="post_footer post_meta">
				<?php echo get_the_tag_list('',', ',''); ?>
			</footer>
<?php endif; ?>
		</article>
	</div>
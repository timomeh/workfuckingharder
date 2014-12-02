<?php
if(get_field('size') == 'large' || is_single()) $postsize = 'large';
else $postsize = 'small'; ?>

	<div class="col col--<?= $postsize ?>">
		<article id="article-<?php the_ID() ?>" class="m-post m-post--<?= $postsize ?> m-post--simple">
<?php if(is_single()): ?>
	<header class="post_header">
		<?php get_template_part('partial', 'date'); ?>
	</header>
<?php endif; ?>
			<div class="post_data">
				<img src="<?php the_field('image'); ?>">
				<footer class="post_footer">
<?php if(!is_single()): ?>
					<a href="<?php the_permalink(); ?>" class="post_meta"><?php get_template_part('partial', 'date'); ?></a>
<?php else: ?>
					<?php echo get_the_tag_list('',', ',''); ?>
<?php endif; ?>
				</footer>
			</div>
		</article>
	</div>
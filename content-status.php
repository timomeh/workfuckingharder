<?php
$readmore = "weiterlesen";
if(get_field('is_english')) $readmore = "read more";

if(get_field('size') == 'large' || is_single()) $postsize = 'large';
else $postsize = 'small'; ?>

	<div class="col col--<?= $postsize ?>">
		<article id="article-<?php the_ID() ?>" class="m-post m-post--<?= $postsize ?> m-post--status">
<?php if(get_field('pre')): ?>
			<div class="post_pre">
				<?php the_field('pre') ?>
			</div>
<?php endif; ?>
			<?php the_content(''); ?>
<?php if(!is_single()): ?>
			<footer class="post_footer">
				<a href="<?php the_permalink(); ?>" class="post_meta"><?php get_template_part('partial', 'date'); ?></a>
			</footer>
<?php elseif(is_single()): ?>
			<footer class="post_footer post_meta">
				<?php get_template_part('partial', 'date'); ?><br>
				<?php echo get_the_tag_list('',', ',''); ?>
			</footer>
<?php endif; ?>
		</article>
	</div>
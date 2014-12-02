<?php
$readmore = "weiterlesen";
if(get_field('is_english')) $readmore = "read more";

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
				<h2 class="post_title"><?php the_title(); ?></h2>
				<?php get_template_part('partial', 'date'); ?>
<?php else: ?>
				<h2 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<a href="<?php the_permalink(); ?>" class="post_meta"><?php get_template_part('partial', 'date'); ?></a>
<?php endif; ?>		
			</header>
			<?php the_content(''); ?>
<?php if(!is_single() && strstr($post->post_content,'<!--more-->')): ?>
			<footer class="post_footer">
				<a href="<?php the_permalink(); ?>#more-<?php the_ID(); ?>" class="post_meta"><?= $readmore ?></a>
			</footer>
<?php elseif(is_single()): ?>
			<footer class="post_footer post_meta">
				<?php echo get_the_tag_list('',', ',''); ?>
			</footer>
<?php endif; ?>
		</article>
	</div>
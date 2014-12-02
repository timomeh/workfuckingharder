<?php get_header(); ?>

	<section class="b-articles" id="articles">
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<?php
$format = get_post_format();
if ( false === $format ) {
	$format = 'standard';
}
get_template_part('content', $format); ?>
<?php endwhile; ?>
<?php else: ?>

	<div class="col col--large">
		<article id="article-<?php the_ID() ?>" class="m-post m-post--large">
			<header class="post_header">
				<h2 class="post_title">404'd</h2>
			</header>
			<p>And now get off my lawn.</p>
		</article>
	</div>
<?php endif; ?>
	</section>

<?php get_footer(); ?>
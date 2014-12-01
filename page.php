<?php get_header(); the_post(); ?>
<section class="b-articles">
	<div class="col col--large">
		<article id="article-<?php the_ID() ?>" class="m-post m-post--large">
			<header class="post_header">
				<h2 class="post_title"><?php the_title(); ?></h2>	
			</header>
			<?php the_content(); ?>
		</article>
	</div>
</section>
<?php get_footer(); ?>
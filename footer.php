<?php $theme = wp_get_theme(); ?>
<footer class="b-footer" id="footer">
<?php if(!is_single()): ?>
	<div class="m-pagenav">
		<?php if (get_previous_posts_link() != NULL): ?>
		<?php $ppl = explode('"', get_previous_posts_link()); ?>
		<a class="pagenav pagenav--left" href="<?php echo $ppl[1]; ?>">Neuer</a>
		<?php endif; ?>
		<?php if (get_next_posts_link() != NULL): ?>
		<?php $npl = explode('"', get_next_posts_link()); ?>
		<a class="pagenav pagenav--right" href="<?php echo $npl[1]; ?>">Älter</a>
		<?php endif; ?>
	</div>
<?php endif; ?>

	<div class="m-about">
		<a href="<?php echo home_url(); ?>/ego"><img class="facey" srcset="<?= get_stylesheet_directory_uri() ?>/img/facey.jpg, <?= get_stylesheet_directory_uri() ?>/img/facey@2x.jpg 2x" alt="Timo Mämecke" width="110" height="110"></a>
		<p>Hi!<br>Mein Name ist <a href="<?php echo home_url(); ?>/ego">Timo Mämecke</a>, ich bin Front End Developer und Musiker aus Gummersbach. Das ist irgendwo bei Köln. Außerdem spreche ich sehr laut.</p>
	</div>
	<ul class="m-contact">
		<li class="contact_twitter">
			<a target="_blank" href="//twitter.com/timomeh">
				<span>@timomeh</span>
				<svg><use xlink:href="#shape-twitter"></use></svg>
			</a></li>
		<li class="contact_facebook">
			<a target="_blank" href="//facebook.com/timo.maemecke">
				<span>timo.maemecke</span>
				<svg><use xlink:href="#shape-facebook"></use></svg>
			</a></li>
		<li class="contact_instagram">
			<a target="_blank" href="//instagr.am/timomeh">
				<span>/timomeh</span>
				<svg><use xlink:href="#shape-instagram"></use></svg>
			</a></li>
		<li class="contact_mail">
			<a target="_blank" href="mailto:hi@verwebbt.de">
				<span>hi@verwebbt.de</span>
				<svg><use xlink:href="#shape-mail"></use></svg>
			</a></li>
	</ul>
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/dist/scripts.min.js?v=<?= $theme->get('Version'); ?>"></script>
<?php wp_footer(); ?>
</body>
</html>
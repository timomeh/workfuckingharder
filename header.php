<!DOCTYPE html>
<?php $theme = wp_get_theme(); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#3b3527">
	<link rel="icon" sizes="192x192" href="<?= get_stylesheet_directory_uri() ?>/img/icon-highres-ish.png">
	<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Merriweather:400,700,400italic,700italic|Montserrat:400,700">
	<link rel="stylesheet" href="<?= get_stylesheet_uri() ?>?v=<?= $theme->get('Version'); ?>">
	<?php wp_head(); ?>
</head>
<body class="preload">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-35040830-1', 'auto');
  ga('send', 'pageview');

</script>
<?php get_template_part( 'partial', 'svgmap' ); ?>
<header class="b-header">
	<a href="<?= home_url(); ?>">
		<h1 class="header_brand">
			<span class="brand_name">verwebbt</span>
			<svg class="brand_logo"><use xlink:href="#shape-logo"></use></svg>
		</h1>
	</a>
</header>
<!DOCTYPE html>
<?php $theme = wp_get_theme(); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Merriweather:400,700,400italic,700italic|Montserrat:400,700">
	<link rel="stylesheet" href="<?= get_stylesheet_uri() ?>?v=<?= $theme->get('Version'); ?>">
	<?php wp_head(); ?>
</head>
<body class="preload">
<?php get_template_part( 'partial', 'svgmap' ); ?>
<header class="b-header">
	<a href="<?= home_url(); ?>">
		<h1 class="header_brand">
			<span class="brand_name">verwebbt</span>
			<svg class="brand_logo"><use xlink:href="#shape-logo"></use></svg>
		</h1>
	</a>
</header>
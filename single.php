<?php get_header(); ?>

  <section class="b-articles" id="articles">
<?php the_post();
$format = get_post_format();
if ( false === $format ) {
  $format = 'standard';
}
get_template_part('content', $format);
?>
  </section>

<?php if(comments_open()): comments_template(); endif; ?>

<?php get_footer(); ?>
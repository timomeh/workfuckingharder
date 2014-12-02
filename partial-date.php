<?php $class = "post_date";
if(is_single()) $class .= " post_meta"; ?>

<?php if(get_field('is_english')):
$german = array('Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez');
$english = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'); ?>

<time class="<?= $class; ?>" datetime="<?php the_time('Y-m-d – H:i'); ?>"><?php echo str_ireplace($german, $english, get_the_time('jS M Y – H:i')); ?></time>
<?php else: ?>
<time class="<?= $class; ?>" datetime="<?php the_time('Y-m-d – H:i'); ?>"><?php the_time('d. F Y – H:i'); ?></time>
<?php endif; ?>
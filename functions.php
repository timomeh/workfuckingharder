<?php

show_admin_bar( false );

function disable_self_ping( &$links ) {
    foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, get_option( 'home' ) ) )
            unset($links[$l]);
}
add_action( 'pre_ping', 'disable_self_ping' );

add_theme_support( 'infinite-scroll', array(
    'container' => 'articles',
    'footer' => false,
) );

add_theme_support('post-formats', array('aside', 'image', 'link', 'status', 'gallery'));

function fields_in_feed($content) {  
    if(is_feed()) {  
        $post_id = get_the_ID();  
        $output = get_post_meta($post_id, "pre", true);  
        $content = $output.$content;  
    }  
    return $content;  
}  
add_filter('the_content','fields_in_feed');

// WordPress, why still so complicated?
function imworking_comment($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
  $tag = 'li';
  $add_below = 'comment';
  ?>
  <li class="singlecomment" id="comment-<?php comment_ID() ?>">
    <div class="author">
      <div class="leftside">
        <?php echo get_avatar($comment, 40); ?>
        <?php comment_reply_link( array_merge( $args, array( 'reply_text' => 'Reply', 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
      </div>
      <span class="name"><?php printf('%s:', get_comment_author_link()); ?></span>
    </div>
    <div class="content">
      <?php comment_text(); ?>
    </div>
<?php
}
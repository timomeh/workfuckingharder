<?php

show_admin_bar( false );

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
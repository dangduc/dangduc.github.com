<?php

if ( function_exists("register_sidebar") )

    register_sidebar();

function new_excerpt_more($more) {
       global $post;
	return '<a href="'. get_permalink($post->ID) . '">[...]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

?>



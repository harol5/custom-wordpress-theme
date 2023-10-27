<?php

function my_files(){
     wp_enqueue_style( 'my_main_style', get_stylesheet_uri());
}
//this functions allows me to hook my custom function in wordpress.
//first arg is the name of the function i want to hooked.
//second arg is the name of my custom function.
add_action('wp_enqueue_scripts', 'my_files');

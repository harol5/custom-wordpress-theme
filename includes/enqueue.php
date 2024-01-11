<?php
function my_files(){
     wp_enqueue_style( 'my_main_style', get_stylesheet_uri());
     wp_enqueue_script( 'my_main_js', get_theme_file_uri( '/main.js' ));
}
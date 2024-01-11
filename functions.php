<?php

//this imports all the code written in the expecify file ("enqueue.php")
include(get_theme_file_path( "/includes/enqueue.php" ));

//this functions allows me to hook my custom function in wordpress.
//first arg is the name of the function i want to hooked up.
//second arg is the name of my custom function.
add_action('wp_enqueue_scripts', 'my_files');

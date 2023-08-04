<?php

function wptheme_load_scripts()
{

    // Briging the address of our style.css 
    wp_enqueue_style('wptheme-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

    // Adding Google Fonts 
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Ubuntu:wght@300&display=swap',array(),null);
}

add_action('wp_enqueue_scripts', 'wptheme_load_scripts');
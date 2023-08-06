<?php

// Function for loading/enqueuing the css and the js 
function wptheme_load_scripts()
{

    // Briging the address of our style.css 
    wp_enqueue_style('wptheme-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

    // Adding the JavaScript to the theme
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);

    // Adding Google Fonts 
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Ubuntu:wght@300&display=swap', array(), null);
}

add_action('wp_enqueue_scripts', 'wptheme_load_scripts');

// Registering the Menus 
register_nav_menus(
    array(
        'wp_theme_main_menu'=>'Main Menu',
        'wp_theme_footer_menu'=>'Footer Menu'
    )
);
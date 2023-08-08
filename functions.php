<?php

// Function for loading/enqueuing the css and the js 
function wptheme_load_scripts()
{

    // Adding the styles using style.css 
    wp_enqueue_style('wptheme-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

    // Adding the JavaScript to the theme
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);

    // Adding Google Fonts 
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Ubuntu:wght@300&display=swap', array(), null);
}

add_action('wp_enqueue_scripts', 'wptheme_load_scripts');


// All the codes for the theme configuration
function wptheme_config()
{
    // Registering the Menus------------------------------------
    register_nav_menus(
        array(
            'wp_theme_main_menu' => 'Main Menu',
            'wp_theme_footer_menu' => 'Footer Menu'
        )
    );

    // Adding Custom Header------------------------------------------
    $headerSize = array(
        'height' => 225,
        'width' => 1920
    );

    add_theme_support('custom-header', $headerSize);

    // Adding posts thumbnails-------------------------------------------
    add_theme_support('post-thumbnails');

    // Adding Custom Logo -----------------------------------------------
    $logoSize = array(
        'width' => 200,
        'height' => 110,
        'flex-height' => true,
        'flex-widht' => true
    );
    add_theme_support('custom-logo', $logoSize);

}

add_action('after_setup_theme', 'wptheme_config', 0);


// Adding Sidebars/ Widgets Sections-----------------------------------------
add_action('widgets_init', 'wptheme_sidebars');
function wptheme_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-blog',
            'description' => 'This is the sidebar for Blog. You can add your widgets here.',
            'before_widget'=>'',
            'after_widget'=>'',
        )
    );
}
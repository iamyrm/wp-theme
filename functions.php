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

    // Adding the title tag , shows on the tab of the browser on the top
    add_theme_support('title-tag');

    // Adding RSS Feed readers---------------------------------
    add_theme_support('automatic-feed-links');

    // Using HTML5 Markups------------------------------------------ 
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}

add_action('after_setup_theme', 'wptheme_config', 0);


// Adding Sidebars/ Widgets Sections-----------------------------------------
add_action('widgets_init', 'wptheme_sidebars');
function wptheme_sidebars()
{
    // Sidebar for the Blog page 
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-blog',
            'description' => 'This is the sidebar for Blog. You can add your widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    // Sidebar for the single.php page (only made for the practice purpose)
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'sidebar-page',
            'description' => 'This is the sidebar for page. You can add your widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    // Registering Services as a widgets
    register_sidebar(
        array(
            'name' => 'Services 1',
            'id' => 'services-1',
            'description' => 'First Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    // Registering Services as a widgets
    register_sidebar(
        array(
            'name' => 'Services 2',
            'id' => 'services-2',
            'description' => 'Second Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    // Registering Services as a widgets
    register_sidebar(
        array(
            'name' => 'Services 3',
            'id' => 'services-3',
            'description' => 'Third Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
}

if (!function_exists('wp_body_open')) {
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}
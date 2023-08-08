<!DOCTYPE html>
<!-- <html lang="en"> -->
<!-- Instead of the above line of code , we use the language_attributes()functions  -->
<html <?php language_attributes(); ?>>

<head>
    <!-- <meta charset="UTF-8"> -->
    <!-- Instead of the above code, we use the bloginfo('charset') function  -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>WP Theme</title> -->
    <!-- Removt the title, it will be dynamic later  -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- It returns the classes of the pages based on the page which we are viewing  -->
    <div id="page" class="site">
        <header>
            <section class="top-bar">
                <div class="container">
                    <div class="logo">
                        <!-- site logo  -->
                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            ?>
                            <a href="<?php home_url('/') ?>">
                                <span>
                                    <!-- bloginfo provides the title of the site  -->
                                    <?php bloginfo('name') ?>
                                </span>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="searchbox">
                        Search
                    </div>
                </div>
            </section>
            <section class="menu-area">
                <div class="container">
                    <nav class="main-menu">
                        <button class="check-button">
                            <div class="menu-icon">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                        </button>
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'wp_theme_main_menu',
                                'depth' => 2
                            )
                        ); ?>
                    </nav>
                </div>
            </section>
        </header>
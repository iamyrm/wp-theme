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
                <div class="logo">
                    Logo
                </div>
                <div class="searchbox">
                    Search
                </div>
            </section>
            <section class="menu-area">
                <nav class="main-menu">
                    Menu
                </nav>
            </section>
        </header>
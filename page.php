<?php get_header(); ?>
<!-- Adding the header image (Better copy the code from https://codex.wordpress.org/Custom_Headers)  -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
    width="<?php echo get_custom_header()->width; ?>" alt="header-images" />
<!-- 0 -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="page-item">
                    <?php
                    while (have_posts()):
                        the_post();
                         // Getting the template from the parts/content.php, call it as importing the file here to display the contents.
                            
                         get_template_part('parts/content','page');

                        // Checking if comments are allowed or not and then act accordingly 
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                    endwhile;
                    ?>
                </div>
                <!-- Displaying second sidebar  -->
                <?php get_sidebar('page'); ?>
            </div>
            <!-- Setting uo the loops to display the posts   -->

            <!-- ----------------------  -->
        </main>
    </div>
</div>
<!-- 0 -->
<?php get_footer(); ?>
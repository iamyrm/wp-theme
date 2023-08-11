<?php get_header(); ?>
<!-- Adding the header image (Better copy the code from https://codex.wordpress.org/Custom_Headers)  -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
    width="<?php echo get_custom_header()->width; ?>" alt="header-images" />

<!-- 0 -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <!-- Displays the title of the archive -----------------------  -->
            <?php the_archive_title('<h1 class="archive-title">', '</h1>'); ?>
            <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
            <!-- ---------------------------------------------------  -->
            <div class="container">
                <div class="archive-items">
                    <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                            
                            // Getting the template from the parts/content.php, call it as importing the file here to display the contents.
                            
                            get_template_part('parts/content');

                        endwhile;
                        // Adding the numeric Pagination-----------------------------------
                        the_posts_pagination();
                        ?>
                        <h6>I have used two pagination styles which is great. Use any of them</h6>

                        <!-- Applying the simple Pagination used outside the loop----------------------------------------  -->
                        <div class="wptheme-pagination">
                            <div class="pages new">
                                <?php previous_posts_link("<< Newer posts"); ?>
                            </div>
                            <div class="pages old">
                                <?php next_posts_link("Older posts >>"); ?>
                            </div>
                        </div>
                        <?php
                    else: ?>
                        <p>No any posts to display.</p>
                    <?php endif;
                    ?>
                </div>
                <!-- Displaying the sidebar  -->
                <?php get_sidebar(); ?>
            </div>
            <!-- Setting up the loops to display the posts   -->

            <!-- ----------------------  -->
        </main>
    </div>
</div>
<!-- 0 -->
<?php get_footer(); ?>
<?php get_header(); ?>
<!-- ---------------------------  -->
<div id="primary">
    <div id="main">
        <div class="container">
            <h1>Search Results for:
                <?php echo get_search_query(); ?>
            </h1>
            <?php
            get_search_form();
            while (have_posts()):
                the_post();

                // Getting the template from the parts/content.php, call it as importing the file here to display the contents.
            
                get_template_part('parts/content', 'search');

            endwhile;
            // Adding the numeric Pagination --------------------------------------
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
        </div>
    </div>
</div>
<!-- ---------------------------------- -->
<?php get_footer(); ?>
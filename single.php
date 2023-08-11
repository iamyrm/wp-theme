<?php get_header(); ?>
<!-- ---------------------------  -->
<div id="primary">
    <div id="main">
        <div class="container">
            <?php
            while (have_posts()):
                the_post();
                // Getting the template from the parts/content.php, call it as importing the file here to display the contents.
            
                get_template_part('parts/content', 'single');

                ?>
                <!-- Applying the simple Pagination for previous post and the next post, There is difference in the spelling ie next_pots_link() not the _posts_.used inside the loop. ----------------------------------------  -->

                <div class="wptheme-pagination">
                    <div class="pages previous">
                        <?php previous_post_link('&laquo; %link '); ?>
                    </div>
                    <div class="pages next">
                        <?php next_post_link('%link &raquo;'); ?>
                    </div>
                </div>
                <?php

                // Checking if comments are allowed or not and then act accordingly 
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
            endwhile;
            ?>
        </div>
    </div>
</div>
<!-- ---------------------------------- -->
<?php get_footer(); ?>
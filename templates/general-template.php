<?php
/*
Template Name: General Template
*/
?>

<?php get_header(); ?>
<!-- 0 -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="general-template">
                    <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                            ?>
                            <article>
                                <h1>
                                    <?php the_title(); ?>
                                </h1>

                                <?php the_content(); ?>
                            </article>
                            <?php
                        endwhile;
                    else: ?>
                        <p>No any posts to display.</p>
                    <?php endif;
                    ?>
                </div>
            </div>
            <!-- Setting uo the loops to display the posts   -->

            <!-- ----------------------  -->
        </main>
    </div>
</div>
<!-- 0 -->
<?php get_footer(); ?>
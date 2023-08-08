<?php get_header(); ?>
<!-- Adding the header image (Better copy the code from https://codex.wordpress.org/Custom_Headers)  -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
    width="<?php echo get_custom_header()->width; ?>" alt="header-images" />

<!-- 0 -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <h1>Blog</h1>
            <div class="container">
                <div class="blog-items">
                    <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                            ?>
                            <article>
                                <h2>
                                    <?php the_title(); ?>
                                </h2>
                                <!-- Displaying the post thumbnail  -->
                                <?php the_post_thumbnail('medium'); ?>
                                <div class="meta-info">
                                    <p>Posted in
                                        <?php echo get_the_date(); ?> | by
                                        <?php the_author_posts_link(); ?>
                                    </p>
                                    <p>Categories:
                                        <?php the_category(' '); ?>
                                    </p>
                                    <p>
                                        <?php the_tags('', ', '); ?>
                                    </p>
                                </div>
                                <?php the_content(); ?>
                                <?php the_excerpt(); ?>
                            </article>
                            <?php
                        endwhile;
                    else: ?>
                        <p>No any posts to display.</p>
                    <?php endif;
                    ?>
                </div>
            </div>
            <!-- Setting up the loops to display the posts   -->

            <!-- ----------------------  -->
        </main>
    </div>
</div>
<!-- 0 -->
<?php get_footer(); ?>
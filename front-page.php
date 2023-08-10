<?php get_header(); ?>
<!-- 0 -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero">
                Hero Section | Yagya
            </section>
            <section class="services">
                <h2>Services</h2>
                <div class="container">
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-1')) {
                            dynamic_sidebar('services-1');
                        }
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-2')) {
                            dynamic_sidebar('services-2');
                        }
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-3')) {
                            dynamic_sidebar('services-3');
                        }
                        ?>
                    </div>
                </div>
            </section>
            <section class="home-blog">
                <h2>Latest News</h2>
                <div class="container">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'category__in' => array(4, 10, 11),
                        'category__not_in' => array(1),
                    );
                    $postlist = new WP_Query($args);
                    if ($postlist->have_posts()):
                        while ($postlist->have_posts()):
                            $postlist->the_post();
                            ?>
                            <article class="latest-news">
                                <!-- Displaying the post thumbnail  -->
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                                <h3>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="meta-info">
                                    <p>
                                        by
                                        <?php the_author_posts_link(); ?> |
                                        Categories:
                                        <?php the_category(' '); ?> |
                                        Tags:
                                        <?php the_tags('', ', '); ?>
                                    </p>
                                    <p>
                                        Posted in
                                        <?php echo get_the_date(); ?>
                                    </p>
                                </div>
                                <?php the_excerpt(); ?>
                            </article>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <p>No any posts to display.</p>
                    <?php endif;
                    ?>
                </div>

                <!-- ----------------------  -->
            </section>
        </main>
    </div>
</div>
<!-- 0 -->
<?php get_footer(); ?>
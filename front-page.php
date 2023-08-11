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

                            // Getting the template from the parts/content.php, call it as importing the file here to display the contents.
                            get_template_part('parts/content','front-page');

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
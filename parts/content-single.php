<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h1>
            <?php the_title(); ?>
        </h1>
        <div class="meta-info">
            <p>Posted in
                <?php echo get_the_date(); ?> | by
                <?php the_author_posts_link(); ?>
            </p>
            <p>Categories:
                <?php the_category(' '); ?>
            </p>
            <p>Tags:
                <?php the_tags('', ', '); ?>
            </p>
        </div>
    </header>
    <div class="content">
        <?php the_content(); ?>
        <!-- Adding Inner Page Post Pagination -->
        <h6>inner page, post pagination added in the demo post</h6>
        <?php wp_link_pages(); ?>
    </div>
</article>
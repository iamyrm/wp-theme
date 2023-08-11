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
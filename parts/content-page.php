<article>
    <header>
        <h1>
            <?php the_title(); ?>
        </h1>
    </header>
    <?php the_content(); ?>
    <!-- Adding Inner Page Post Pagination -->
    <h6>inner page, post pagination added in demo post</h6>
    <?php wp_link_pages(); ?>
</article>
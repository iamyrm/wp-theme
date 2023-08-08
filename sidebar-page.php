<!-- This sidebar was just for practice purpose, This sidebar is added in the page.php file, last to the container  -->


<?php if (is_active_sidebar('sidebar-page')): ?>
    <aside class="sidebar">
        <?php dynamic_sidebar('sidebar-page'); ?>
    </aside>
<?php endif;
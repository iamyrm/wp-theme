<footer class="site-footer">
    <div class="container">
        <div class="copyright">
            <p>
                <!-- Here set_copyright has been called from inc/customizer.php file  -->
                <?php echo get_theme_mod('set_copyright', 'Copyright © X | All Rights Reserved') ?>
            </p>
        </div>
        <nav class="footer-menu">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'wp_theme_footer_menu',
                    'depth' => 1
                )
            ); ?>
        </nav>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>
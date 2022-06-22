<footer class="site-footer">
        <div class="container">
            <div class="copyright">
                <p>All Rights reserved Team Will</p>
            </div>
            <nav class="footer-menu">
                <?php wp_nav_menu(array('theme_location' => 'my_theme_footer_menu', 'depth' => 1)); ?>
            </nav>
        </div>
        </footer>
    <div>
    <?php wp_footer(); ?>
</body>
</html>
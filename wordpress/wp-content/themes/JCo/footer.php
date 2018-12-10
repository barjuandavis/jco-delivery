    <footer class="site-footer">
        <?php wp_footer(); ?>

        <nav class="site-nav">
        <?php 
                $args = array (
                    'theme_location' => 'footer'
                );
        ?>            
        <?php wp_nav_menu(); ?>
        </nav>
        <p>This Wordpress Theme was proudly made by DRiFT.</p>
    </footer>
    </div>
</body>
</html>
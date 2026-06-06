<?php
defined('ABSPATH') || exit;
?>
</main>
<footer class="site-footer">
    <div class="container site-footer__grid">
        <div>
            <h2>Van Ginkel Houtbouw</h2>
            <p>Luxe houtbouw op maat vanuit Terschuur. Voor particulieren en bedrijven in heel Nederland.</p>
        </div>
        <div>
            <h3>Contact</h3>
            <p><a href="tel:0342489760">0342-489760</a><br>Brunesengweg 2<br>3784 WE Terschuur</p>
        </div>
        <div>
            <h3>Navigatie</h3>
            <?php wp_nav_menu(['theme_location' => 'footer', 'container' => false, 'menu_class' => 'footer-nav', 'fallback_cb' => false]); ?>
        </div>
    </div>
    <div class="container site-footer__bottom">
        <span>&copy; <?php echo esc_html(date('Y')); ?> Van Ginkel Houtbouw</span>
        <span>Maatwerk houtbouw met oog voor detail</span>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

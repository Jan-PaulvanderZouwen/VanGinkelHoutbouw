<?php
defined('ABSPATH') || exit;
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content"><?php esc_html_e('Naar inhoud', 'vanginkelhoutbouw'); ?></a>
<header class="site-header">
    <div class="container site-header__inner">
        <a class="site-brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('Van Ginkel Houtbouw home', 'vanginkelhoutbouw'); ?>">
            <span class="site-brand__mark">VG</span>
            <span class="site-brand__text">Van Ginkel Houtbouw</span>
        </a>
        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-nav">
            <span class="screen-reader-text"><?php esc_html_e('Menu openen', 'vanginkelhoutbouw'); ?></span>
            <span></span><span></span>
        </button>
        <nav id="primary-nav" class="primary-nav" aria-label="<?php esc_attr_e('Hoofdmenu', 'vanginkelhoutbouw'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'primary-nav__list',
                'fallback_cb'    => false,
            ]);
            ?>
            <a class="primary-nav__phone" href="tel:0342489760">0342-489760</a>
        </nav>
    </div>
</header>
<main id="main-content" class="site-main">

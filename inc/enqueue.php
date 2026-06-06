<?php
/**
 * Asset loading.
 *
 * @package vanginkelhoutbouw
 */

defined('ABSPATH') || exit;

add_action('wp_enqueue_scripts', function (): void {
    $css_files = [
        'vgh-base'       => '/assets/css/base.css',
        'vgh-layout'     => '/assets/css/layout.css',
        'vgh-components' => '/assets/css/components.css',
        'vgh-templates'  => '/assets/css/templates.css',
    ];

    foreach ($css_files as $handle => $path) {
        wp_enqueue_style($handle, VGH_THEME_URI . $path, [], VGH_THEME_VERSION);
    }

    wp_enqueue_script('vgh-navigation', VGH_THEME_URI . '/assets/js/navigation.js', [], VGH_THEME_VERSION, true);
    wp_enqueue_script('vgh-main', VGH_THEME_URI . '/assets/js/main.js', [], VGH_THEME_VERSION, true);

    if (is_page_template('page-templates/template-home.php') || is_page_template('page-templates/template-configurator.php')) {
        wp_enqueue_script('vgh-three-hero', VGH_THEME_URI . '/assets/js/three-hero.js', [], VGH_THEME_VERSION, true);
    }

    if (is_page_template('page-templates/template-configurator.php')) {
        wp_enqueue_script('vgh-configurator-preview', VGH_THEME_URI . '/assets/js/configurator-preview.js', ['vgh-three-hero'], VGH_THEME_VERSION, true);
    }
});

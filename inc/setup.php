<?php
/**
 * Theme setup.
 *
 * @package vanginkelhoutbouw
 */

defined('ABSPATH') || exit;

add_action('after_setup_theme', function (): void {
    load_theme_textdomain('vanginkelhoutbouw', VGH_THEME_DIR . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('custom-logo');
    add_theme_support('align-wide');

    register_nav_menus([
        'primary' => __('Hoofdmenu', 'vanginkelhoutbouw'),
        'footer'  => __('Footermenu', 'vanginkelhoutbouw'),
    ]);
});

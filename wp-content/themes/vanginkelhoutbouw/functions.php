<?php
/**
 * Theme bootstrap.
 *
 * @package vanginkelhoutbouw
 */

defined('ABSPATH') || exit;

define('VGH_THEME_VERSION', '0.1.0');
define('VGH_THEME_DIR', get_template_directory());
define('VGH_THEME_URI', get_template_directory_uri());

require VGH_THEME_DIR . '/inc/setup.php';
require VGH_THEME_DIR . '/inc/enqueue.php';
require VGH_THEME_DIR . '/inc/helpers.php';
require VGH_THEME_DIR . '/inc/acf-fields.php';

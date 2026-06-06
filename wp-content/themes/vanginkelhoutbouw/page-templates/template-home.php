<?php
/**
 * Template Name: Home
 *
 * @package vanginkelhoutbouw
 */

defined('ABSPATH') || exit;
get_header();

if (have_posts()) : while (have_posts()) : the_post();
    get_template_part('template-parts/sections/hero-3d');
    get_template_part('template-parts/sections/intro');
    get_template_part('template-parts/sections/services');
    get_template_part('template-parts/sections/process');
    get_template_part('template-parts/sections/cta');
endwhile; endif;

get_footer();

<?php
/**
 * Helper functions.
 *
 * @package vanginkelhoutbouw
 */

defined('ABSPATH') || exit;

function vgh_field(string $name, mixed $default = ''): mixed
{
    if (function_exists('get_field')) {
        $value = get_field($name);
        if ($value !== null && $value !== false && $value !== '') {
            return $value;
        }
    }

    return $default;
}

function vgh_esc_field(string $name, string $default = ''): string
{
    return esc_html((string) vgh_field($name, $default));
}

function vgh_button(string $label, string $url, string $style = 'primary'): void
{
    if ($label === '' || $url === '') {
        return;
    }

    printf(
        '<a class="button button--%s" href="%s">%s</a>',
        esc_attr($style),
        esc_url($url),
        esc_html($label)
    );
}

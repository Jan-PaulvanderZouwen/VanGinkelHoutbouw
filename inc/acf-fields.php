<?php
/**
 * Local ACF field groups.
 *
 * @package vanginkelhoutbouw
 */

defined('ABSPATH') || exit;

add_action('acf/init', function (): void {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key' => 'group_vgh_home',
        'title' => 'Van Ginkel - Home',
        'fields' => [
            ['key' => 'field_vgh_hero_kicker', 'label' => 'Kleine bovenregel', 'name' => 'hero_kicker', 'type' => 'text', 'default_value' => 'Van Ginkel Houtbouw'],
            ['key' => 'field_vgh_hero_title', 'label' => 'Hero titel', 'name' => 'hero_title', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Luxe houtbouw, verfijnd tot in detail'],
            ['key' => 'field_vgh_hero_text', 'label' => 'Hero tekst', 'name' => 'hero_text', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Maatwerk houtbouw voor particulieren en bedrijven die kiezen voor kwaliteit, vakmanschap en persoonlijk contact.'],
            ['key' => 'field_vgh_hero_primary_label', 'label' => 'Primaire knop tekst', 'name' => 'hero_primary_label', 'type' => 'text', 'default_value' => 'Bespreek uw project'],
            ['key' => 'field_vgh_hero_primary_url', 'label' => 'Primaire knop URL', 'name' => 'hero_primary_url', 'type' => 'url', 'default_value' => '/contact/'],
            ['key' => 'field_vgh_hero_secondary_label', 'label' => 'Secundaire knop tekst', 'name' => 'hero_secondary_label', 'type' => 'text', 'default_value' => 'Bel 0342-489760'],
            ['key' => 'field_vgh_hero_secondary_url', 'label' => 'Secundaire knop URL', 'name' => 'hero_secondary_url', 'type' => 'text', 'default_value' => 'tel:0342489760'],
            ['key' => 'field_vgh_intro_title', 'label' => 'Intro titel', 'name' => 'intro_title', 'type' => 'text', 'default_value' => 'Houtbouw met rust, precisie en karakter'],
            ['key' => 'field_vgh_intro_text', 'label' => 'Intro tekst', 'name' => 'intro_text', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'default_value' => 'Vanuit Terschuur realiseert Van Ginkel Houtbouw maatwerkprojecten in heel Nederland. Elk project begint met aandacht voor de plek, de wens en de juiste detaillering.'],
            ['key' => 'field_vgh_services_title', 'label' => 'Diensten titel', 'name' => 'services_title', 'type' => 'text', 'default_value' => 'Maatwerk in houtbouw'],
            ['key' => 'field_vgh_services_intro', 'label' => 'Diensten intro', 'name' => 'services_intro', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Van veranda tot buitenverblijf: elk onderdeel wordt ontworpen met oog voor verhouding, materiaal en afwerking.'],
            ['key' => 'field_vgh_cta_title', 'label' => 'CTA titel', 'name' => 'cta_title', 'type' => 'text', 'default_value' => 'Bespreek uw houtbouwproject'],
            ['key' => 'field_vgh_cta_text', 'label' => 'CTA tekst', 'name' => 'cta_text', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Heeft u een idee voor een veranda, buitenverblijf of maatwerkconstructie? We denken graag persoonlijk met u mee.'],
            ['key' => 'field_vgh_cta_button_label', 'label' => 'CTA knop tekst', 'name' => 'cta_button_label', 'type' => 'text', 'default_value' => 'Neem contact op'],
            ['key' => 'field_vgh_cta_button_url', 'label' => 'CTA knop URL', 'name' => 'cta_button_url', 'type' => 'url', 'default_value' => '/contact/'],
        ],
        'location' => [[['param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/template-home.php']]],
    ]);

    acf_add_local_field_group([
        'key' => 'group_vgh_contact',
        'title' => 'Van Ginkel - Contact',
        'fields' => [
            ['key' => 'field_vgh_contact_intro_title', 'label' => 'Titel', 'name' => 'contact_intro_title', 'type' => 'text', 'default_value' => 'Neem contact op'],
            ['key' => 'field_vgh_contact_intro_text', 'label' => 'Intro tekst', 'name' => 'contact_intro_text', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Bespreek uw plannen voor een veranda, buitenverblijf of maatwerkproject.'],
            ['key' => 'field_vgh_contact_phone', 'label' => 'Telefoon', 'name' => 'contact_phone', 'type' => 'text', 'default_value' => '0342-489760'],
            ['key' => 'field_vgh_contact_email', 'label' => 'E-mailadres', 'name' => 'contact_email', 'type' => 'email'],
            ['key' => 'field_vgh_contact_address', 'label' => 'Adres', 'name' => 'contact_address', 'type' => 'textarea', 'rows' => 3, 'default_value' => "Brunesengweg 2\n3784 WE Terschuur"],
            ['key' => 'field_vgh_contact_form_shortcode', 'label' => 'Formulier shortcode', 'name' => 'contact_form_shortcode', 'type' => 'text'],
        ],
        'location' => [[['param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/template-contact.php']]],
    ]);

    acf_add_local_field_group([
        'key' => 'group_vgh_configurator',
        'title' => 'Van Ginkel - 3D configurator',
        'fields' => [
            ['key' => 'field_vgh_configurator_title', 'label' => 'Titel', 'name' => 'configurator_title', 'type' => 'text', 'default_value' => 'Ontwerp uw veranda in 3D'],
            ['key' => 'field_vgh_configurator_intro', 'label' => 'Intro tekst', 'name' => 'configurator_intro', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Stel de basis van uw veranda samen. Deze eerste versie toont de technische basis voor de maatwerk 3D-configurator.'],
        ],
        'location' => [[['param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/template-configurator.php']]],
    ]);
});

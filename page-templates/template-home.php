<?php
/**
 * Template Name: Home
 *
 * @package vanginkelhoutbouw
 */

defined('ABSPATH') || exit;
get_header();
?>
<section class="hero hero--luxury">
    <div class="container hero__grid">
        <div class="hero__content content-flow">
            <p class="eyebrow"><?php echo vgh_esc_field('hero_kicker', 'Van Ginkel Houtbouw'); ?></p>
            <h1><?php echo esc_html((string) vgh_field('hero_title', 'Luxe houtbouw, verfijnd tot in detail')); ?></h1>
            <p class="hero__text"><?php echo esc_html((string) vgh_field('hero_text', 'Maatwerk houtbouw voor particulieren en bedrijven die kiezen voor kwaliteit, vakmanschap en persoonlijk contact.')); ?></p>
            <div class="button-row">
                <?php vgh_button((string) vgh_field('hero_primary_label', 'Bespreek uw project'), (string) vgh_field('hero_primary_url', '/contact/'), 'primary'); ?>
                <?php vgh_button((string) vgh_field('hero_secondary_label', 'Bel 0342-489760'), (string) vgh_field('hero_secondary_url', 'tel:0342489760'), 'ghost'); ?>
            </div>
        </div>
        <div class="hero__visual">
            <div class="three-card">
                <div class="three-canvas" data-vgh-three data-mode="hero" aria-label="3D impressie veranda"></div>
                <div class="three-card__caption">Interactieve 3D impressie</div>
            </div>
        </div>
    </div>
</section>
<section class="section section--intro">
    <div class="container split-block">
        <div>
            <p class="eyebrow">Over Van Ginkel</p>
            <h2><?php echo vgh_esc_field('intro_title', 'Houtbouw met rust, precisie en karakter'); ?></h2>
        </div>
        <div class="content-flow lead-text">
            <?php echo wp_kses_post((string) vgh_field('intro_text', 'Vanuit Terschuur realiseert Van Ginkel Houtbouw maatwerkprojecten in heel Nederland.')); ?>
        </div>
    </div>
</section>
<section class="section section--services">
    <div class="container section-heading">
        <p class="eyebrow">Expertise</p>
        <h2><?php echo vgh_esc_field('services_title', 'Maatwerk in houtbouw'); ?></h2>
        <p><?php echo esc_html((string) vgh_field('services_intro', 'Van veranda tot buitenverblijf: elk onderdeel wordt ontworpen met oog voor verhouding, materiaal en afwerking.')); ?></p>
    </div>
    <div class="container card-grid">
        <article class="service-card"><span class="service-card__line"></span><h3>Luxe veranda's</h3><p>Een verfijnde overgang tussen woning en tuin, afgestemd op stijl en gebruik.</p></article>
        <article class="service-card"><span class="service-card__line"></span><h3>Buitenverblijven</h3><p>Maatwerk buitenruimtes met rust, comfort en uitstraling.</p></article>
        <article class="service-card"><span class="service-card__line"></span><h3>Schuren en bijgebouwen</h3><p>Praktische houtbouw met een hoogwaardige afwerking.</p></article>
    </div>
</section>
<section class="section section--cta">
    <div class="container cta-panel">
        <div>
            <p class="eyebrow">Persoonlijk advies</p>
            <h2><?php echo vgh_esc_field('cta_title', 'Bespreek uw houtbouwproject'); ?></h2>
            <p><?php echo esc_html((string) vgh_field('cta_text', 'Heeft u een idee voor een veranda, buitenverblijf of maatwerkconstructie? We denken graag persoonlijk met u mee.')); ?></p>
        </div>
        <?php vgh_button((string) vgh_field('cta_button_label', 'Neem contact op'), (string) vgh_field('cta_button_url', '/contact/'), 'light'); ?>
    </div>
</section>
<?php get_footer(); ?>

<?php
defined('ABSPATH') || exit;
$show_3d = (bool) vgh_field('hero_3d_enabled', true);
?>
<section class="hero hero--luxury">
    <div class="container hero__grid">
        <div class="hero__content content-flow">
            <p class="eyebrow"><?php echo vgh_esc_field('hero_kicker', 'Van Ginkel Houtbouw'); ?></p>
            <h1><?php echo wp_kses_post(vgh_field('hero_title', 'Luxe houtbouw,<br>verfijnd tot in detail')); ?></h1>
            <p class="hero__text"><?php echo esc_html((string) vgh_field('hero_text', 'Maatwerk houtbouw voor particulieren en bedrijven die kiezen voor kwaliteit, vakmanschap en persoonlijk contact.')); ?></p>
            <div class="button-row">
                <?php vgh_button((string) vgh_field('hero_primary_label', 'Bespreek uw project'), (string) vgh_field('hero_primary_url', '/contact/'), 'primary'); ?>
                <?php vgh_button((string) vgh_field('hero_secondary_label', 'Bel 0342-489760'), (string) vgh_field('hero_secondary_url', 'tel:0342489760'), 'ghost'); ?>
            </div>
        </div>
        <?php if ($show_3d) : ?>
            <div class="hero__visual">
                <div class="three-card">
                    <div class="three-canvas" data-vgh-three data-mode="hero" aria-label="3D impressie veranda"></div>
                    <div class="three-card__caption">Interactieve impressie - vervangbaar door eigen 3D mockup</div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

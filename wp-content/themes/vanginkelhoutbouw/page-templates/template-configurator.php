<?php
/**
 * Template Name: 3D Configurator
 */

defined('ABSPATH') || exit;
get_header();
?>
<section class="section section--page configurator-page">
    <div class="container configurator-shell">
        <div class="configurator-stage">
            <div class="three-card three-card--large">
                <div class="three-canvas" data-vgh-three data-mode="configurator" aria-label="3D veranda configurator"></div>
            </div>
        </div>
        <aside class="configurator-panel content-flow">
            <p class="eyebrow">3D Configurator</p>
            <h1><?php echo vgh_esc_field('configurator_title', 'Ontwerp uw veranda in 3D'); ?></h1>
            <p class="lead-text"><?php echo esc_html((string) vgh_field('configurator_intro', 'Stel de basis van uw veranda samen. Deze eerste versie toont de technische basis voor de maatwerk 3D-configurator.')); ?></p>
            <label>Breedte <input type="range" min="3" max="8" step="0.5" value="5" data-config="width"></label>
            <label>Diepte <input type="range" min="2" max="5" step="0.5" value="3" data-config="depth"></label>
            <label>Houtkleur
                <select data-config="wood">
                    <option value="oak">Warm eiken</option>
                    <option value="dark">Donker thermowood</option>
                    <option value="natural">Naturel hout</option>
                </select>
            </label>
            <label><input type="checkbox" data-config="backwall" checked> Achterwand tonen</label>
            <label><input type="checkbox" data-config="lights" checked> Verlichting tonen</label>
            <a class="button button--primary" href="/contact/">Offerte bespreken</a>
            <p class="small-note"><?php echo esc_html((string) vgh_field('configurator_cta_text', 'Uw configuratie wordt straks gekoppeld aan een offerte-aanvraag.')); ?></p>
        </aside>
    </div>
</section>
<?php get_footer(); ?>

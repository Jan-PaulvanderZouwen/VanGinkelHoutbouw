<?php defined('ABSPATH') || exit; ?>
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

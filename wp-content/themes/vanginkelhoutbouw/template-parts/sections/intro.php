<?php defined('ABSPATH') || exit; ?>
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

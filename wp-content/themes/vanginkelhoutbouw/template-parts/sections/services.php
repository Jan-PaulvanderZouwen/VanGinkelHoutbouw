<?php
defined('ABSPATH') || exit;
$services = vgh_field('services_items', []);
if (empty($services)) {
    $services = [
        ['title' => 'Luxe veranda\'s', 'text' => 'Een verfijnde overgang tussen woning en tuin, afgestemd op stijl en gebruik.'],
        ['title' => 'Buitenverblijven', 'text' => 'Maatwerk buitenruimtes met rust, comfort en uitstraling.'],
        ['title' => 'Schuren en bijgebouwen', 'text' => 'Praktische houtbouw met een hoogwaardige afwerking.'],
    ];
}
?>
<section class="section section--services">
    <div class="container section-heading">
        <p class="eyebrow">Expertise</p>
        <h2><?php echo vgh_esc_field('services_title', 'Maatwerk in houtbouw'); ?></h2>
        <p><?php echo esc_html((string) vgh_field('services_intro', 'Van veranda tot buitenverblijf: elk onderdeel wordt ontworpen met oog voor verhouding, materiaal en afwerking.')); ?></p>
    </div>
    <div class="container card-grid">
        <?php foreach ($services as $service) : ?>
            <article class="service-card">
                <span class="service-card__line"></span>
                <h3><?php echo esc_html($service['title'] ?? 'Maatwerk houtbouw'); ?></h3>
                <p><?php echo esc_html($service['text'] ?? ''); ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

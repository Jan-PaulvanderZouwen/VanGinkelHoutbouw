<?php
$steps = vgh_field('process_items', []);
if (empty($steps)) {
    $steps = [
        ['title' => 'Kennismaking', 'text' => 'We bespreken wensen, locatie, stijl en praktische mogelijkheden.'],
        ['title' => 'Ontwerp en advies', 'text' => 'Materiaal, afwerking en verhoudingen worden zorgvuldig gekozen.'],
        ['title' => 'Realisatie', 'text' => 'De uitvoering wordt strak gepland en verfijnd afgewerkt.'],
    ];
}
?>
<section class="section section--process">
    <div class="container process-grid">
        <div>
            <p class="eyebrow">Werkwijze</p>
            <h2><?php echo vgh_esc_field('process_title', 'Een zorgvuldig proces van idee tot oplevering'); ?></h2>
        </div>
        <div class="process-list">
            <?php foreach ($steps as $index => $step) : ?>
                <article class="process-item">
                    <span><?php echo esc_html(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?></span>
                    <div>
                        <h3><?php echo esc_html($step['title'] ?? 'Stap'); ?></h3>
                        <p><?php echo esc_html($step['text'] ?? ''); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

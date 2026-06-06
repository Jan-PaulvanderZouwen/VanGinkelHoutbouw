<?php
/**
 * Template Name: Contact
 */

defined('ABSPATH') || exit;
get_header();
?>
<section class="section section--page contact-page">
    <div class="container contact-grid">
        <div class="content-flow">
            <p class="eyebrow">Contact</p>
            <h1><?php echo vgh_esc_field('contact_intro_title', 'Neem contact op'); ?></h1>
            <p class="lead-text"><?php echo esc_html((string) vgh_field('contact_intro_text', 'Bespreek uw plannen voor een veranda, buitenverblijf of maatwerkproject.')); ?></p>
            <div class="contact-card">
                <p><strong>Telefoon</strong><br><a href="tel:<?php echo esc_attr(preg_replace('/\D+/', '', (string) vgh_field('contact_phone', '0342-489760'))); ?>"><?php echo vgh_esc_field('contact_phone', '0342-489760'); ?></a></p>
                <?php if (vgh_field('contact_email')) : ?><p><strong>E-mail</strong><br><a href="mailto:<?php echo esc_attr((string) vgh_field('contact_email')); ?>"><?php echo esc_html((string) vgh_field('contact_email')); ?></a></p><?php endif; ?>
                <p><strong>Adres</strong><br><?php echo nl2br(esc_html((string) vgh_field('contact_address', "Brunesengweg 2\n3784 WE Terschuur"))); ?></p>
            </div>
        </div>
        <div class="form-panel">
            <?php
            $shortcode = (string) vgh_field('contact_form_shortcode', '');
            if ($shortcode !== '') {
                echo do_shortcode($shortcode);
            } else {
                echo '<p class="form-placeholder">Plaats hier later de shortcode van het contactformulier via ACF.</p>';
            }
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>

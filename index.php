<?php
defined('ABSPATH') || exit;
get_header();
?>
<section class="section section--page">
    <div class="container narrow content-flow">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>
<?php get_footer(); ?>

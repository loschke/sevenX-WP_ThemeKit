<?php
/*
 * Template Name: Full Width without sidebar
 * Description: Page template without sidebar
 */
?>

<?php get_header(); ?>

    <main role="main" class="full-content">
        <!-- section -->
        <section>

            <h1><?php _e( 'Latest Posts', 'sevenx-theme' ); ?></h1>

            <?php get_template_part('loop'); ?>

            <?php get_template_part('template-parts/pagination'); ?>

        </section>
        <!-- /section -->
    </main>

<?php get_footer(); ?>
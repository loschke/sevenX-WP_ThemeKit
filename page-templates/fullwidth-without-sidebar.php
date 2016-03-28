<?php
/*
 * Template Name: Full Width without Sidebar
 * Description: Page template without sidebar
 */
__( 'Full Width without Sidebar', 'sevenx-theme' );
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
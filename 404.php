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

            <h1><?php _e( '404 Page not found', 'sevenx-theme' ); ?></h1>

            <?php get_template_part( 'template-parts/searchform' );?>

        </section>
        <!-- /section -->
    </main>

<?php get_footer(); ?>
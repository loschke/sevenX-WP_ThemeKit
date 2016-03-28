<?php
/**
 * Template Name: Archive Page
 * Description: A custom archive page with categories, tags, latest posts and a monthly archive
 */
__( 'Archive Page', 'sevenx-theme' );
?>

<?php get_header(); ?>

    <main role="main" class="main-content">
        <!-- section -->
        <section>

        <?php get_template_part( 'template-parts/content', 'archive' );?>
            
        </section>
        <!-- /section -->
    </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

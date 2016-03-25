<?php get_header(); ?>

    <main role="main" class="main-content">
        <!-- section -->
        <section>

            <h1><?php wp_title();?></h1>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'search' );?>

    <?php
    endwhile;
    endif;
    ?>
        </section>
        <!-- /section -->
    </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

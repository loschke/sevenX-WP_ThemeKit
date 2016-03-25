<?php get_header(); ?>

    <main role="main" class="main-content">
        <!-- section -->
        <section>
            

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        
        <h1><?php the_title();?></h1>

        <?php get_template_part( 'template-parts/content', 'page' );?>

    <?php
    endwhile;
    endif;
    ?>
        </section>
        <!-- /section -->
    </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

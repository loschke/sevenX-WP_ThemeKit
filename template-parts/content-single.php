<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- post thumbnail -->
    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
        </a>
    <?php endif; ?>
    <!-- /post thumbnail -->

    <!-- /post title -->
    <?php the_content();?>
    <?php comments_template( '', true ); // Remove if you don't want comments ?>
    <!-- post details -->
    <span class="date">
                <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
                    <?php the_date(); ?> <?php the_time(); ?>
                </time>
            </span>
    <span class="author"><?php _e( 'Published by', 'sevenx-theme' ); ?> <?php the_author_posts_link(); ?></span>
    <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'sevenx-theme' ), __( '1 Comment', 'sevenx-theme' ), __( '% Comments', 'sevenx-theme' )); ?></span>
    <!-- /post details -->
    
    <?php edit_post_link(); ?>

</article>
<!-- /article -->
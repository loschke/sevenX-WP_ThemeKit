<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- post meta -->
    <span class="date">
        <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
            <?php the_date(); ?> <?php the_time(); ?>
        </time>
    </span>

    <span class="author"><?php _e( 'Published by', 'sevenx-theme' ); ?> <?php the_author_posts_link(); ?></span>

    <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'sevenx-theme' ), __( '1 Comment', 'sevenx-theme' ), __( '% Comments', 'sevenx-theme' )); ?></span>
    
    <?php
    if(get_the_category_list()) {
        _e( 'Categories', 'sevenx-theme' );
        echo get_the_category_list();     // list post categories
    } ?>
    <hr>
    <!-- /post meta -->

    <!-- post thumbnail -->
    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
        <?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
    <?php endif; ?>
    <!-- /post thumbnail -->

    <?php the_content();?> <!-- post content -->

    <?php wp_link_pages(); ?> <!-- post pagination -->

    <!-- post tags -->
    <?php
    if(get_the_tag_list()) {
        _e( 'Tags', 'sevenx-theme' );
        echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
    } ?>
    <hr>
    <!-- /post tags -->

    <!-- comment details -->
    <?php comments_template( '', true ); // Remove if you don't want comments ?>
    <!-- /comment details -->

</article>
<!-- /article -->

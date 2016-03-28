<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- archive tags -->
    <h2><?php _e('Filter by Categories:', 'sevenx-theme') ?></h2>
    <div class ="archive-categorie">
        <?php wp_list_categories('title_li='); ?>
    </div>
    
    <!-- archive tags -->
    <h2><?php _e('Filter by Tags:', 'sevenx-theme') ?></h2>
    <div class ="archive-tags">
        <?php wp_tag_cloud('orderby=count&number=30'); ?>
    </div>

    <!-- latest post list -->
    <h2><?php _e('The Latest 30 Posts:', 'sevenx-theme') ?></h2>
    <ul class="latest-posts-list">
        <?php wp_get_archives('type=postbypost&limit=30'); ?>
    </ul>

    <!-- monthly archive list -->
    <h2><?php _e('The Monthly Archives:', 'sevenx-theme') ?></h2>
    <ul class="monthly-archive-list">
        <?php wp_get_archives('type=monthly'); ?>
    </ul>

</article>
<!-- /article -->

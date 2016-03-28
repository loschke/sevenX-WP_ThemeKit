<!-- sidebar -->
<aside class="sidebar" role="complementary">

    <!-- standard searchform -->
    <?php get_template_part( 'template-parts/searchform' );?>
    
    <!-- sidebar widget area -->
    <div class="sidebar-widget">
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-widget')) ?>
    </div>
    <!-- /sidebar widget area -->

</aside>
<!-- /sidebar -->

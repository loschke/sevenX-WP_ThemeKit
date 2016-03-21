<!-- footer -->
<footer class="footer" role="contentinfo">

    <!-- copyright -->
    <p class="copyright">
        &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'sevenx-theme'); ?>
        <a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//sevenx.de" title="Blank Wordpress Theme by sevenX">Blank Wordpress Theme by sevenX</a>.
    </p>
    <!-- /copyright -->

    <!-- footer widget area -->
    <div class="footer-widget">
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget')) ?>
    </div>
    <!-- /footer widget area -->

</footer>
<!-- /footer -->

</div>
<!-- /wrapper -->

<?php wp_footer(); ?>

</body>
</html>
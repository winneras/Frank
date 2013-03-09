<?php
/**
 * @package Frank
 */
?>
</div>
<?php if (is_active_sidebar("widget-footer")) : ?>
    <div id="page-bottom" class="clearfix">
        <footer id="page-footer" class="container" role="contentinfo">	
            <div class="row">
                <?php if (!dynamic_sidebar("Footer")) : ?>

                <?php endif; ?>
            </div>
            <div class="row">
                <div id="legal" class="clearfix">
                    <p>
                        Powered by <a href="http://wordpres.org/" target="_blank" rel="nofollow">Wordpress</a> <br>
                        Theme designed base on <a href="https://github.com/winneras/Frank/" target="_blank" rel="nofollow">Frank</a>.
                    </p>
                </div>
            </div>
        </footer>
    </div>
<?php endif; ?>
<?php wp_footer(); ?>
<!--<?php echo get_num_queries(); ?> queries in <?php timer_stop(1); ?> seconds.-->
</body>
</html>
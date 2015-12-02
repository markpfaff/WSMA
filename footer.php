            </div><!-- /class container -->



            <footer class="content-info">
                
                <div class="container">
                    <div class="row">
                        <div class="footer-brand-container">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-w.png" alt="logo" class="logo-footer"/>
                            </a>
                            <h3>West Side Music Academy</h3>
                        </div>
                    </div>
                  <div class="row distribute-widgets">
                      <?php dynamic_sidebar( 'footer'); ?>
                  </div>                    
                </div>
                <ul>
                    <li><?php print ("&copy; " . date ('Y') . " "); ?> &nbsp|&nbsp WSMA &nbsp|&nbsp Design by SCC Group 8</li>
                </ul>
                    <?php wp_loginout(); ?>

            </footer>

        <script src="//localhost:35729/livereload.js"></script>

        <!-- Flex Slider -->
        <script type="text/javascript" charset="utf-8">
        (function($) {
            $(window).load(function() {
            $('.flexslider').flexslider();
            });
            
            var footer_widgets = $('.row.distribute-widgets > .widget'),
            widget_count = footer_widgets.length,
            col_num = Math.floor(12 / widget_count);

            footer_widgets.each(function(index, val) {
              $(this).addClass('col-sm-' + col_num);
            });

        })(jQuery);

        </script><!-- / Flex Slider -->
        <?php wp_footer(); ?>
    </body>
</html>

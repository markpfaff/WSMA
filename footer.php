            </div><!-- /class all-main-containers container -->



            <footer class="content-info">
                
                <div class="container">
                    <div class="row">
                        <div class="footer-brand-container">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-w.png" alt="logo" class="logo-footer"/>
                            </a>
                            <h3>West Side Music Academy</h3>
                        </div>
                    
                  <div class="row distribute-widgets">
                      <?php dynamic_sidebar( 'footer'); ?>
                  </div>           
                    <?php dynamic_sidebar( 'footer-copyright'); ?>
                    </div>
                </div>
                <span class="login-link"><?php wp_loginout(); ?></span>

            </footer>

<!--        <script src="//localhost:35729/livereload.js"></script>-->

        <?php wp_footer(); ?>
    </body>
</html>

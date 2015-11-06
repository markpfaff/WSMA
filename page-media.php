<?php get_header(); ?>



<!-- content start -->
<div id="container" class="page">
    
                <div class="container col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="<?php esc_url( get_permalink( get_page_by_title( 'Audio' ) ) ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/news.png" alt="Listen to audio"/>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="<?php esc_url( get_permalink( get_page_by_title( 'Video' ) ) ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/media.png" alt="Watch Videos"/>        
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="<?php esc_url( get_permalink( get_page_by_title( 'Photos' ) ) ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/testimonials.png" alt="Look at Photos"/>        
                            </a>
                        </div>
                    </div><!--/row-->
                </div><!--/container-->   
                        	<!-- sidebar -->
            <?php get_sidebar( 'primary' ); ?>
            <!-- /sidebar -->
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <h1 class="col-md-9 page-title"><?php the_title(); ?></h1>
        <article class="page col-md-10" id="post-<?php the_ID(); ?>">
            <div class="entry">
            <?php the_content('<p class="serif">More &raquo;</p>'); ?>
        	</div>
        </article>
        <?php endwhile; else:?>
        <article class="page col-md-9 not-found">
            <div class="entry">
                <p class="lead"><?php _e('Sorry, this page does not exist. Try searching for one.'); ?></p>
                <?php get_search_form(); ?>
            </div>
        </article>
        <?php endif; ?>
        

    </div><!-- /row -->
</div><!-- /container -->

<small class="small-label">page-media.php</small>

<?php get_footer(); ?>

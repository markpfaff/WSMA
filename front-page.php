<?php get_header(); ?>


                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <?php $media_page = get_post(12); ?>

                            <a href="<?php echo get_permalink($media_page->ID); ?>">

                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner.jpg" alt="banner image"/>
                            </a>
                        </li>
                    </ul>
                </div><!--/flexslider-->
                
                <div class="container">
                    <div class="row clearboth">
                        <div class="col-md-4">
                            <a href="<?php esc_url( get_permalink( get_page_by_title( 'News' ) ) ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/news.png" alt="Read latest news"/>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="<?php esc_url( get_permalink( get_page_by_title( 'Media' ) ) ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/media.png" alt="Watch latest media"/>        
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="<?php esc_url( get_permalink( get_page_by_title( 'Testimonials' ) ) ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/testimonials.png" alt="Read what people are saying"/>        
                            </a>
                        </div>
                    </div><!--/row-->
                </div><!--/container-->    
                <div><!--about-->

                    <div class="col-md-8"><!--about text-->
                    <?php echo get_the_excerpt(); ?>

                    <?php 
                        query_posts("page_id=5");
                        while ( have_posts() ) : the_post()
                    ?>
                        <h1><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h1>
                        <?php the_excerpt(); ?>

                    <?php
                        endwhile; 
                        wp_reset_query();
                    ?>  
                    </div><!--/about text-->
                    <div class="col-md-4"><!--about img-->
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/about.png" alt="About"/>
                    </div><!--/about img-->
                </div><!--/about-->   
                
            </div>
<small class="small-label">front-page.php</small>


<?php get_footer(); ?>

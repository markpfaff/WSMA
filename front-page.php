<?php get_header(); ?>


                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <?php $media_page = get_post(12); ?>

                            <a href="<?php echo get_permalink($media_page->ID); ?>">

                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner.png" alt="banner image"/>
                            </a>
                        </li>
                    </ul>
                </div><!--/flexslider-->
                
                <div id="content" class="home-content page">
                <div class="cta1">
                    <?php $news_page = get_post(1); ?>
                    <a href="<?php echo get_permalink($news_page->ID); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/news.png" alt="Read latest news"/>
                    </a>
                </div>
                <div class="cta2">
                    <?php $media_page = get_post(1); ?>
                    <a href="<?php echo get_permalink($media_page->ID); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/media.png" alt="Watch latest media"/>        
                    </a>
                </div>
                <div class="cta3">
                    <?php $testimonials_page = get_post(1); ?>
                    <a href="<?php echo get_permalink($testimonials_page->ID); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/testimonials.png" alt="Read what people are saying"/>        
                    </a>
                </div>
                    
                <div><!--about-->
                    <div><!--about img-->
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/about.png" alt="About"/>
                    </div><!--/about img-->
                    <div><!--about text-->
                    <?php echo get_the_excerpt(); ?>

                    <?php 
                        query_posts("page_id=6");
                        while ( have_posts() ) : the_post()
                    ?>
                        <h1><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h1>
                        <?php the_excerpt(); ?>

                    <?php
                        endwhile; 
                        wp_reset_query();
                    ?>  
                    </div><!--/about text-->
                </div><!--/about-->   
                
            </div>
<small>front-page.php</small>


<?php get_footer(); ?>

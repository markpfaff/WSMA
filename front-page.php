<?php get_header(); ?>

                <div class="container">
                    <div class="row home-row">
                        <div class="flexslider col-xsm-12">
                            <div class="flexslider-caption">
                                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Enroll' ) ) ); ?>">
                                    
                                    <?php 
                                        $captionquery = new WP_Query(array( 'name' => 'home', 'post_type' => 'page' ));
                                        //echo $captionquery->get_the_title();
                                        while ( $captionquery->have_posts() ) : $captionquery->the_post();
                                    ?>
                                        <?php echo the_excerpt(); ?>

                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    ?>       
                                </a>
                            </div>
                            <ul class="slides">
                                <li>
                                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Enroll' ) ) ); ?>">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner.png" alt="banner image"/>
                                    </a>
                                </li>
<!--                                <li>
                                    <a href="<?php //echo esc_url( get_permalink( get_page_by_title( 'Classes' ) ) ); ?>">
                                        <img src="<?php //echo esc_url( get_template_directory_uri() ); ?>/images/banner2.jpg" alt="banner image"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php //echo esc_url( get_permalink( get_page_by_title( 'Classes' ) ) ); ?>">
                                        <img src="<?php //echo esc_url( get_template_directory_uri() ); ?>/images/banner3.jpg" alt="banner image"/>
                                    </a>
                                </li>-->
                            </ul>

                        </div><!--/flexslider-->

                        <div class="flexslider-bottom-caption">
                            <div class="flexslider-bottom-caption-inner">
                                <?php 
                                    $captionquery = new WP_Query(array( 'name' => 'about', 'post_type' => 'page' ));
                                    //echo $captionquery->get_the_title();
                                    while ( $captionquery->have_posts() ) : $captionquery->the_post();
                                ?>
                                    <?php echo the_excerpt(); ?>

                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                ?>  
                            </div>
                            <div class="flexslider-button">
                                <a href="<?php echo get_page_link( get_page_by_title( 'about' )->ID ); ?>">
                                    <button type="button" class="btn btn-info btn-block">See More</button>
                                </a>
                            </div>
                        </div>
                    </div><!--/row-->
                </div><!--/container-->                 
                <div class="container">
                    <div class="row home-row home-cta-row">
                        <div class="home-ctas">
                            <div class="home-ctas-inner">
                                <?php 
                                    $newsquery = new WP_Query(array( 'name' => 'news', 'post_type' => 'page' ));
                                    echo $newsquery->get_the_title();
                                    while ( $newsquery->have_posts() ) : $newsquery->the_post();
                                ?>
                                    <h2>Latest News</h2>
                                    <?php echo the_excerpt(); ?>

                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                ?>  
                            </div>
                        </div>
                        <div class="home-ctas">
                            <div class="home-ctas-inner">
                                <h2>Latest Media</h2>
                                <div class="row home-row">
                                    <a href="<?php esc_url( get_permalink( get_page_by_title( 'Photos' ) ) ); ?>">
                                        <span class="pull-left latest-thumb">
                                                <?php 
                                                     $mediaquery = new WP_Query(array( 'name' => 'photos', 'post_type' => 'page' ));

                                                     while ( $mediaquery->have_posts() ) : $mediaquery->the_post();
                                                 ?>
                                                 <?php the_post_thumbnail( 'thumbnail' ); ?>

                                                 <?php
                                                     endwhile;
                                                     wp_reset_postdata();
                                                 ?>  

                                        </span>
                                        <h3 class="pull-left">Latest Photos</h3>  
                                    </a>
                                </div><!--/row-->
                                <div class="row home-row">
                                    <a href="<?php esc_url( get_permalink( get_page_by_title( 'Video' ) ) ); ?>">
                                        <span class="pull-left latest-thumb">
                                            <?php 
                                                 $mediaquery = new WP_Query(array( 'name' => 'video', 'post_type' => 'page' ));

                                                 while ( $mediaquery->have_posts() ) : $mediaquery->the_post();
                                             ?>
                                             <?php the_post_thumbnail( 'thumbnail' ); ?>

                                             <?php
                                                 endwhile;
                                                 wp_reset_postdata();
                                             ?>                                      
                                        </span>
                                        <h3 class="pull-left">Latest Video</h3> 
                                    </a>
                                </div><!--/row-->
                                <div class="row home-row">
                                    <a href="<?php esc_url( get_permalink( get_page_by_title( 'Audio' ) ) ); ?>">
                                        <span class="pull-left latest-thumb">
                                            <?php 
                                                 $mediaquery = new WP_Query(array( 'name' => 'audio', 'post_type' => 'page' ));

                                                 while ( $mediaquery->have_posts() ) : $mediaquery->the_post();
                                             ?>
                                             <?php the_post_thumbnail( 'thumbnail' ); ?>

                                             <?php
                                                 endwhile;
                                                 wp_reset_postdata();
                                             ?>       
                                        </span>
                                        <h3 class="pull-left">Latest Audio</h3>   
                                    </a>  
                                </div><!--/row-->
                            </div>
                        </div>
                        <div class="home-ctas">
                            <div class="home-ctas-inner">
                                <a href="<?php esc_url( get_permalink( get_page_by_title( 'Classes' ) ) ); ?>">
                                    <h2>Classes</h2>
                                </a>

                                    <ul>
                                        <li>
                                            <a href="<?php esc_url( get_permalink( get_page_by_title( 'Guitar' ) ) ); ?>">
                                            Guitar Lessons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php esc_url( get_permalink( get_page_by_title( 'Voice' ) ) ); ?>">
                                            Voice Lessons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php esc_url( get_permalink( get_page_by_title( 'Piano' ) ) ); ?>">
                                            Piano Lessons
                                            </a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                    </div><!--/row-->
                </div><!--/container--> 
                <div class="container">
                    <div class="home-row home-about-row"><!--about-->

                        <div class="home-about"><!--about text-->

                        <?php 
                            $aboutquery = new WP_Query(array( 'name' => 'about', 'post_type' => 'page' ));

                            while ( $aboutquery->have_posts() ) : $aboutquery->the_post();
                        ?>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                            <?php echo the_excerpt(); ?>

                        <?php
                            endwhile;
                            wp_reset_postdata();
                        ?>  
                        </div><!--/about text-->
                        <div class="home-youtube"><!--about img-->
                            <iframe class="home-youtube-inner" src="https://www.youtube.com/embed/a1Y73sPHKxw" frameborder="0" allowfullscreen></iframe>
                        </div><!--/about img-->
                    </div><!--/about-->   
                </div>
            </div>
<small class="small-label">front-page.php</small>


<?php get_footer(); ?>

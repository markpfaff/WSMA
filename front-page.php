<?php get_header(); ?>

                <div class="container">
                    <div class="row home-row">
                        <div class="home-banner">
                            <?php 
                                $captionquery = new WP_Query(array( 'name' => 'home', 'post_type' => 'page' ));
                                //echo $captionquery->get_the_title();
                                while ( $captionquery->have_posts() ) : $captionquery->the_post();
                            ?>
                            <a href="<?php echo the_permalink(); ?>">
                                <?php the_post_thumbnail(  'full', array( 'class' => 'home-banner-img' ) ); ?>                                    
                            </a>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            ?>    

                            <div class="home-banner-caption">
                                <div class="home-banner-caption-inner">
                                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Enroll' ) ) ); ?>">


                                            <?php echo the_content(); ?>


                                    </a>
                                </div><!--/home-banner caption inner-->
                            </div><!--/home-banner caption-->
                        </div><!--/home-banner-->

                        <div class="home-banner-bottom-caption">
                            <div class="home-banner-bottom-caption-inner">
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
                            </div>
                            <div class="home-banner-button">
                                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'about' ))); ?>">
                                    <button type="button" class="btn btn-info btn-block">See More</button>
                                </a>
                            </div>
                        </div>
                    </div><!--/row-->
                <div class="container">
                    <div class="row home-row home-cta-row">
                        <div class="home-ctas">
                                <?php 
                                    $newsquery = new WP_Query(array( 'name' => 'home-latest-news', 'post_type' => 'page' ));
                                    
                                    while ( $newsquery->have_posts() ) : $newsquery->the_post();
                                ?>
                                    <h2>Latest News</h2>
                                    <?php echo the_content(); ?>

                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                ?>  
                        </div>
                        <div class="home-ctas">
                                <h2>Latest Media</h2>
                                <div class="home-latest-row">
                                                <?php 
                                                     $mediaquery = new WP_Query(array( 'name' => 'photos', 'post_type' => 'page' ));

                                                     while ( $mediaquery->have_posts() ) : $mediaquery->the_post();
                                                 ?>                                    
                                    <a href="<?php esc_url( the_permalink()); ?>">
                                        <span class="latest-thumb">

                                                 <?php the_post_thumbnail( 'thumbnail' ); ?>

                                                 <?php
                                                     endwhile;
                                                     wp_reset_postdata();
                                                 ?>  

                                        </span>
                                        <h3>Latest Photos</h3>  
                                    </a>
                                </div><!--/row-->
                                <div class="home-latest-row">
                                            <?php 
                                                 $mediaquery = new WP_Query(array( 'name' => 'video', 'post_type' => 'page' ));

                                                 while ( $mediaquery->have_posts() ) : $mediaquery->the_post();
                                             ?>
                                    <a href="<?php esc_url( the_permalink()); ?>">
                                        <span class="latest-thumb">

                                             <?php the_post_thumbnail( 'thumbnail' ); ?>

                                             <?php
                                                 endwhile;
                                                 wp_reset_postdata();
                                             ?>                                      
                                        </span>
                                        <h3>Latest Video</h3> 
                                    </a>
                                </div><!--/row-->
                                <div class="home-latest-row">
                                            <?php 
                                                 $mediaquery = new WP_Query(array( 'name' => 'audio', 'post_type' => 'page' ));

                                                 while ( $mediaquery->have_posts() ) : $mediaquery->the_post();
                                             ?>
                                    <a href="<?php esc_url( the_permalink()); ?>">
                                        <span class="latest-thumb">

                                             <?php the_post_thumbnail( 'thumbnail' ); ?>

                                             <?php
                                                 endwhile;
                                                 wp_reset_postdata();
                                             ?>       
                                        </span>
                                        <h3>Latest Audio</h3>   
                                    </a>  
                                </div><!--/row-->
                        </div>
                        <div class="home-ctas">
                                <?php 
                                    $anouncequery = new WP_Query(array( 'name' => 'home-announcements', 'post_type' => 'page' ));
                                    
                                    while ( $anouncequery->have_posts() ) : $anouncequery->the_post();
                                ?>
                                    <h2>Anouncements:</h2>
                                    <?php echo the_content(); ?>

                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                ?>  
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
                                <?php 
                                    $videoquery = new WP_Query(array( 'name' => 'home-video', 'post_type' => 'page' ));
                                    
                                    while ( $videoquery->have_posts() ) : $videoquery->the_post();
                                ?>
                                    <?php echo the_content(); ?>

                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                ?>
                        </div><!--/about img-->
                    </div><!--/about-->   
                </div>
            </div>
<!--<small class="small-label">front-page.php</small>-->


<?php get_footer(); ?>

<?php
/*
Template Name: Classes Main Page
*/
?>
<?php get_header(); ?>

<!-- content start -->
<div id="container" class="page">
    <div class="row">
        <!-- sidebar -->
        <?php get_sidebar( 'primary' ); ?>
        <!-- /sidebar -->
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <h1 class="col-md-9 page-title"><?php the_title(); ?></h1>
        <article class="page col-md-9" id="post-<?php the_ID(); ?>">
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
            <div class="container col-md-9">
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'bass', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php echo the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                            <?php endwhile; wp_reset_postdata(); ?>      
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'brass', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                            <?php endwhile; wp_reset_postdata(); ?>      
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'drums', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                            <?php endwhile; wp_reset_postdata(); ?>      
                        </a>
                    </div>
                </div><!--/row-->
            </div><!--/container--> 
                        <div class="container col-md-9">
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'group-classes', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                            <?php endwhile; wp_reset_postdata(); ?>      
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'guitar', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                            <?php endwhile; wp_reset_postdata(); ?>      
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'multiple-instruments', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                            <?php endwhile; wp_reset_postdata(); ?>      
                        </a>
                    </div>
                </div><!--/row-->
            </div><!--/container--> 
            <div class="container col-md-9">
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                         <?php $thumbquery = new WP_Query(array( 'name' => 'piano', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                            <?php endwhile; wp_reset_postdata(); ?>      
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'pianovoice', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                            <?php endwhile; wp_reset_postdata(); ?>      
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'strings', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                            <?php endwhile; wp_reset_postdata(); ?>      
                        </a>
                    </div>
                </div><!--/row-->
            </div><!--/container--> 
            <div class="container col-md-9">
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'voice', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                            <?php endwhile; wp_reset_postdata(); ?>      
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'woodwinds', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                            <?php endwhile; wp_reset_postdata(); ?>      
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'misc', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                            <?php endwhile; wp_reset_postdata(); ?>      
                        </a>
                    </div>

                </div><!--/row-->
            </div><!--/container--> 

    </div><!-- /row -->
</div><!-- /container -->

<small class="small-label">page-class-main.php</small>

<?php get_footer(); ?>
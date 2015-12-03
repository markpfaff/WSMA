<?php
/*
Template Name: Classes Main Page
*/
?>
<?php get_header(); ?>

<!-- content start -->
<div  class="container">
    <div class="row">

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <h1 class="col-md-9 page-title"><?php the_title(); ?></h1>
        <article class="page page-intro-p" id="post-<?php the_ID(); ?>">
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
                        <!-- sidebar -->
        <?php get_sidebar( 'primary' ); ?>
        <!-- /sidebar -->
            <div class="container main-thumb-container">
                <div class="row">
                    <div class="main-thumb">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'bass', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php echo the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                        </a>
                        
                        <h4 class="thumb-title"><?php the_title(); ?></h4>
                        <?php endwhile; wp_reset_postdata(); ?> 
                    </div>
                    <div class="main-thumb">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'brass', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                        </a>
                        
                        <h4 class="thumb-title"><?php the_title(); ?></h4>
                        <?php endwhile; wp_reset_postdata(); ?> 
                    </div>
                    <div class="main-thumb">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'drums', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                        </a>
                        
                        <h4 class="thumb-title"><?php the_title(); ?></h4>
                        <?php endwhile; wp_reset_postdata(); ?> 
                    </div>
<!--                </div>/row
            </div>/container 
            <div class="container main-thumb-container">
                <div class="row">-->
                    <div class="main-thumb">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'group-classes', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                        </a>
                        
                        <h4 class="thumb-title"><?php the_title(); ?></h4>
                        <?php endwhile; wp_reset_postdata(); ?> 
                    </div>
                    <div class="main-thumb">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'guitar', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                        </a>
                        
                        <h4 class="thumb-title"><?php the_title(); ?></h4>
                        <?php endwhile; wp_reset_postdata(); ?> 
                    </div>
                    <div class="main-thumb">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'multiple-instruments', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                        </a>
                        
                        <h4 class="thumb-title"><?php the_title(); ?></h4>
                        <?php endwhile; wp_reset_postdata(); ?> 
                    </div>
               <!--  </div><!--/row-->
<!--            </div>/container -->
<!--           <div class="container main-thumb-container">
                <div class="row">-->
                    <div class="main-thumb">
                         <?php $thumbquery = new WP_Query(array( 'name' => 'piano', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                        </a>
                        
                        <h4 class="thumb-title"><?php the_title(); ?></h4>
                        <?php endwhile; wp_reset_postdata(); ?> 
                    </div>
                    <div class="main-thumb">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'pianovoice', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                        </a>
                        
                        <h4 class="thumb-title"><?php the_title(); ?></h4>
                        <?php endwhile; wp_reset_postdata(); ?> 
                    </div>
                    <div class="main-thumb">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'strings', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                        </a>
                        
                        <h4 class="thumb-title"><?php the_title(); ?></h4>
                        <?php endwhile; wp_reset_postdata(); ?> 
                    </div>
<!--                </div>/row
            </div>/container 
            <div class="container main-thumb-container">
                <div class="row">-->
                    <div class="main-thumb">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'voice', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                        </a>
                        
                        <h4 class="thumb-title"><?php the_title(); ?></h4>
                        <?php endwhile; wp_reset_postdata(); ?> 
                    </div>
                    <div class="main-thumb">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'woodwinds', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                        </a>
                        
                        <h4 class="thumb-title"><?php the_title(); ?></h4>
                        <?php endwhile; wp_reset_postdata(); ?> 
                    </div>
                    <div class="main-thumb">
                        <?php $thumbquery = new WP_Query(array( 'name' => 'misc', 'post_type' => 'page' ));
                               while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                        
                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                        </a>
                        
                        <h4 class="thumb-title"><?php the_title(); ?></h4>
                        <?php endwhile; wp_reset_postdata(); ?> 
                    </div>

                </div><!--/row-->
            </div><!--/container--> 

    </div><!-- /row -->
</div><!-- /container -->

<small class="small-label">page-class-main.php</small>

<?php get_footer(); ?>
<?php
/*
Template Name: Media Page
*/
?>
<?php get_header(); ?>



<!-- content start -->
<div class="container media-thumb-container">
    <div class="row">
    
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <h1 class="col-sm-9"><?php the_title(); ?></h1>
        <div class="container clearboth">
            <div class="row">
                <!-- sidebar -->
                <?php get_sidebar( 'primary' ); ?>
                <!-- /sidebar --> 
                        <div class="main-thumb">
                    <?php $thumbquery = new WP_Query(array( 'name' => 'audio', 'post_type' => 'page' ));
                           while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>

                    <a href="<?php the_permalink(); ?>">

                        <?php the_post_thumbnail( 'medium' ); ?>

                        <?php endwhile; wp_reset_postdata(); ?>      
                    
                            <span class="media-category-title">Audio</span>
                    </a>
                </div>

                <div class="main-thumb">
                    <?php $thumbquery = new WP_Query(array( 'name' => 'photos', 'post_type' => 'page' ));
                           while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>

                    <a href="<?php the_permalink(); ?>">

                        <?php the_post_thumbnail( 'medium' ); ?>

                        <?php endwhile; wp_reset_postdata(); ?>      
                    
                    <span class="media-category-title">Photos</span>    
                    </a>
                </div>
                <div class="main-thumb">
                    <?php $thumbquery = new WP_Query(array( 'name' => 'video', 'post_type' => 'page' ));
                           while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>

                    <a href="<?php the_permalink(); ?>">

                        <?php the_post_thumbnail( 'medium' ); ?>

                        <?php endwhile; wp_reset_postdata(); ?>      
                    
                    <span class="media-category-title">Video</span>
                    </a>
                </div>

                <article class="media-article" id="post-<?php the_ID(); ?>">
                    <div class="entry">
                    <?php the_content('<p class="serif">More &raquo;</p>'); ?>
                    </div>
                </article>
                <?php endwhile; else:?>
                <article class="col-sm-9">
                    <div class="entry">
                        <p class="lead"><?php _e('Sorry, this page does not exist. Try searching for one.'); ?></p>
                        <?php get_search_form(); ?>
                    </div>
                </article>
                <?php endif; ?>
            </div><!-- /row -->
        </div> <!--/container-->

    </div><!-- /row -->
</div><!-- /container -->

<!--<small class="small-label">page-media.php</small>-->

<?php get_footer(); ?>

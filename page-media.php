<?php
/*
Template Name: Media Page
*/
?>
<?php get_header(); ?>



<!-- content start -->
<div id="container" class="page">
    
                <div class="container col-md-12">
                    <div class="row">
                        <!-- sidebar -->
                        <?php get_sidebar( 'primary' ); ?>
                        <!-- /sidebar --> 
                        <div class="col-md-3">
                            <?php $thumbquery = new WP_Query(array( 'name' => 'audio', 'post_type' => 'page' ));
                                   while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>

                            <a href="<?php the_permalink; ?>">

                                <?php the_post_thumbnail( 'medium' ); ?>

                                <?php endwhile; wp_reset_postdata(); ?>      
                            </a>
                        </div>
                        <div class="col-md-3">
                            <?php $thumbquery = new WP_Query(array( 'name' => 'photos', 'post_type' => 'page' ));
                                   while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>

                            <a href="<?php the_permalink; ?>">

                                <?php the_post_thumbnail( 'medium' ); ?>

                                <?php endwhile; wp_reset_postdata(); ?>      
                            </a>
                        </div>
                        <div class="col-md-3">
                            <?php $thumbquery = new WP_Query(array( 'name' => 'video', 'post_type' => 'page' ));
                                   while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>

                            <a href="<?php the_permalink; ?>">

                                <?php the_post_thumbnail( 'medium' ); ?>

                                <?php endwhile; wp_reset_postdata(); ?>      
                            </a>
                        </div>
                    </div><!--/row-->
                </div><!--/container-->   

    <div class="row">
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
       

    </div><!-- /row -->
</div><!-- /container -->

<small class="small-label">page-media.php</small>

<?php get_footer(); ?>

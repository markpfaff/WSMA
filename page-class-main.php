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
                    
                    <?php 
                    $thumbquery = new WP_Query(//cycle through class pages based on field value
                            array( 
                                'post_type'     => 'page' , 
                                'order' => 'ASC',
                                'orderby' => 'menu_order',
                                'posts_per_page' => -1, //this resets the default # blog pages in admin panel
                                'post_parent'    => $post->ID,
                            ));
                            //echo '<pre>';var_dump($thumbquery);echo '</pre>';
                        while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                    <div class="main-thumb">
                        
                        <a href="<?php echo the_permalink(); ?>">

                            <?php the_post_thumbnail( 'medium' ); ?>

                        </a>
                        
                        <h4 class="thumb-title"><?php the_title(); ?></h4>
                        
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?> 

                </div><!--/row-->
            </div><!--/container--> 

    </div><!-- /row -->
</div><!-- /container -->

<!--<small class="small-label">page-class-main.php</small>-->

<?php get_footer(); ?>
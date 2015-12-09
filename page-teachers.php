<?php get_header(); ?>



<!-- content start -->
<div id="container" class="page">
    <div class="row">

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <h1 class="col-md-8"><?php the_title(); ?></h1>
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
        <div class="classes-teacher-container">
                <h2>Teachers</h2>
                <?php $thumbquery = new WP_Query(array('post_type' => 'teachers' ));
                           while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); 
                           ?>
                
                <div class="teachers-bio-container">

                    <a href="<?php the_permalink; ?>">
                        <?php  //get_post_thumbnail_id('medium');
                        //echo '<img width="100%" src="' . $image_src[0] . '">';?>
                        <?php the_post_thumbnail( 'medium' ); ?>
 
                    </a>
                    <caption><?php echo the_excerpt(); ?></caption>
                    <?php the_content(); ?>
                    
                </div>
                <?php endwhile; wp_reset_postdata(); ?> 
        </div>

    </div><!-- /row -->
</div><!-- /container -->

<small class="small-label">page.php</small>

<?php get_footer(); ?>

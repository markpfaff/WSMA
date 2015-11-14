<?php
/*
Template Name: Individual Class Page
*/
?>
<?php get_header(); ?>


<!-- content start -->
<div id="container" class="page">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <h1 class="col-md-8"><?php the_title(); ?></h1>

        <article class="page col-md-9" id="post-<?php the_ID(); ?>">
            <div class="entry">
            <?php the_content('<p class="serif">More &raquo;</p>'); ?>
        	</div>
            <div class="page-buttons">
                <a href="<?php echo get_page_link( get_page_by_title( 'enroll' )->ID ); ?>">
                    <button type="button" class="btn btn-default btn-lg">Enroll</button>
                </a>
                <a href="<?php echo get_page_link( get_page_by_title( 'policies' )->ID ); ?>">
                    <button type="button" class="btn btn-default btn-lg">Policies</button>
                </a>
            </div>
        </article>
        <div class="container col-md-9">
            <div class="row">
                <h2>Teachers</h2>
                <?php $thumbquery = new WP_Query(array( 'meta_value' => the_slug(), 'post_type' => 'teachers' ));
                           while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); ?>
                <div class="col-md-3">
                    
                    <a href="<?php the_permalink; ?>">

                        <?php the_post_thumbnail( 'medium' ); ?>
 
                    </a>
                    <caption><?php echo the_excerpt(); ?></caption>
                    
                    
                </div>
                <?php endwhile; wp_reset_postdata(); ?> 
            </div><!--/row-->
        </div><!--/container-->   
        
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
    </div><!-- /row -->
</div><!-- /container -->

<small class="small-label">page-classes.php</small>

<?php get_footer(); ?>


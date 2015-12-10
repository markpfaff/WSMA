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

        <article class="page page-intro-p" id="post-<?php the_ID(); ?>">
            <div class="entry">
            <?php the_content('<p class="serif">More &raquo;</p>'); ?>
        	</div>
            <div class="page-buttons">
                <a href="<?php echo get_page_link( get_page_by_title( 'enroll' )->ID ); ?>">
                    <button type="button" class="btn btn-info btn-lg">Enroll</button>
                </a>
                <a href="<?php echo get_page_link( get_page_by_title( 'policies' )->ID ); ?>">
                    <button type="button" class="btn btn-info btn-lg">Policies</button>
                </a>
            </div>
        </article>
            <!-- sidebar -->
            <?php get_sidebar( 'primary' ); ?>
            <!-- /sidebar -->
        <div class="classes-teacher-container">
                <h2>Teachers</h2>
                <?php 
                $slug = the_slug();
                
                $thumbquery = new WP_Query(array( 'field' => $slug, 'post_type' => 'teachers' ));
                           while ( $thumbquery->have_posts() ) : $thumbquery->the_post(); 
                 echo '<pre>'; var_dump($thumbquery); echo '</pre>';                         ?>
                
                <div class="col-xs-3">

                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Teachers' ) ) ); ?>">
                       <?php the_post_thumbnail( 'medium' ); ?>
 
                    </a>
                    <caption><?php echo the_excerpt(); ?></caption>
                    
                </div>
                <?php endwhile; wp_reset_postdata(); ?> 
        </div>
    </div><!--/row-->
</div><!--/container-->   
        
        <?php endwhile; else:?>
        <article class="classes-teacher-container not-found">
            <div class="entry">
                <p class="lead"><?php _e('Sorry, this page does not exist. Try searching for one.'); ?></p>
                <?php get_search_form(); ?>
            </div>
        </article>
        <?php endif; ?>
        

</div><!-- /container -->

<small class="small-label">page-classes1.php</small>

<?php get_footer(); ?>


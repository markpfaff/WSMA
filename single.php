<?php get_header(); ?>
            <?php if (have_posts()) : while(have_posts()) : the_post();?> 
            <h1 class="single-h1"><?php the_title(); ?></h1>
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">

                <p>
                    <span>Posted on <?php the_time('F jS, Y') ?></span> in
                    <span><?php the_category(', ') ?></span>
                </p>

                        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            <?php the_content(); ?>

                        </article>

                    </div> <!-- /col-sm-9 -->
                      <?php get_sidebar(); ?>
                 
                        <?php endwhile;?> 
    
                        <?php endif; ?>
                    
                    <?php if ( get_post_type() == 'ai1ec_event' ) {
                        //if event page show nothing
                        
                    }else{//else show back to news
                    echo '<div class="single-back-link"> <a href="' . esc_url( get_permalink( get_page_by_title( 'news' ))) . '"><strong>  &laquo; Back to News</strong></a></div>';
                    }?>
                </div> <!-- /row -->
            </div> <!-- /container -->



<!--<small class="small-label">single.php</small>-->

<?php get_footer(); ?>
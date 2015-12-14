<?php get_header(); ?>
            <?php if (have_posts()) : while(have_posts()) : the_post();?> 
            <h1 class="single-h1"><?php the_title(); ?></h1>
            <div class="container" id="main">
                <div class="row">
                    <div class="col-md-8">

                <p>
                    <span>Posted on <?php the_time('F jS, Y') ?></span> in
                    <span><?php the_category(', ') ?></span>
                </p>

                        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            <?php the_content(); ?>

                        </article>

                    </div> <!-- /col-md-8 -->
                      <?php get_sidebar(); ?>
                 
                        <?php endwhile;?> 
    
                        <?php endif; ?>
                    
                    <?php if ( get_post_type() == 'ai1ec_event' ) {}else{
                    echo '<div class="single-back-link"> <a href="' . esc_url( get_permalink( get_page_by_title( 'news' ))) . '"><< Back to News </a></div>';
                    }?>
                </div> <!-- /row -->
            </div> <!-- /container -->



<!--<small class="small-label">single.php</small>-->

<?php get_footer(); ?>
<?php get_header(); ?>
            <?php if (have_posts()) : while(have_posts()) : the_post();?> 
            <h1 class="single-h1"><?php the_title(); ?></h1>
            <div class="container" id="main">
                <div class="row">
                    <div class="col-md-8">

                <p class="postmetadata">
                    <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in
                    <span class="cat"><?php the_category(', ') ?></span>
                </p>

                        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            <?php the_content(); ?>

                        </article>

                    </div> <!-- /col-md-8 -->
                      <?php get_sidebar(); ?>
                        <?php endwhile;?> 
                    <ul class="pull-left">
                        <li class="pull-left">
                             <?php previous_posts_link(); ?>
                        </li>
                        <li class="pull-left">
                             <?php next_posts_link(); ?>
                        </li>
                    </ul>     
                        <?php endif; ?>

  

                </div> <!-- /row -->
            </div> <!-- /container -->



<small class="small-label">single.php</small>

<?php get_footer(); ?>
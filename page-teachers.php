<?php get_header(); ?>



<!-- content start -->
<div class="container">
    <div class="row">

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <h1 class="col-sm-9"><?php the_title(); ?></h1>
        <article class="page-intro-p" id="post-<?php the_ID(); ?>">
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
            <!-- sidebar -->
            <?php get_sidebar( 'primary' ); ?>
            <!-- /sidebar -->

    </div><!-- /row -->
</div><!-- /container -->

<!--<small class="small-label">page.php</small>-->

<?php get_footer(); ?>

<?php get_header(); ?>
<?php // Get number of results
$results_count = $wp_query->found_posts;
?>


<div class="container">
    <div class="row">
        <h1 class="search-page-title">Search <span>&ldquo;<?php the_search_query(); ?>&rdquo;</span></h1>
        <div class="col-sm-9">
            <?php if ($results_count == '' || $results_count == 0) { // No Results ?>
                <p><span class="label label-danger"><?php _e('No Results'); ?></span>&nbsp; <?php _e('How about searching for something else?'); ?></p>
            <?php } else { // Results Found ?>
                <p><span class="label label-info"><?php echo $results_count . __(' Results'); ?></span></p>
            <?php } // end results check ?>

            <div class="search-page-form">
                <?php get_search_form(); ?>
            </div>
        </div>

        <!-- sidebar -->
        <?php get_sidebar(); ?>
        <!-- /sidebar -->

        <div class="search-results-container">

            <?php if (have_posts()) : ?>
                <h2>Search Results</h2>
            <?php while (have_posts()) : the_post(); ?>
                <div>
                    <h3 id="post-<?php the_ID(); ?>">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <p>
                        <span>Posted on <?php the_time('F jS, Y') ?></span> in 
                        <span><?php the_category(', ') ?></span>
                        <span>by <?php the_author_posts_link(); ?></span>
                    </p>
                    <?php the_excerpt(); ?>
                    <p>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Read more about <?php the_title(); ?>">Read more &raquo;</a>
                    </p>
                </div><!-- post-box end-->
            <?php endwhile; ?>

            <?php endif; ?>
		
        </div><!-- /col-sm-9-->
    </div><!-- /row-->
</div><!-- /container-->

<!--<small class="small-label">search.php</small>-->

<?php get_footer(); ?>
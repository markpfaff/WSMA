<?php get_header(); ?>
<?php // Get number of results
$results_count = $wp_query->found_posts;
?>
<!-- sidebar -->
<?php get_sidebar(); ?>
<!-- /sidebar -->
<div class="jumbotron">
    <div class="container">
        <h1>Search <span class="keyword">&ldquo;<?php the_search_query(); ?>&rdquo;</span></h1>
        <?php if ($results_count == '' || $results_count == 0) { // No Results ?>
            <p><span class="label label-danger"><?php _e('No Results'); ?></span>&nbsp; <?php _e('Try different search terms.'); ?></p>
        <?php } else { // Results Found ?>
            <p><span class="label label-success"><?php echo $results_count . __(' Results'); ?></span></p>
        <?php } // end results check ?>
        <div class="row">
            <div class="col-md-3">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .jumbotron -->
<div class="container" id="main">
    <div class="row">
        <div class="col-md-8">

            <?php if (have_posts()) : ?>
                <h2 class="pagetitle">Search Results</h2>
            <?php while (have_posts()) : the_post(); ?>
                <div class="post-box">
                    <h3 id="post-<?php the_ID(); ?>">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <p class="postmetadata">
                        <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
                        <span class="cat"><?php the_category(', ') ?></span>
                        <span class="author">by <?php the_author_posts_link(); ?></span>
                    </p>
                    <?php the_excerpt(); ?>
                    <p class="read-more">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Read more about <?php the_title(); ?>">Read more &raquo;</a>
                    </p>
                </div><!-- post-box end-->
            <?php endwhile; ?>

            <?php else : ?>
                <h2>No posts found. Try a different search?</h2>
                <?php get_search_form(); ?>

            <?php endif; ?>
		
        </div><!-- /col-md-8-->
    </div><!-- /row-->
</div><!-- /container-->

<small class="small-label">search.php</small>

<?php get_footer(); ?>
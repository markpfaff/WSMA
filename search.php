<?php get_header(); ?>

<!-- START SIDEBAR -->
<?php get_sidebar(); ?>
<!-- END SIDEBAR -->

<!-- START CONTENT -->

<div id="content" class="search">

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
		
</div>
<!-- END CONTENT -->
<small>search.php</small>

<?php get_footer(); ?>
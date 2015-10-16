<?php get_header(); ?>

	<!-- sidebar start -->
	<?php get_sidebar( 'primary' ); ?>
	<!-- sidebar end -->

<!-- content start -->
<div id="content" class="page">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content('<p class="serif">More &raquo;</p>'); ?>
    <?php endwhile; ?>
    <?php endif; ?>

</div>
<!-- content end -->

</div>
<!-- end main -->

<?php get_footer(); ?>

<?php get_header(); ?>

<!-- sidebar -->
<?php get_sidebar( 'primary' ); ?>
<!-- /sidebar -->

<div id = "main-single">
  <!-- START CONTENT -->
    <?php if (have_posts()) : while(have_posts()) : the_post();?> 
  <div id="content" class="single">
          <h2><?php the_title(); ?></h2>

      <?php the_content('More &raquo;'); ?>
      <?php //wp_link_pages(); ?>




    <?php endwhile; endif;?>
  </div>
  <!-- /content -->


</div>
<!-- /main-single -->


<?php get_footer(); ?>
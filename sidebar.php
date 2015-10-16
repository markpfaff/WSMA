<aside id="primary"> 	<?php /*?> the aside's id is used for CSS styling <?php */?>
	<?php if ( is_active_sidebar( 'primary' ) ) : ?>

		<?php dynamic_sidebar( 'primary' ); ?>

	<?php else : ?>

<?php /*When no widgets are active, the following will display*/?>

    <div class="widget">
      <h3>Primary Sidebar</h3>
        <p>This should not display</p>
    </div>

    <div class="widget">
 		<h3>Search</h3>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
    </div>

    <!-- categories -->
    <div class="widget">
		<h3>Categories</h3>
		<ul>
			<?php wp_list_categories('title_li='); ?>
		</ul>
    </div><!-- /categories -->

        <!--  meta -->
    <div class="widget">
        <h3>Meta</h3>
        <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
        </ul>
    </div><!-- /meta -->
<small>sidebar.php</small>

<?php /* end default code*/?>

	<?php endif; ?>
</aside><!-- /secondary -->

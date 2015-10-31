<div class="col-md-2">

	<div id="sidebar" role="complementary">
        
        <!--subnav-->
        <?php

/* if the current pages has a parent, i.e. we are on a subpage */
if($post->post_parent){
    $parent_title = get_the_title($post->post_parent);
    //$children = wp_list_pages("title_li=&include=".$post->post_parent."&echo=0"); // list the parent page
    $children = wp_list_pages("depth=1&title_li=&child_of=".$post->post_parent."&echo=0"); // append the list of children pages to the same $children variable
}

/* else if the current page does not have a parent, i.e. this is a top level page */
else {
    $parent_title = get_the_title($post->ID);
    //$children = wp_list_pages("title_li=&include=".$post->ID."&echo=0");
    $children = wp_list_pages("depth=1&title_li=&child_of=".$post->ID."&echo=0"); // form a list of the children of the current page
}

/* if we ended up with any pages from the queries above */
if ($parent_title) { ?>
    <h2><?php echo $parent_title; ?></h2>
<?php } 

if ($children) { ?>
    <ul class="submenu">
        <?php echo $children; /*print list of pages*/ ?>
    </ul>
<?php } ?>
    
        <!-- /subnav-->
        
		<?php if (is_active_sidebar('primary')) {
			dynamic_sidebar('primary'); } ?>

	</div>

</div> <!-- /class col-md-2 -->
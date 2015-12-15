<div class="sidebar-container">

	<div id="sidebar" role="complementary">
        
        <!--subnav-->
        <?php
        if (is_search()) {
            //show title of search
            echo '<h2>Search</h2>' ;
        }else if (is_home()) {
            //show title of news
            echo '<h2>News</h2>' ;
        }else{
            
       
            if($post->post_parent){//if we're on a child page (subpage), get title & pages
            $parent_title = get_the_title($post->post_parent);
            $children = wp_list_pages("depth=1&title_li=&child_of=".$post->post_parent."&echo=0");//depth=1 only go one child deep
            
            
            }else{// else we're on a parent page (top level), get title
            $parent_title = get_the_title($post->ID);
            $children = wp_list_pages("depth=1&title_li=&child_of=".$post->ID."&echo=0");//depth=1 only go one child deep
            }

        
            if ($parent_title) {//if title was returned echo it ?>
                <h2><?php echo $parent_title; ?></h2>
            <?php } 

            if ($children) {//if child pages were returned echo them ?>
                <ul class="submenu">
                    <?php echo $children; ?>
                </ul>
            <?php } 
            
            }?>
        
    
        <!-- /subnav-->
        
		<?php if (is_active_sidebar('primary')) {
			dynamic_sidebar('primary'); } ?>

	</div>

</div> <!-- /sidebar container -->
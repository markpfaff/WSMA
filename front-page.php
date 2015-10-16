<?php get_header(); ?>


                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <?php $media_page = get_post(12); ?>

                            <a href="<?php echo get_permalink($media_page->ID); ?>">

                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner.png" alt="banner image"/>
                            </a>
                        </li>
                    </ul>
                </div><!--/flexslider-->
<small>front-page.php</small>


<?php get_footer(); ?>

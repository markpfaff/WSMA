<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <!-- Remy Sharp Shim -->
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0">

        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico" />

        <?php wp_head(); ?>
    </head>
        
    <body <?php body_class(); ?>>

        <main>

            <header>

                    <div id="social">
                        <?php wp_nav_menu( array(
                                'theme_location' => 'social-menu' ,
                                'menu' => 'Social Menu' ,
                                'container'  => 'ul',
                                ) ); ?>

                    </div><!-- /social -->

                    <div><!-- logo -->
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="logo" id="logo"/></a>
                    </div><!-- /logo -->

            </header>
            <!-- mobile nav -->
            <div id = "social-m">
                    <div>
                        <a href="https://www.facebook.com/West-Side-Music-Academy-180556468641257/timeline/" target="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" alt="facebook"/>
                        </a>

                </div>
            </div><!-- /mobile nav -->

            <!-- nav -->
                <div class="jquery-nav">
                            <h4 class="jquery-title">
                                <a href="#">
                                    <div class="menu-icon">
                                        <img src="<?php bloginfo('template_url'); ?>/images/icon-menu.png">
                                    </div>
                                </a>
                            </h4>
                            <?php wp_nav_menu(array('menu' => 'Main Menu')); ?>
                        </div>

            <!-- /nav -->

            <div id="middle">

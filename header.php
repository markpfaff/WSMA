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
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" alt="facebook"/>

                    </div><!-- /social -->

                    <div id="logo"><!-- logo -->
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="logo" id="logo"/>
                        </a>
                    </div><!-- /logo -->
                    
                    <nav>
                        <?php wp_nav_menu(array('menu' => 'Main Menu')); ?>
                    </nav>
                    
            </header>


            <div id="middle">

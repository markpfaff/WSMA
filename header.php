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
                <div class="container">
                    <div class="row">
                        <div id="logo"><!-- logo -->
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.jpg" alt="logo" id="logo"/>
                            </a>
                            <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">West Side Music Academy</a>

                        </div><!-- /#logo -->
                        <div class="header-buttons">
                            <a href="<?php echo get_page_link( get_page_by_title( 'enroll' )->ID ); ?>">
                                <button type="button" class="btn btn-default btn-lg">Enroll</button>
                            </a>
                            <a href="https://app.jackrabbitclass.com/portal/ppLogin.asp?id=518858">
                                <button type="button" class="btn btn-default btn-lg">Login</button>
                            </a>
                        </div><!-- /.header-buttons -->
                        <?php get_search_form() ;?> 
                    </div><!-- /.row -->
                </div><!-- /.container -->

                
                <div class="navbar navbar-default navbar-static-top" role="navigation">
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                 <?php
                                    wp_nav_menu( array(
                                        'menu'              => 'Primary',                
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker'            => new wp_bootstrap_navwalker())
                                    );
                                ?>
                            </ul>
                        </div><!--/.nav-collapse -->

                    </div>  <!--/.container --> 
                </div><!--/.navbar-default -->
            </header>


            <div class="container">

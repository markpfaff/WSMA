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
                        
                        <div id="logo-desktop" class="col-sm-9"><!-- logo -->
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.jpg" alt="logo" id="logo"/>
                            </a>
                            <a class="navbar-brand navbar-brand-desktop" href="<?php echo esc_url( home_url() ); ?>">West Side Music Academy</a>

                        </div><!-- /#logo -->
                        <!--start login-enroll-desktop-->
                        <div class="col-sm-3 login-enroll-desktop">
                            <div class="header-buttons">
                                <a href="<?php echo get_page_link( get_page_by_title( 'enroll' )->ID ); ?>">
                                    <button type="button" class="btn btn-info btn-block">Enroll</button>
                                </a>
                                <a href="https://app.jackrabbitclass.com/portal/ppLogin.asp?id=518858">
                                    <button type="button" class="btn btn-info btn-block">Login</button>
                                </a>
                            </div><!-- /.header-buttons -->
                            <?php get_search_form() ;?> 
                        </div><!--/ .login-enroll-lg-->
                    </div><!-- /.row -->
                </div><!-- /.container -->

                
                <div class="navbar navbar-default navbar-static-top" role="navigation">
                        <div id="logo-mobile" class="col-sm-9 hidden-sm hidden-md hidden-lg"><!-- logo -->
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.jpg" alt="logo" id="logo"/>
                            </a>
                            <a class="navbar-brand navbar-brand-mobile hidden-sm hidden-md hidden-lg" href="<?php echo esc_url( home_url() ); ?>">West Side Music Academy</a>

                        </div><!-- /#logo -->
                    <div class="container">

                        <div class="navbar-header col-xs-3 pull-right">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <button type="button" class="mobile-toggle navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#search">
                                <i class="icon-search"></i>
                            </button>

                        </div><!--/navbar-header-->

                        <div class="main-menu-select navbar-collapse collapse">
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
                        <!--start mobile search-->
                        <div class="collapse navbar-collapse hidden-lg" id="search">
                            <form class="mobile_search hidden-sm hidden-md hidden-lg" action="<?php bloginfo('siteurl'); ?>/" role="search" action="/" method="GET">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="s" name="s" placeholder="Search" <?php if ( $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> />
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div><!--/ mobile search-->
                        
                    </div>  <!--/.container --> 
                </div><!--/.navbar-default -->
                <!-- start login-enroll-mobile -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 login-enroll-mobile hidden-sm hidden-md hidden-lg">
                            <div class="header-buttons">
                                <a href="<?php echo get_page_link( get_page_by_title( 'enroll' )->ID ); ?>">
                                    <button type="button" class="btn-xl">Enroll</button>
                                </a>
                                <a href="https://app.jackrabbitclass.com/portal/ppLogin.asp?id=518858">
                                    <button type="button" class="btn-xl">Login</button>
                                </a>
                            </div><!-- /.header-buttons -->
                            <?php get_search_form() ;?> 
                        </div><!--/ .login-enroll-lg-->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </header>


            <div class="container">

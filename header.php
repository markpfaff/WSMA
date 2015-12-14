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

            <header>

                <div class="container">
                    <div class="row">
                        
                        <div class="logo-desktop"><!-- logo -->
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-bw.png" alt="logo" id="logo"/>
                            </a>
                            <a class="navbar-brand navbar-brand-desktop" href="<?php echo esc_url( home_url() ); ?>">West Side Music Academy</a>

                        </div><!-- /#logo -->
                        <!--start login-enroll-desktop-->
                        <div class="login-enroll-desktop">
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
                        <div class="logo-mobile"><!-- logo -->
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-bw.png" alt="logo" id="logo"/>
                            </a>
                            <a class="navbar-brand navbar-brand-mobile" href="<?php echo esc_url( home_url() ); ?>">West Side Music Academy</a>

                        </div><!-- /#logo -->
                    <div class="container">

                        <div class="navbar-header">
                            <a data-toggle="collapse" href=".main-menu-select" aria-expanded="true" aria-controls="collapseOne">
                                <button type="button" class="navbar-toggle collapsed">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </a>
                            <a data-toggle="collapse" href="#search" aria-expanded="true" aria-controls="collapseTwo">
                                <button type="button" class="mobile-toggle navbar-toggle collapsed pull-right">
                                    <i class="icon-search"></i>
                                </button>
                            </a>

                        </div><!--/navbar-header-->

                        <div class="main-menu-select navbar-collapse collapse" id="main-menu-select">
                            <ul class="nav navbar-nav">
                                 <?php
                                    wp_nav_menu( array(
                                        'menu'              => 'Primary',                
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse main-menu-select',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker'            => new wp_bootstrap_navwalker())
                                    );
                                ?>
                            </ul>
                        </div><!--/.nav-collapse -->
                        <!--start mobile search-->
                        <div class="collapse navbar-collapse search" id="search">
                            <form class="mobile_search" action="<?php bloginfo('siteurl'); ?>/" role="search" method="GET">
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
                        <div class="login-enroll-mobile ">
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
            <div class="breadcrumbs">

                <?php if(! is_page( 'home' ) && function_exists('bcn_display'))
                {
                    bcn_display();
                }?>

            </div>

            <div class="all-main-containers container">

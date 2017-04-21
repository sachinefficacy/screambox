<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Expound
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">  
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/custom.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" media="screen" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="screen" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>


<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'expound_header_before' ); ?>
    <div class="main-header">
    <div class="container">
	<header id="masthead" class="site-header" role="banner">
    <!-- Logo -->
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 logo-left">
    <div class="site-branding">
			<div class="site-title-group">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"/></a></h1>
				
			</div>
		</div>
    </div>
    <!--  -->
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 navigation-right">
    <nav id="site-navigation" class="navigation-main" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'expound' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'expound' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 3 ) ); ?>
			<?php wp_nav_menu( array(
				'theme_location' => 'social',
				'depth' => 1,
				'container_id' => 'expound-social',
				'link_before' => '<span>',
				'link_after' => '</span>',
				'fallback_cb' => '',
			) ); ?>
			<?php do_action( 'expound_navigation_after' ); ?>
		</nav>
    </div>
    <!--  -->
		<!-- #site-navigation -->
	</header><!-- #masthead -->
    </div>
    </div>
	<?php do_action( 'expound_header_after' ); ?>

	<div id="main" class="site-main">
    <div class="container">

<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<!-- Bootstrap core CSS -->
<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.min.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header 
		<?php if ( is_home() ) { ?>
		id="home-header"
		<?} else if (is_page( 'family' )) { ?>
		id="home-header"
		<?php } ?>
		>
		<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
  			  <h1 id="site-logo" class="site-title pull-left">
  			  	<a href="<?php bloginfo( 'url' ); ?>" title="HCF" rel="home">
	    			<img class="img-responsive" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
  			  	</a>
  			  </h1>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background:;">

				<!-- <div id="social-top">
					<a href="https://www.facebook.com/Healthcanbefun" class="btn btn-social" title="Like us on Facebook"><i class="fa fa-facebook"></i></a>
					<a href="http://instagram.com/healthcanbefun" class="btn btn-social" title="Follow us on Instagram"><i class="fa fa-instagram"></i></a>
					<a href="https://twitter.com/HCF_sg" class="btn btn-social" title="Follow us on Twitter"><i class="fa fa-twitter"></i></a>
					<a href="http://www.pinterest.com/Healthcanbefun/" class="btn btn-social" title="Follow us on Pinterest"><i class="fa fa-pinterest"></i></a>
					<a href="https://www.linkedin.com/company/health-can-be-fun" class="btn btn-social" title="Add us on LinkedIn"><i class="fa fa-linkedin"></i></a>
				</div> -->
		
			  	<div class="clearfix pull-right">
			  	<?php wp_nav_menu( array(
					        'menu'              => 'primary',
					        'theme_location'    => 'primary',
					        'depth'             => 2,
					        'menu_class'        => 'nav navbar-nav ',
					        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					        'walker'            => new wp_bootstrap_navwalker())
					    );?>
				</div>
			</div><!-- /.navbar-collapse -->
		</nav>
		</div>
	</header>


    





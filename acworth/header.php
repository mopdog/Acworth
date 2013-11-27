<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />
    <script type="text/javascript" src="http://fast.fonts.net/jsapi/210a42ab-6f30-4d19-b3e4-72858a2a60cd.js"></script>
    

<?php wp_head(); ?>


	<?php if ( is_page( '47' ) ) { ?>
	<script>
    	$(window).load(function() {
  			$('.flexslider').flexslider({
    			animation: "slide"
  			});
		});
    </script>
    <?php } ?>

</head>

<body <?php body_class('off-canvas hide-extras'); ?>>

	<!-- Start the main container -->
	<div id="container" class="container" role="document">

		<!-- Row for blog navigation -->
        <div class="spacer">&nbsp;</div>
		<div class="row top-header">
			<header class="twelve columns" role="banner">
                <div class="contain-to-grid sticky">
                    <div class="nav-row">
                        <nav role="navigation">
                        	<a class="toggleMenu" href="#">Menu</a>
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'depth' => 2,
                                    'items_wrap' => '<ul class="nav">%3$s</ul>',
                                    'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
                                    'walker' => new reverie_walker()
                                ) );
                            ?>
                        </nav>
                    </div>
                </div>
                <div class="row"> 
                	  <div class="placeholder"></div>
                    <div class="logo twelve columns">
                        <a href="/home" ><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
                    </div>
                </div>
                <div class="row">
                	<div class="social one columns">
                    	<div class="facebook-icon">
                        	<a href="https://www.facebook.com/VisitAcworth" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" /></a>
                        </div>
                       <!-- <div class="twitter-icon">
                        	<a href="https://twitter.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" /></a>
                        </div>
                        -->
                    </div>
                    <div class="seven columns"></div>
                    <div class="search-box three columns">
                    	<?php get_search_form(); ?>
                    </div>
                </div>
				
			</header>
		</div>
		
		<!-- Start Off-Canvas Row -->
		<div class="row subpage-row">
		
		<!-- Row for main content area -->
		<section id="main" role="main">
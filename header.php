<!DOCTYPE html>
<html hreflang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta http-equiv="x-ua-compatible" content="ie=edge" />
		<meta name="language" content="English" />
		<meta name="google-site-verification" content="" />
		<meta name="msvalidate.01" content="5032E7B2C3AB10A3133722B41A5B6C3F" />
		<meta charset="utf-8" />

		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title> 

		<?php wp_head(); ?>

		<link rel="stylesheet" type="text/css" media="all" href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic|Oxygen|Open+Sans">

		<!--[if lt IE 9]>
			<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!--[if IE]>
			<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/retina-1.1.0.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr-custom-v2.7.1.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>

		<?php $shortname = "kcel_theme"; ?>

		<style type="text/css">
			body {

			<?php if(get_option($shortname.'_background_image_url','') != "") { ?>
				background: url('<?php echo get_option($shortname.'_background_image_url',''); ?>') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;
			<?php } ?>		

			<?php if(get_option($shortname.'_custom_background_color','') != "") { ?>
				background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>;
			<?php } ?>	
			}
		</style>
	</head>

	<body <?php body_class($class); ?>>

		<header class="affix" data-spy="affix" data-offset-top="16">
			<div class="header__box container">
				<div class="row">
					<div class="col-xs-12 col--header">
						<div class="col-md-4 col-sm-6 col-xs-12 header__logo">
							<a href="<?php bloginfo('url'); ?>" title="KC Elder Law">
							<?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>
								<img src="<?php echo get_option($shortname.'_custom_logo_url',''); ?>" class="logo" alt="KC Elder Law - Our Experience Makes the Difference" /></a>
							<?php } else { ?>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/KCEL_website_logo-white.png" class="logo" alt="KC Elder Law - Our Experience Makes the Difference" /></a>
							<?php } ?>
							</a>
						</div>
						<div class="col-md-8 col-sm-6 col-xs-12 header__contact">
							<a class="btn btn--highlight header__btn" href="#" data-toggle="modal" data-target="#appointmentForm">Schedule a Free Consultation</a>
							<h3 class="contact--phone">
								<span class="fa fa-phone"></span> 
							</h3>
						</div>

					</div>
				</div>
			</div>

			<?php if (!is_home() && !is_front_page()) { ?>
			<div class="container">
				<nav class="navbar navbar__interior">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topNav" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="fa fa-bars"></span> Menu
						</button>
					</div>
					<?php 
						wp_nav_menu(
							array(
								'theme_location'  => 'topNav',
								'manu'            => 'Top Nav',
								'menu_class'      => 'menu-wrapper',
								'menu_id'         => 'topNav',
								'container_class' => 'collapse navbar-collapse navbar__interior-collapse',
								'items_wrap'      => '<ul class="nav navbar-nav navbar__interior">%3$s</ul>',
								'fallback_cb'     => false,
							)
						);
					?>
				</nav>
			</div>
			<?php } ?>
		</header>

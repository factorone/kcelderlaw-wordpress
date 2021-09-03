<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title> 

		<?php wp_head(); ?>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link href='https://fonts.googleapis.com/css?family=Lato: 300,400,700,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

		<!--[if lt IE 9]>
			<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>

		<!--[if IE]>
			<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/mobile.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
		<!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/slicknav.css" />-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/slippry.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ftg.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.sidr.light.css">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet" />
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<!--	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>-->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.bxslider.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.infinitescroll.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/behaviors/manual-trigger.js"></script>
		<!--<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.slicknav.js"></script>-->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/retina-1.1.0.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/slippry.js"></script>
		<!-- flickr slideshow js / css -->

		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr-custom-v2.7.1.min.js" type="text/javascript"></script>
	<!--	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.film_roll.min.js"></script>-->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.carouFredSel-6.2.1.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.finaltilesgallery.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.sidr.min.js"></script>
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

		<header id="header">

			<div class="header_bottom">
				<div class="container">
					<div class="full_logo_cont">
						<?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>
							<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option($shortname.'_custom_logo_url',''); ?>" class="logo" alt="logo" /></a>
						<?php } else { ?>
							<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" class="logo" alt="logo" /></a>
						<?php } ?>
					</div><!--//logo_cont-->	

					<div id="sidr">
						<a class="close_menu" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/close-btn.png"></a>

						<?php wp_nav_menu('theme_location=header-menu&container=false&menu_id=main_header_menu'); ?>

						<div class="socials">

							<?php if(get_option($shortname.'_twitter_link','') != '') { ?>

							<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" alt="twitter" /></a>

						<?php } ?>

						<?php if(get_option($shortname.'_facebook_link','') != '') { ?>

							<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" alt="facebook" /></a>

						<?php } ?>

						<?php if(get_option($shortname.'_google_plus_link','') != '') { ?>

							<a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" alt="google plus" /></a>

						<?php } ?>

						<?php if(get_option($shortname.'_picasa_link','') != '') { ?>

							<a href="<?php echo get_option($shortname.'_picasa_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/picasa-icon.png" alt="picasa" /></a>

						<?php } ?>

						<?php if(get_option($shortname.'_pinterest_link','') != '') { ?>

							<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" alt="pinterest" /></a>

						<?php } ?>

						<?php if(get_option($shortname.'_vimeo_link','') != '') { ?>

							<a href="<?php echo get_option($shortname.'_vimeo_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vimeo-icon.png" alt="vimeo" /></a>

						<?php } ?>

						<?php if(get_option($shortname.'_youtube_link','') != '') { ?>

							<a href="<?php echo get_option($shortname.'_youtube_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube-icon.png" alt="youtube" /></a>

						<?php } ?>

						<?php if(get_option($shortname.'_flickr_link','') != '') { ?>

							<a href="<?php echo get_option($shortname.'_flickr_link',''); ?>"target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flickr-icon.png" alt="flickr" /></a>

						<?php } ?>
						</div>
					</div>
					<div class="top_menu">
						<a href="#sidr" class="t_menu"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-btn.png"></a>
					</div> <!--//header_search-->
					<div class="clear"></div>
				</div><!--//container-->
			</div><!--//header_bottom-->	
		</header><!--//header-->
		
<?php 
$shortname = "kcel_theme";
get_header(); 

if (!is_home() && !is_front_page()) 
{ 
?>
		<div class="content container content--interior">
			<div class="row row--interior-content">
				<div class="col-xs-12 col--interior-content">
<?php 
} 
else 
{ 
?>
		<div class="content container">
			<div class="row row__hero">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 col__nav">
					<nav class="nav__box nav--left">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="fa fa-bars"></span> Menu
							</button>
						</div>
						
						<div class="collapse navbar-collapse" id="mainNav">
<?php
	wp_nav_menu(
		array(
			'theme_location'  => 'leftNav',
			'menu'            => 'Left Nav',
			'menu_class'      => 'nav navbar-nav nav__list',
		)
	);
?>
						</div>
					</nav>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col__hero">
					<div class="hero">
						<img src="<?php echo get_option($shortname . '_staff_image_url'); ?>" class="img-responsive" />
					</div>
				</div>
			</div>
			<div class="hero--text">
				<em><?php echo get_option($shortname . '_featured_text'); ?></em>
			</div>
<?php
} 

if (have_posts()) 
{ 
	while (have_posts()) : the_post(); 

the_content();

endwhile; 
}
else
{ 
?>
					<div class="interior-content__copy">
						<h1 class="text-center">Error 404 File Not Found</h1>
						<p class="text-center">The file or page you're looking for can't be found.</p>
					</div>
<?php 
}
if (!is_home() && !is_front_page()) 
{ 

get_sidebar(); 
?>
				</div>
			</div>
		</div>
<?php 
} 
else 
{ 
?>
		</div>
<?php 
} 

get_footer(); 
?>
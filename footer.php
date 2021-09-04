<?php $shortname = "kcel_theme"; ?>
		<footer class="container--footer">
			<div class="container">

				<?php wp_footer(); ?>
				<?php 
					wp_nav_menu(
						array(
							'theme_location'  => 'footer',
							'menu'            => 'Footer Menu',
							'depth'           => 1,
							'menu_class'      => 'nav__list-item',
							'container_class' => 'container',
							'items_wrap'      => '<ul id="footerNav" class="footer__nav nav navbar-nav">%3$s</ul>',
						)
					);
				?>
				
			</div>
			<section class="footer__legal text-center">
				<p class="legal--copyright"><?php echo stripslashes(stripslashes(get_option($shortname.'_copyright_text',''))); ?></p>

				<?php 
					wp_nav_menu(
						array(
							'theme_location'  => 'footerLegal',
							'menu'            => 'Footer Legal',
							'menu_id'         => 'footerLegal',
							'items_wrap'      => '<ul id="footerLegal" class="footer__legal-menu">%3$s</ul>',
						)
					);
				?>
			</section>
		</footer>
	</body>
</html>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/f386795656.js"></script>
<?php $shortname = "kcel_theme"; ?>

<?php //if (!is_home() && !is_front_page() && !is_archive()) { ?>

		<footer class="container--footer">
			<div class="container">

				<?php wp_footer(); ?>
				<?php wp_nav_menu('theme_location=footer&container=false&menu_id=footerNav'); ?>
				
			</div>
			<section class="footer__legal text-center">
				<p class="legal--copyright"><?php echo stripslashes(stripslashes(get_option($shortname.'_copyright_text',''))); ?></p>

				<?php wp_nav_menu('theme_location=footer&container=false&menu_id=footerLegal'); ?>
			</section>
		</footer>
	</body>
</html>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/f386795656.js"></script>
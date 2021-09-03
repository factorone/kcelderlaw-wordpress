<?php $shortname = "kcel_theme"; ?>

<?php //if (!is_home() && !is_front_page() && !is_archive()) { ?>

		<div class="footer_top_cont">
			<div class="container">
				<div class="home_bottom_box_cont">

					<div class="home_bottom_box">
						<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Col 1') ) : ?>
						<?php endif; ?>
					</div> <!-- //home_bottom_box -->

					<div class="home_bottom_box">
						<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Col 2') ) : ?>
						<?php endif; ?>
					</div> <!-- //home_bottom_box -->

					<div class="home_bottom_box">
						<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Col 3') ) : ?>
						<?php endif; ?>
					</div> <!-- //home_bottom_box -->

					<div class="home_bottom_box home_bottom_box_last">

						<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Col 4') ) : ?>
						<?php endif; ?>

					</div> <!-- //home_bottom_box -->
					<div class="clear"></div>

				</div> <!-- //home_bottom_box_cont -->
			</div> <!-- //container -->
		</div> <!-- //footer_top_cont -->

		<div class="footer_copyright_cont">
			<div class="footer_copyright">
				<div class="container">
					<div class="footer_copyright_center">
						<?php echo stripslashes(stripslashes(get_option($shortname.'_copyright_text',''))); ?>
					</div>
				</div><!--//container-->
			</div><!--//footer_copyright-->
		</div><!--//footer_copyright_cont-->
<?php //} ?>
	
		<?php wp_footer(); ?>
	
	</body>
</html>
<?php get_header(); ?>	

		<div id="content">
			<div class="container">
				
				<div class="single_left">
					<div class="header_spacing"></div>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		

						<h1 class="single_title"><?php the_title(); ?></h1>

						<?php the_content(); ?>

						<br /><br />

						<div class="next_prev_cont">
							<div class="left">
								<?php previous_post_link('%link', '<i>Previous post</i><br />%title'); ?> 
							</div>

							<div class="right">
								<?php next_post_link('%link', '<i>Next post</i><br />%title'); ?> 
							</div>
							<div class="clear"></div>
						</div><!--//next_prev_cont-->
						<?php endwhile; else: ?>
						<h3>Sorry, no posts matched your criteria.</h3>
						<?php endif; ?>                    																

					<div class="clear"></div>

				</div><!--//single_left-->

				<?php get_sidebar(); ?>

				<div class="clear"></div>

			</div> <!-- //container -->
		</div><!--//content-->

<?php get_footer(); ?> 		
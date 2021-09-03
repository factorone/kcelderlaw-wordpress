<?php get_header(); ?>

		<div class="content container content--interior">
			<div class="row row--interior-content">
				<div class="col-xs-12 col--interior-content">
					
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

					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>

<?php get_footer(); ?> 		
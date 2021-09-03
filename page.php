<?php get_header(); ?>	

<?php if (!is_home() && !is_front_page() && !is_archive()) { ?>
		<div class="content container content--interior">
			<div class="row row--interior-content">
				<div class="col-xs-12 col--interior-content">
<?php } else { ?>
		<div class="content container">
<?php } ?>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; else: ?>
					<div class="interior-content__copy">
						<h1 class="text-center">Error 404 File Not Found</h1>
						<p class="text-center">The file or page you're looking for can't be found.</p>
					</div>
					<?php endif; ?>

<?php if (!is_home() && !is_front_page() && !is_archive()) { ?>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
<?php } else { ?>
		<div class="content container">
<?php } ?>
		</div>

<?php get_footer(); ?>
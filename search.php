<?php get_header(); ?>	

		<?php if(is_category()) { ?>

		<div style="display: none;">
			<div class="archive_title">
				<?php printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
				<div class="clear"></div>
			</div><!--//archive_title-->
		</div>
		<?php } ?>			

	    <div id="the_posts" class="final-tiles-gallery caption-bottom">
	        <div class="ftg-items">
				<?php

				global $wp_query;
				$args = array_merge( $wp_query->query, array( 'posts_per_page' => 99 ) );

				query_posts( $args );        
				while (have_posts()) : the_post(); ?>
<?php
	$url = '';
	$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
?>                    

                    <div class="tile">
                        <a class="tile-inner" href="<?php the_permalink(); ?>">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo $url; ?>" class="item">
                        <span class="title"><?php the_title(); ?></span>
                        <!--<span class="subtitle"><?php the_title(); ?></span>-->
                        </a>
                    </div>
				<?php endwhile; ?>
				</div>
			</div><!--//gallery-->

			<div class="clear"></div>
		</div><!--//content-->

		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#the_posts').finalTilesGallery();
			});
        </script>

<?php get_footer(); ?> 		
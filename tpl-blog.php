<?php get_header(); ?>	

		<div id="content">
			<div class="container">
				<div class="">
					<div id="posts_cont">
						<?php
						$category_ID = get_category_id('blog');
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 99,
							'cat' => $category_ID,
							'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
						);

						query_posts($args);

						$x = 1;
						while (have_posts()) : the_post(); ?>                                            		

							<div class="home_blog_box home_blog_box_full">
								<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>
									<iframe width="370" height="210" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>" frameborder="0" allowfullscreen></iframe>
								<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>
									<iframe src="http://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=085e17" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
								<?php } else { ?>
									<div class="zoom_img_cont"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('corp_blog_img'); ?></a></div>
								<?php } ?>

								<div class="home_blog_box_cont">
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p><?php echo ds_get_excerpt('440'); ?></p>
								</div>

								<div class="clear"></div>

							</div> <!-- //home_blog_box -->	

							<?php if($x%2==0) { echo '<div class="clear"></div>'; } ?>

						<?php $x++; ?>
						<?php endwhile; ?>

						<div class="clear"></div>
					</div><!--//posts_cont-->
					
					<div class="load_more_cont">
						<div align="center"><div class="load_more_text">
						<?php
						ob_start();
						//next_posts_link('<img src="' . get_bloginfo('stylesheet_directory') . '/images/loading-button.png" />');
						next_posts_link('LOAD MORE');
						$buffer = ob_get_contents();
						ob_end_clean();

						if(!empty($buffer)) echo $buffer;
						?>
						</div>
					</div>


					</div><!--//load_more_cont-->     					

					<?php
					global $wp_query;
					//echo '**' . $wp_query->max_num_pages . '**';	
					$max_pages = $wp_query->max_num_pages;
					?>			

					<div id="max_pages_id" style="display: none;"><?php echo ceil($wp_query->found_posts / 99); //echo $max_pages-1; ?></div>
					
					<?php wp_reset_query(); ?> 
				
				</div><!--//single_full_cont-->
				
				<?php //get_sidebar(); ?>
				
				<div class="clear"></div>
			</div><!--//container-->
		</div><!--//content-->

		<script type="text/javascript">
			$(document).ready(function($) {
				var curPage = 1;
				var pagesNum = $("#max_pages_id").html();   // Number of pages	

				if(pagesNum == 1)
					$('.load_more_text a').css('display','none');	

				$('#posts_cont').infinitescroll({
					// selector for the paged navigation (it will be hidden)
					navSelector  : "div.load_more_text",            
					// selector for the NEXT link (to page 2)
					nextSelector : "div.load_more_text a:first",
					// selector for all items you'll retrieve
					itemSelector : "#posts_cont .home_blog_box",
					
					behavior: "twitter",
					maxPage: <?php echo $max_pages; ?>
				}, function(arrayOfNewElems) {

					$('#posts_cont').append('<div class="clear"></div>');
						//$('.home_post_cont img').hover_caption();
						$('.load_more_text a').css('visibility','visible');
								curPage++;
						// alert(curPage + '**' + pagesNum);
								if(curPage == pagesNum) {
									//$(window).unbind('.infscr');
									$('.load_more_text a').css('display','none');
								} else {}  		      

						// optional callback when new content is successfully loaded in.
						// keyword `this` will refer to the new DOM content that was just added.
						// as of 1.5, `this` matches the element you called the plugin on (e.g. #content)
						//                   all the new elements that were found are passed in as an array
				});
			});
		</script>	


<?php get_footer(); ?> 		
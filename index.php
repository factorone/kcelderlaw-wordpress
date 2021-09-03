<?php get_header(); ?>	
<?php $shortname = "kcel_theme"; ?>

    <?php if(get_option($shortname.'_disable_slideshow','') != "Yes") { ?>
        <section class="demo_wrapper" id="top">
            <article class="demo_block">
            <ul id="demo1">
                <?php
                $slider_arr = array();
                $x = 0;
                $args = array(
                    //'category_name' => 'blog',
                    'post_type' => 'post',
                    'meta_key' => 'ex_show_in_slideshow',
                    'meta_value' => 'Yes',
                    'posts_per_page' => 99
                );

                    query_posts($args);

                    while (have_posts()) : the_post(); 
                ?>     

                    <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></li>
                    <?php array_push($slider_arr,get_the_ID()); ?>
                    <?php $x++; ?>
                    <?php endwhile; ?>

                    <?php wp_reset_query(); ?>   
                </ul>
            </article>
        </section>
    <?php }  ?> 

    <div id="the_posts" class="final-tiles-gallery caption-bottom">
        <div class="ftg-items">
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 99,
                'meta_key' => 'ex_show_in_homepage',
            );
            query_posts($args);

            while (have_posts()) : the_post(); ?>
                <?php
                    $url = '';
                    $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );

                    if ($url == '') {
                        $url = get_stylesheet_directory_uri().'/images/no-image.jpg';
                    }
                ?>
                    
            <div class="tile">
                <a class="tile-inner" href="<?php the_permalink(); ?>">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo $url; ?>" class="item">
                    <span class="title"><?php the_title(); ?></span>
                    <span class="subtitle"><?php echo ds_get_excerpt(25); ?></span>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
    </div><!--//gallery-->
    <div class="clear"></div>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#the_posts').finalTilesGallery({
                minTileWidth: 300
            });
        });
    </script>
		
		
<?php get_footer(); ?>	
<?php
get_header();
//while(have_posts()):
//	the_post();
?>
    <div class="home-bannerwrap">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="hm-banner-wrap">
                        <div class="hm-sliderwrap">
                            <div class="hmslider">
                                <?php
                                //Custom field for the slider
                                // Check rows exists.
                                if( have_rows('main_slider') ):
                                    while( have_rows('main_slider') ) : the_row();
                                ?>
                                <div class="sliderwrap" style="background-image:url(<?php the_sub_field('slider_image'); ?>);
                                        background-size: cover;
                                        background-repeat: no-repeat;">
                                    <div class="slider-container">
                                        <?php the_sub_field('slider_content'); ?>
                                        <a href="<?php the_sub_field('custom_link'); ?>" class="btn-explor">Explore</a>
                                    </div>
                                </div>
                                <?php
                                    endwhile;
                                endif;
                                ?>

                                <!--Custom query to get posts-->
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page'   => 1,
                                    'order'    => 'ASC'
                                );

                                $posts =  get_posts( $args );
                                foreach ($posts as $post):
                                    setup_postdata($post);
                                ?>
                                <div class="sliderwrap" style="background-image:url(<?php the_post_thumbnail_url(); ?>);
                                        background-size: cover;
                                        background-repeat: no-repeat;">
                                    <div class="slider-container">
                                        <?php the_content(); ?>
                                        <a href="<?php the_permalink(); ?>" class="btn-explor">Explore</a>
                                    </div>
                                </div>
                                    <?php
                                    wp_reset_postdata();
                                endforeach;
                                ?>
                            </div>

                        </div>
                        <div class="scroll-wrap">
                            <div class="mouse"></div>
                            <p>Scroll</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
//endwhile;
get_footer();
?>

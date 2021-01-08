<?php
get_header(); ?>

<div class="container">

	<section class="post-content-wrapper single-page homepage-gallery">
    <?php

        $args = array(
            'post_type'=> 'post',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'    => 'DESC',
            'posts_per_page' => -1, // this will retrive all the post that is published,
        );

        $result = new WP_Query( $args );
        if ( $result-> have_posts() ) : ?>
            <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                <div class="img-w">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <!-- <div class="overlay"><h2><div class="field_price">¥<?php usces_the_firstPrice(); ?></div></h2></div> -->
                </div>               
                
            <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
    </section> <!-- end content-main -->

	<?php get_sidebar(); ?>

</div> <!-- end container -->	

<?php if(is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')){ ?>

	<?php get_template_part('bottom','widget'); ?>

<?php } ?>

<?php get_footer(); ?>
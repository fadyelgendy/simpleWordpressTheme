<?php 
/*
    Template Name: Work Page
*/

get_header(); ?>

<div class="grid_12 omega clearfix">
    <?php
        $arg = array(
            'post_type' => 'work'
        ); 
        $the_query = new WP_Query($arg);
    ?>
    <?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div class="grid_6 spotlight project" style="background-color:<?php the_field('background_color'); ?>">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_field('homepage_slider_image'); ?>">
            </a>
            <h4>
                <a href="<?php the_permalink()?>">
                    <?php the_title(); ?>
                </a>
            </h4>

            <?php the_field('description'); ?>
            <p>
                <a href="<?php the_permalink(); ?>" class="btn blue" style="background-color: <?php the_field('button_color'); ?>">
                    View Project &rarr; 
                </a>
            </p>
        </div>

        <?php endwhile;
        else : ?>
        <p>Oops!, there is no posts to display.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
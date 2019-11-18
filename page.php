
<?php
    /** 
     * This template controls all statis page and future ones.
    */
    
    get_header(); 
?>
<div class="grid_12 omega clearfix">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <hr>

    <?php endwhile;
        else : ?>
            <p>Oops!, there is no posts to display.</p>
        <?php endif; ?>
</div>
<!-- Get testimomials part -->
<?php get_template_part('content', 'testimonials');

get_footer(); ?>
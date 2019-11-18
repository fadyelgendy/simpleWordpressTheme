
<?php
    /** 
     * This template controls all statis page and future ones.
    */
    
    get_header(); 
?>
<h1>Category: <?php single_cat_title();?></h1>
<div class="grid_12 omega clearfix">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('content', 'post'); ?>

    <?php endwhile;
        else : ?>
            <p>Oops!, there is no posts to display.</p>
        <?php endif; ?>
</div>
<!-- Get testimomials part -->
<?php get_template_part('content', 'testimonials');

get_footer(); ?>
<?php get_header(); ?>

<div class="grid_12 omega clearfix">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h3><?php the_title(); ?></h3>
	<div class="intro">
		<p><?php the_field( 'description' ); ?></p>
	</div>
		
	<p>
		<a href="<?php the_field('url'); ?>" class="btn blue" style="background-color:<?php the_field('button_color'); ?>">
			View Project &rarr;
		</a>
	</p>

	<hr>
	<div class="project-images">
		<?php the_field('project_images');?>
	</div>
	<?php endwhile;
	else : ?>
	<p>Oops!, there is no posts to display.</p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
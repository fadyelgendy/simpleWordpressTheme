<!DOCTYPE html>
<html>
    <head>
        <title><?php 
            wp_title('-', true, 'right'); // name of page
            bloginfo('name'); // name of the site
        ?></title>
        <meta name="viewport" content="width=device-width, initial-scale= 1.0" />
            <?php wp_head(); ?> <!-- to include any tage like style in head tag -->
    </head>
    <body>
        <div class="container clearfix">
			<header>
				<div class="grid_12 omega none">
					<hgroup>
						<h1><a href="index.html"><?php bloginfo('name'); ?></a></h1>
						<h2><?php bloginfo('description'); ?></h2>
					</hgroup>
				</div>
				<div class="grid_12 omega">
					<nav>
                        <?php 
                            $args = array(
                            'menu' => "main-menu",
                            'echo' => false
                            );

                        echo strip_tags(wp_nav_menu($args), '<a>');
                        ?>
                    </nav>
				</div>
			</header>

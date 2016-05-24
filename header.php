<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name');?>
        </title>
        <?php wp_head(); ?>
	</head> 
	
<body <?php body_class();?>>
	<header class="site-header">
		<nav class="site-nav">
			<?php

			$args = array(
				'theme_location' => 'primary'
			);

			?>
			<?php wp_nav_menu ($args);?>
		</nav>
	</header> 
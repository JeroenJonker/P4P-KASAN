<?php
session_start();
?>

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
            (int)$counter = 0;
            $query = new WP_Query( array('category_name' => 'Uncategorized', 'posts_per_page' => '4'));
if( $query->have_posts()) : ?>
    <?php while($query->have_posts()) {
        $query->the_post(); ?>
            <?php if ($counter == 0)
                { ?>
            <div class="mobile-left">
                <?php }
             if ($counter == 2)
                { ?>
            </div>
                    <div class="content mobile-top">
                        <img class="logo" src="<?php bloginfo('template_directory'); ?>/IMG/Logo.png" alt="logo"/>
                    </div>
            <div class="mobile-right">
        <?php  } ?>
                <div class="content">
                    <h2><?php the_title(); ?></h2>
                </div> 
            <?php $counter++;
} ?>
            </div> <?php

            else : echo " PEEP";
            endif;
                        wp_reset_postdata(); ?>
		</nav>

	</header> 
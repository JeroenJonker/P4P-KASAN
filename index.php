<?php

get_header();
if(have_posts()) :  
    while(have_posts()) : the_post();
    { ?>
            <article class="first-post">
                <?php get_template_part('content', get_post_format()); ?>
            </article> <?php
    }
    endwhile;
    else : 
        echo '<p> No content </p>';
    endif;

get_footer();

?>

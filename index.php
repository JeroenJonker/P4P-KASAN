<?php

get_header();
if(have_posts()) : 
    (int)$counter = 0; 
    while(have_posts() && $counter < 1) : the_post();
    {
        the_content();
        //get_template_part('page', get_post_format());

        $counter++;
    }
    endwhile;
    else : 
        echo '<p> No content </p>';
    endif;

get_footer();

?>

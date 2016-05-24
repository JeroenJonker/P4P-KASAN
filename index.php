
<?php

get_header();
if(have_posts()) : 
    (int)$counter = 0; 
    while(have_posts() && $counter < 5) : the_post();
    {
        if ($counter == 0)
        { ?>
            <article>
                <p>test</p>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article> <?php
        }
        elseif ($counter == 1)
        {?>
            <article>
                <p> GEEN IDEE</p>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article> <?php
        }
        elseif ($counter == 2)
        {?>
            <article>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article> <?php
        }
        elseif ($counter == 3)
        {?>
            <article>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article> <?php
        }
        elseif ($counter == 4)
        {?>
            <article>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article> <?php
        }
                $counter++;
    }
    endwhile;
    else : 
        echo '<p> No content </p>';
    endif;

get_footer();

?>

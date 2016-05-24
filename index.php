<?php

get_header();
if(have_posts()) : 
    (int)$counter = 0; 
    while(have_posts() && $counter < 5) : the_post();
    {
        if ($counter == 0)
        { ?>
            <article class="first-post">
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <img class="testzor" src="<?php echo $image[0]; ?>"/>
                <!--div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">

                </div-->
                <?php endif; ?>
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

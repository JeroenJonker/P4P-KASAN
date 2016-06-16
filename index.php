<?php

get_header();
?>
<div class="container">
    
    <iframe class="vimeoPlayers" id="player" src="https://player.vimeo.com/video/22884674?api=1&amp;player_id=player&autoplay=1&automute=1&color=ffffff&title=0&byline=0&portrait=0&controls=0" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
        
       
		<script src="//f.vimeocdn.com/js/froogaloop2.min.js">
		
		
		var playerYO;
		
		$( document ).ready(function() {
			
			
			jQuery('#player').each(function(){
				playerYO = Froogaloop(this);
				playerYO.addEvent('ready', ready);
			});
			
			
			
		});
		
		function ready(e){
			console.log("JOP", playerYO);
			playerYO.api('setVolume',0);
		}
        </script>
        </iframe>
    <?php 
  (int)$counter = 0;
if(have_posts()) :  
    while(have_posts() && $counter < 6) : the_post();
    {  ?><?php
            if ($counter == 0)
        {
            ?> <article class="first-post" id="boxnr<?php echo $counter; ?>">
                        <?php if(has_post_thumbnail())
                    { ?>
                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'hoofdnieuws-image' );?>
                        <div id="post" class="first-article" 
                             style="background: linear-gradient(
                                    rgba(0, 0, 0, 0.5), 
                                    rgba(0, 0, 0, 0.5)), url('<?php echo $thumb['0'];?>');
">  
                            <h2 class="postTitle"><?php the_title(); ?></h2>
                        </div>
                    <?php } ?>
                        <div class="content_post">
                            <?php the_content(); ?>
                        </div>
                        <div class="break"> <img class="logoicon" src="<?php bloginfo('template_directory'); ?>/IMG/Logo.png"/></div>
            </article> <?php
        }
        if ($counter == 1)
        {
            ?> <article class="second-post" id="boxnr<?php echo $counter; ?>">
                        <?php if(has_post_thumbnail())
                    { ?>
                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'hoofdnieuws-image' );?>
                        <div id="post" class="first-article" 
                             style="background: linear-gradient(
                                    rgba(0, 0, 0, 0.5), 
                                    rgba(0, 0, 0, 0.5)), url('<?php echo $thumb['0'];?>');">  
                            <h2 class="postTitle"><?php the_title(); ?></h2>
                        </div>
                    <?php } ?>
                        <div class="contentDiensten">
                            
                            <article class="test">


                            <!-- Eerste kolom -->
                            <div class = "column">
                                <h1 class="columnHeading">
                                <?php 
                                $my_titleid = 41;
                                $title_post = get_the_title($my_titleid);
                                echo $title_post;
                                ?></h1>
                                <?php 
                                $my_postid = 41;//This is page id or post id
                                $content_post = get_post($my_postid);
                                $content = $content_post->post_content;
                                $content = apply_filters('the_content', $content);
                                $content = str_replace(']]>', ']]&gt;', $content);
                                echo $content;
                                ?>
                            </div>


                            <!-- Tweede kolom -->
                            <div class = "column">
                                <h1 class="columnHeading">
                                <?php 
                                $my_titleid = 39;
                                $title_post = get_the_title($my_titleid);
                                echo $title_post;
                                ?></h1>
                                <?php 
                                $my_postid = 39;//This is page id or post id
                                $content_post = get_post($my_postid);
                                $content = $content_post->post_content;
                                $content = apply_filters('the_content', $content);
                                $content = str_replace(']]>', ']]&gt;', $content);
                                echo $content;
                            ?>
                            </div>


                            <!-- Derde kolom -->
                            <div class = "column">
                                <h1 class="columnHeading">
                                <?php 
                                $my_titleid = 37;
                                $title_post = get_the_title($my_titleid);
                                echo $title_post;
                                ?></h1>
                                <?php 
                                $my_postid = 37;//This is page id or post id
                                $content_post = get_post($my_postid);
                                $content = $content_post->post_content;
                                $content = apply_filters('the_content', $content);
                                $content = str_replace(']]>', ']]&gt;', $content);
                                echo $content;
                                ?>

                            </div>
                        
                            </article>
                        </div>
                        <div class="clear"></div>
                        <div class="break"> <img class="logoicon" src="<?php bloginfo('template_directory'); ?>/IMG/Logo.png"/></div>
            </article> <?php
        }
        if ($counter == 2)
        {
            ?> <article class="second-post" id="boxnr<?php echo $counter; ?>">
                        <?php if(has_post_thumbnail())
                    { ?>
                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'hoofdnieuws-image' );?>
                        <div id="post" class="first-article" 
                             style="background: linear-gradient(
                                    rgba(0, 0, 0, 0.5), 
                                    rgba(0, 0, 0, 0.5)), url('<?php echo $thumb['0'];?>');">  
                            <h2 class="postTitle"><?php the_title(); ?></h2>
                        </div>
                    <?php } ?>
                        <div class="content_post">
                            <?php the_content(); ?>
                        </div>
                        <div class="break"> <img class="logoicon" src="<?php bloginfo('template_directory'); ?>/IMG/Logo.png"/></div>
            </article> <?php
        }      
        
        if ($counter == 3)
        {
            ?> <article class="second-post" id="boxnr<?php echo $counter; ?>">
                    <?php if(has_post_thumbnail())
                    { ?>
                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'hoofdnieuws-image' );?>
                        <div id="post" class="first-article" 
                             style="background: linear-gradient(
                                    rgba(0, 0, 0, 0.5), 
                                    rgba(0, 0, 0, 0.5)), url('<?php echo $thumb['0'];?>');">  
                            <h2 class="postTitle"><?php the_title(); ?></h2>
                        </div> 
                <?php } ?>
                        <div class="content_post">
                            <?php the_content(); ?>
                        </div>
                        <div class="break"> <img class="logoicon" src="<?php bloginfo('template_directory'); ?>/IMG/Logo.png"/></div>
            </article> <?php
        }
        if ($counter == 4)
        {   
            ?>
            <div class="container-box" id="boxnr<?php echo $counter; ?>" style="background: url(<?php bloginfo('template_directory'); ?>/IMG/test4.jpg">
                 <h2> <?php the_title(); ?></h2>
                    <div class="gallery-box">
                        <div class="wallpaper-box">
                            <?php the_content(); ?>
                        </div>
                    </div>
    <?php }
     if ($counter == 5)
        {
            ?><article class="post-gallery" id="boxnr<?php echo $counter; ?>">
                                    <?php if(has_post_thumbnail())
                    { ?>
                <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'hoofdnieuws-image' );?>
                    <div id="post" class="first-article" style="background-image: url('<?php echo $thumb['0'];?>')"> 
                    </div>
                                    <?php } ?>
                <div class="instagram-box">
                    <?php the_content(); ?> 
                </div>

            </article>
            </div><?php
        }?>
                
            
 <?php
        $counter++;
    }
    endwhile;
    else : 
        echo '<p> No content </p>';
    endif;
    ?> </div> <?php
get_footer();

?>

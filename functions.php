<?php
function myStartSession() {
    if(!session_id()) {
        session_start();
    }
}
add_action('init', 'myStartSession');

//function myEndSession() {
//    session_destroy ();
//}
//
//add_action('wp_logout', 'myEndSession');
//add_action('wp_login', 'myEndSession');

function basketbal_resources() {
    
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'basketbal_resources');

//theme setup
function basketbal_setup() {
    //Add naviagtion menu's
    register_nav_menus(array(
        'footer' => __('Footer Menu'),
        'primary' => __('Primary Menu'),
        ));

    // Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120,true);
    add_image_size('banner-image', 920, 210, true);
    add_image_size('post-thumbnail', 180, 120,true);
    
    // Add post-format support
    add_theme_support('post-formats', array('gallery','video','image'));
}

function extra_setup() {
    register_nav_menu ('primary mobile', __( 'Navigation Mobile', 'twentythirteen' ));
}

function set_container_class ($args) {
$args['container_class'] = str_replace(' ','-',$args['theme_location']).'-nav'; return $args;
}

add_filter ('wp_nav_menu_args', 'set_container_class');

add_action('after_setup_theme', 'basketbal_setup');

add_action( 'after_setup_theme', 'extra_setup' );

function bdw_get_images() {
 
    // Get the post ID
    $iPostID = $post->ID;
 
    // Get images for this post
    $arrImages =& get_children('post_type=attachment&post_mime_type=image&post_parent=' . $iPostID );
 
    // If images exist for this page
    if($arrImages) {
 
        // Get array keys representing attached image numbers
        $arrKeys = array_keys($arrImages);
 
        /******BEGIN BUBBLE SORT BY MENU ORDER************
        // Put all image objects into new array with standard numeric keys (new array only needed while we sort the keys)
        foreach($arrImages as $oImage) {
            $arrNewImages[] = $oImage;
        }
 
        // Bubble sort image object array by menu_order TODO: Turn this into std "sort-by" function in functions.php
        for($i = 0; $i < sizeof($arrNewImages) - 1; $i++) {
            for($j = 0; $j < sizeof($arrNewImages) - 1; $j++) {
                if((int)$arrNewImages&#91;$j&#93;->menu_order > (int)$arrNewImages[$j + 1]->menu_order) {
                    $oTemp = $arrNewImages[$j];
                    $arrNewImages[$j] = $arrNewImages[$j + 1];
                    $arrNewImages[$j + 1] = $oTemp;
                }
            }
        }
 
        // Reset arrKeys array
        $arrKeys = array();
 
        // Replace arrKeys with newly sorted object ids
        foreach($arrNewImages as $oNewImage) {
            $arrKeys[] = $oNewImage->ID;
        }
        ******END BUBBLE SORT BY MENU ORDER**************/
 
        // Get the first image attachment
        (int)$x = 0;
        while ($arrKeys[$x] != null)
        {
        $iNum = $arrKeys[$x];
 
        // Get the thumbnail url for the attachment
//        $sThumbUrl = wp_get_attachment_thumb_url($iNum);
 
        // UNCOMMENT THIS IF YOU WANT THE FULL SIZE IMAGE INSTEAD OF THE THUMBNAIL
        $sImageUrl = wp_get_attachment_url($iNum);
 
        // Build the <img> string
        $sImgString = '<a href="' . get_permalink() . '">' .
                            '<img class="slideshowCenter mySlides" src="' . $sImageUrl . '" alt="Thumbnail Image" title="Thumbnail Image" />' .
                        '</a>';
// width="150" height="150"
        // Print the image
            $x = $x +1;
        echo $sImgString;
        }
    }
}

?>
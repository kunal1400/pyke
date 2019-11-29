<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    //wp_dequeue_script( 'lts_mce_button' );
 
}
require('inc/frontend/featured-media.php');

class Link_Timestamp_Public_theme extends Link_Timestamp_Public {
        public function do_lts_shortcode($attr, $content) {
        $options = get_option('ps_lts_settings');
        // Only link singular posts if the option is set
        if (!is_singular() && $options['only_link_single']) {
            return $content;
        }

        // Cover a few attributes for ease of use
        $time = -1;
        $link_jummp = "";
        $icon_class = "";
        $link_color = "";

        if (isset($attr['time']) && isset($attr['link']) && isset($attr['icon']) && isset($attr['color'])) {
            $time = $attr['time'];
            $link_jummp = $attr['link'];
            $icon_class = $attr['icon'];
            $link_color = $attr['color'];
        }

        if ($time == -1) {
            return $content;
        } else {
            $output =  '<a class="ps_lts_tslink" data-time=' . $time .' href="'.$link_jummp.'" style="color: '.$link_color.'">' . $content . ' <i class="fa '.$icon_class.'"></i></a>';
            return apply_filters( 'ps_lts_shortcode_result', $output );

        }
    }
}
new Link_Timestamp_Public_theme();

// function my_child_theme_setup() {
// //remove_action( 'deadlift_before_post_content_standard_title', 'deadlift_output_post_content_standard_media',10,1 );
//  var_dump( interest_featured_media());
// add_action( 'deadlift_before_post_content_standard_title', 'interest_featured_media',11,1 );
// }

// add_action( 'after_setup_theme', 'my_child_theme_setup' );


/**
 * Output the excerpt
 *
 * @param string $post_excerpt_type
 */
function deadlift_output_the_excerpt_new( $post_excerpt_type ) {
    
    /* Case page builder is used */
    if ( preg_match( '#vc_row#', get_the_content() ) ) {

        $content = ( get_the_excerpt() ) ? get_the_excerpt() : get_the_content();
        echo '<div class="excerpt excerpt1">' . $content . '</div>';

        if ( $content ) {
            echo '<div class="excerpt excerpt2">' . deadlift_more_button() . '</div>';
        }
            
    } else {

        if ( 'auto' === $post_excerpt_type ) {

            echo '<div class="excerpt excerpt3">';
            echo( get_the_excerpt() );
            echo '</div>';

        } else {
            echo deadlift_content( deadlift_more_text() );
        }
    }
}
add_action( 'deadlift_the_excerpt', 'deadlift_output_the_excerpt_new', 11, 1 );

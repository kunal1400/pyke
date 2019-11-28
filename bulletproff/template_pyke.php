<?php 
/* 
Template Name: Pyke Posts Template
*/ 
$section_style = $css_classes = $page_headerimg_class = '';
$redux_ThemeTek = get_option( 'redux_ThemeTek' );
$themetek_page_subtitle = get_post_meta( get_the_ID(), '_themetek_page_subtitle', true );
$themetek_page_showhide_title = get_post_meta( get_the_ID(), '_themetek_page_showhide_title', true );
$themetek_page_bgcolor = get_post_meta( get_the_ID(), '_themetek_page_bgcolor', true );
$themetek_page_title_color = get_post_meta( get_the_ID(), '_themetek_page_title_color', true );
$themetek_page_title_subtitle_color = ' color:'.$themetek_page_title_color.';';
$themetek_page_layout = get_post_meta( get_the_ID(), '_themetek_page_layout', true );
$themetek_page_top_padding = get_post_meta( get_the_ID(), '_themetek_page_top_padding', true );
$themetek_page_bottom_padding = get_post_meta( get_the_ID(), '_themetek_page_bottom_padding', true );
$themetek_post_id = get_the_ID();
$keydesign_header_image = wp_get_attachment_image_src( get_post_thumbnail_id($themetek_post_id), 'full', false );
if (!$keydesign_header_image[0]) {
	$page_headerimg_class = "no-header-image";
}
$css_classes = implode(' ', array( 'section', $page_headerimg_class, $post->post_name ));
if ( '' !== $themetek_page_bgcolor ) {
	$section_style .= 'background-color:' .$themetek_page_bgcolor .';';
}
if ( '' !== $themetek_page_top_padding ) {
	$section_style .= 'padding-top:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $themetek_page_top_padding ) ? $themetek_page_top_padding : $themetek_page_top_padding . 'px' ) . ';';
}
if ( '' !== $themetek_page_bottom_padding ) {
	$section_style .= 'padding-bottom:' . ( preg_match( '/(px|em|\%|pt|cm)$/', $themetek_page_bottom_padding ) ? $themetek_page_bottom_padding : $themetek_page_bottom_padding . 'px' ) . ';';
}
get_header();

function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

function getWpBakeryStructure() {
	$string = '[vc_row full_width="stretch_row_content" css=".vc_custom_1574438053794{margin-left: 40px !important;}"][vc_column width="1/6" offset="vc_hidden-sm vc_hidden-xs"][/vc_column][vc_column width="4/6" css=".vc_custom_1574695077279{margin-right: 0px !important;margin-left: 0px !important;}"]';
	$query = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish' ) );
	$posts = $query->posts;
	$counter = 0;
	$break_after = 3;
	$totalNumber = count($posts);
	foreach($posts as $post) {
		if($counter % $break_after == 0) {
			$string .= 	'[vc_row_inner]';
		}
		$description .= apply_filters('the_excerpt', get_post_field('post_excerpt', $post->ID));
		$str 		  = get_the_content("Read More", false, $post->ID);
		$videoLink 	  = get_string_between($str, '[vc_video link=',']');
		if($videoLink) {
			$finalLink = '';
			$videoLinkArray = explode(" ", $videoLink);
			foreach ($videoLinkArray as $key => $videoLink) {
				if(strstr($videoLink, "https://")) {
					$finalLink = $videoLink;
					break;
				}
			}			
			$videoLink = '[vc_video link='.$finalLink.' css=".vc_custom_1574694694556{margin-bottom: 15px !important;}"]';
		}
		$string .= '[vc_column_inner width="1/3" css=".vc_custom_1574695228836{margin-left: 0px !important;}"]'.$videoLink.'[mpc_textblock content_width="100" font_preset="default" font_size="16" margin_divider="true" margin_css="margin-top:0px;margin-bottom:-20px;" mpc_tooltip__padding_divider="true"]<strong><a href="'.$post->guid.'">'.$post->post_title.'</a></strong>[/mpc_textblock][mpc_textblock content_width="100" font_preset="default" font_size="13" font_line_height="1.5" margin_divider="true" margin_css="margin-top:0px;margin-bottom:-25px;"]'.$description.'[/mpc_textblock][mpc_textblock content_width="100" font_size="12" margin_divider="true" margin_css="margin-top:0px;margin-bottom:-25px;"]<p style="text-align: center;">'.get_the_date('d M Y', $post->ID).'</p>[/mpc_textblock][mpc_textblock content_width="100" font_size="14" margin_divider="true" margin_css="margin-top:0px;margin-bottom:0px;"]<p style="text-align: center;"><strong><a href="'.$post->guid.'">&gt;WATCH MORE</a></strong></p>[/mpc_textblock][/vc_column_inner]';
		if ($counter % $break_after == ($break_after-1) || $counter == $totalNumber-1) {
			$string .= 	'[/vc_row_inner]';
		}
		++$counter;
	}	
	$string .= '[/vc_column][vc_column width="1/6"][vc_widget_sidebar sidebar_id="blog-sidebar"][/vc_column][/vc_row]';
	return $string;
}
?>

  <section id="single-page" class="<?php echo esc_attr( trim( $css_classes ) ); ?>" <?php echo ('' !== $section_style) ? 'style="'. esc_attr($section_style).'"' : ''; ?>>
   <?php if (empty($themetek_page_showhide_title)) { ?>
   <div class="row single-page-heading">
     <?php if ($keydesign_header_image[0]) : ?>
       <div class="header-overlay parallax-overlay" style="background-image:url('<?php echo esc_url($keydesign_header_image[0]); ?>')"></div>
     <?php endif; ?>
    <div class="container <?php echo ( !empty($themetek_page_layout) ? 'fullwidth' : '' );?>">
        <?php if(function_exists('bcn_display')) : ?>
          <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php bcn_display(); ?>
          </div>
        <?php endif; ?>
        <?php if (empty($themetek_page_showhide_title)) : ?>
          <h1 class="section-heading" <?php if (!empty($themetek_page_title_color)) : ?> style="<?php echo esc_html($themetek_page_title_subtitle_color); ?>"<?php endif; ?>><?php the_title(); ?></h1>
        <?php endif; ?>
        <?php if (!empty($themetek_page_subtitle)) : ?>
          <p class="section-subheading" <?php if (!empty($themetek_page_title_color)) : ?> style="<?php echo esc_html($themetek_page_title_subtitle_color); ?>"<?php endif; ?>><?php echo esc_html($themetek_page_subtitle); ?></p>
        <?php endif; ?>
      </div>
    </div>
   <?php } ?>
    <div class="container <?php echo ( !empty($themetek_page_layout) ? 'fullwidth' : '' );?>">
      <div class="row single-page-content">
        <?php echo do_shortcode(getWpBakeryStructure()); ?>
      </div>
    </div>
  </section>

<?php get_footer();?>

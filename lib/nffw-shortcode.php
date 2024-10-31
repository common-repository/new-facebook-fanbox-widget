<?php
// widget  Shortcode  starts here
function nffw_shortcode( $atts ) {
	extract( shortcode_atts(
		array(
			'page' 			=> 'https://facebook.com/odrasoft',
			'width' 		=> '340',
			'height' 		=> '500',
			'hide_cover' 	=> 'false',
			'show_faces' 	=> 'true',
			'show_posts' 	=> 'false',
		), $atts )
	);
	$output = '<div class="fb-page" data-href="'.$page.'" data-width="'.$width.'" data-hide-cover="'.$hide_cover.'" data-show-facepile="'.$show_faces.'" data-show-posts="'.$show_posts.'"><div class="fb-xfbml-parse-ignore"><blockquote cite="'.$page.'"><a href="'.$page.'">Facebook</a></blockquote></div></div>';
	
	return $output;
}
add_shortcode( 'fbox', 'nffw_shortcode' );
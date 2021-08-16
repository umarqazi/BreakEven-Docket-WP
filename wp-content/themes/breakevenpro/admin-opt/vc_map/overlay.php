<?php
function designas_overlay() {
	
	vc_map(
        array(
            'name' => __( 'Fancy Overlay' ),
            'base' => 'd_overlay',
            'category' => __( 'Easy Component' ),
			"icon" => get_template_directory_uri() . "/images/icon.png",
            'params' => array(
			
					array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => __( 'Overlay_title' ),
                    'param_name' => 'title',
                    'value' => __( 'Place your Box title' ),
                    'description' => __( 'Service' ),
                ),
				
				array(
                    'type' => 'attach_image',
                    'holder' => '',
                    'class' => '',
                    'heading' => __( 'Service Image' ),
                    'param_name' => 'abt_img',
                    'value' => '',
                    'description' => __( 'Upload Image' ),
                ),
				
				
				array(
                    'type' => 'vc_link',
                    'holder' => '',
                    'class' => '',
                    'heading' => __( 'Service Page url' ),
                    'param_name' => 'btn_read_more',
                    'value' => '#',
                    'description' => __( 'Place Service Page url' ),
                ),
			
			
			)
			
			
			));
	}
	add_action( 'vc_before_init', 'designas_overlay' );
	
	
	function designas_overlay_function( $atts, $content ) {
    $atts = shortcode_atts(
    array(
        'title' => __( 'Title' ),
		'abt_img' =>__ (''),
		'btn_read_more' => __(''),
		
    ), $atts, 'd_overlay'
);

 $img_abt = wp_get_attachment_image_src($atts["abt_img"], "over_image");
 $imgSrc_abt = $img_abt[0];
 $link = vc_build_link($atts['btn_read_more']);
 $html = '
		<a class="d_overlay" href="'.$link['url'].'">
			<img src="'.$imgSrc_abt.'" alt="'.$atts['title'].'">
			<div class="description">'.$atts['title'].'</div>
			<div class="overlay"></div>
		</a>';
return $html;
}
add_shortcode( 'd_overlay', 'designas_overlay_function' );   

?>

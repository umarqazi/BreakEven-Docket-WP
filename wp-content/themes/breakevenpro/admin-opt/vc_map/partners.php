<?php 

//////////////////////////Fancy Content////////////////////////////////
function designas_partners() {
    // Title
    vc_map(
        array(
            'name' => __( 'Clients' ),
            'base' => 'designas_partners_content',
			"icon" => get_template_directory_uri() . "/images/icon.png",
            'category' => __( 'Easy Component' ),
            'params' => array(
			
				
				
				array(
				"type"        => "attach_images",
				"heading"     => esc_html__( "Add Clients Images", "appcastle-core" ),
				"description" => esc_html__( "Add Clients Images", "appcastle-core" ),
				"param_name"  => "screenshots",
				"value"       => "",
				),
                
				
				
            )
        )
    );
}

add_action( 'vc_before_init', 'designas_partners' );

function designas_partners_content_function( $atts, $content ) {

$gallery = shortcode_atts(
	array(
		'screenshots'      =>  'screenshots',
	), $atts );

 $image_ids = explode(',',$gallery['screenshots']);
 $return = '
	<div class="clients">';
	foreach( $image_ids as $image_id ){
	$images = wp_get_attachment_image_src( $image_id, 'company_logo' );
 	$return .='<div class="images"><img src="'.$images[0].'" alt="'.$atts['title'].'"></div>';
	$images++;
	}
	$return .='</div>';
return $return;
}	


add_shortcode( 'designas_partners_content', 'designas_partners_content_function' )

?>
	


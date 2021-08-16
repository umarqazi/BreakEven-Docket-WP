<?php 

//////////////////////////Fancy Content////////////////////////////////
function designas_f_headquarters() {
    // Title
    vc_map(
        array(
            'name' => __( 'Headquarters' ),
            'base' => 'designas_f_headquarters_content',
			"icon" => get_template_directory_uri() . "/images/icon.png",
            'category' => __( 'Easy Component' ),
            'params' => array(
                array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => __( 'Title' ),
                    'param_name' => 'title',
                ),
				
				 array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => __( 'Address' ),
                    'param_name' => 'address',
                ),
				
				
				array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => __( 'Phone Number' ),
                    'param_name' => 'phone_number',
                ),
				
				
				
				array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => __( 'Email' ),
                    'param_name' => 'email_address',
                ),
				
				array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => __( 'Fax' ),
                    'param_name' => 'fax',
                ),
				
				
				array(
					"type" => "dropdown",
					"heading"     => __("Theme"),
					"param_name"  => "thmem",
					"admin_label" => true,
					"value"       => array(
					'light'   => 'light',
					'Dark'   => 'dark',
					
					),
					"std"         => $defaults['thmem'],
				),
				
				
            )
        )
    );
}
add_action( 'vc_before_init', 'designas_f_headquarters' );

function designas_f_headquarters_content_function( $atts, $content ) {
    $atts = shortcode_atts(
    array(
        'title' => __( '' ),
		'address' => __( '' ),
		'phone_number' => __( '' ),
		'email_address' =>__ (''),
		'fax' =>__ (''),
		'thmem' =>__ ('light'),
    ), $atts, 'designas_f_headquarters_content'
);
 if(empty($content)) $content = '';
 $html = '<div class="blank addresss_info '.$atts['thmem'].'">
 			<div class="blank"><h4>'.$atts['title'].'</h4></div>
 			<div class="blank">
				<div class="left"><h5>Address :</h5></div>
				<div class="right">'.$atts['address'].'</div>
			</div>
			
			<div class="blank">
				<div class="left"><h5>Phone :</h5></div>
				<div class="right">'.$atts['phone_number'].'</div>
			</div>
			
			<div class="blank">
				<div class="left"><h5>Email :</h5></div>
				<div class="right">'.$atts['email_address'].'</div>
			</div>
			
			<div class="blank">
				<div class="left"><h5>Fax :</h5></div>
				<div class="right">'.$atts['fax'].'</div>
			</div>
			
 </div>';
return $html;
}
add_shortcode( 'designas_f_headquarters_content', 'designas_f_headquarters_content_function' )

?>

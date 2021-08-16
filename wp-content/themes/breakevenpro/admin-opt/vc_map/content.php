<?php 

//////////////////////////Fancy Content////////////////////////////////
function designas_f_content() {
    // Title
    vc_map(
        array(
            'name' => __( 'Fancy Content' ),
            'base' => 'designas_f_content_content',
			"icon" => get_template_directory_uri() . "/images/icon.png",
            'category' => __( 'Easy Component' ),
			'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
            'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
            'params' => array(
                
				array(	
					"type" => "textarea_html",
					"holder" => "div",
					"class" => "",
					"heading" => __( "Content", "my-text-domain" ),
					"param_name" => "content", 
					"value" => __( "<p>I am test text block. Click edit button to change this text.</p>", "my-text-domain" ),
					"description" => __( "Enter your content.", "my-text-domain" )
				),
				
				
				array(
					"type" => "dropdown",
					"heading"     => __("Allignment"),
					"param_name"  => "allign",
					"admin_label" => true,
					"value"       => array(
					'Left'   => ' text-left',
					'Center'   => 'text-center',
					'Right'   => 'text-right',
					'Justify' =>'text-justify',
					),
					"std"         => $defaults['allign'],
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
add_action( 'vc_before_init', 'designas_f_content' );

function designas_f_content_content_function( $atts, $content ) {
    $atts = shortcode_atts(
    array(
		'allign' =>__ (''),
		'content' =>__ ('Content'),
		'thmem' =>__ ('light'),
    ), $atts, 'designas_f_content_content'
);
 if(empty($content)) $content = '';
 $html = '<div class="blank fancy '.$atts['allign'].' '.$atts['thmem'].'">
'.$content.'
 </div>';
return $html;
}
add_shortcode( 'designas_f_content_content', 'designas_f_content_content_function' )

?>

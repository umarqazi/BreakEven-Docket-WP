<?php 

//////////////////////////Fancy Content////////////////////////////////
function designas_shrt_des_no_icon() {
    // Title
    vc_map(
        array(
            'name' => __( 'Short Description no Icon' ),
            'base' => 'designas_shrt_des_no_icon_content',
			"icon" => get_template_directory_uri() . "/images/icon.png",
            'category' => __( 'Easy Component' ),
            'params' => array(
			
				array(	
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => __( "Title", "my-text-domain" ),
					"param_name" => "title", 
					"value" => __( "" ),
					"description" => __( "Enter your content.", "my-text-domain" )
				),
				
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
add_action( 'vc_before_init', 'designas_shrt_des_no_icon' );

function designas_shrt_des_no_icon_content_function( $atts, $content ) {
    $atts = shortcode_atts(
    array(
		'title' =>__ (''),
		'content' =>__ ('Content'),
		'thmem' =>__ ('light'),
		'allign' =>__ ('text-center'),
    ), $atts, 'designas_shrt_des_no_icon_content'
);
if(empty($content)) $content = '';
 
 $html = '
	<div class="short_description '.$atts['allign'].' '.$atts['thmem'].'">
		<h4>'.$atts['title'].'</h4>
		<p class="'.$atts['thmem'].'">'.$content.'</p>
	</div>';
return $html;
}
add_shortcode( 'designas_shrt_des_no_icon_content', 'designas_shrt_des_no_icon_content_function' )

?>

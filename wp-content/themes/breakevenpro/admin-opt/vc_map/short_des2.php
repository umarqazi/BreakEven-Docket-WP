<?php 

//////////////////////////Fancy Content////////////////////////////////
function designas_shrt_des() {
    // Title
    vc_map(
        array(
            'name' => __( 'Short Description with Icon' ),
			"icon" => get_template_directory_uri() . "/images/icon.png",
            'base' => 'designas_shrt_des_content',
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
                    'type' => 'attach_image',
                    'holder' => '',
                    'class' => '',
                    'heading' => __( 'Upload Icon Image' ),
                    'param_name' => 'abt_img',
                    'value' => '',
                    'description' => __( 'Upload Icon' ),
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
add_action( 'vc_before_init', 'designas_shrt_des' );

function designas_shrt_des_content_function( $atts, $content ) {
    $atts = shortcode_atts(
    array(
		'title' =>__ (''),
		'abt_img' =>__ (''),
		'content' =>__ ('Content'),
		'thmem' =>__ ('light'),
		'allign' =>__ ('text-center'),
    ), $atts, 'designas_shrt_des_content'
);
if(empty($content)) $content = '';
 $img_abt = wp_get_attachment_image_src($atts["abt_img"], "full");
 $imgSrc_abt = $img_abt[0];
 
 $html = '
	<div class="short_description '.$atts['allign'].' '.$atts['thmem'].'">
		<div class="icon '.$atts['allign'].'"><img src="'.$imgSrc_abt.'" alt="'.$atts['title'].'"></div>
		<h4>'.$atts['title'].'</h4>
		<p class="'.$atts['thmem'].'">'.$content.'</p>
	</div>';
return $html;
}
add_shortcode( 'designas_shrt_des_content', 'designas_shrt_des_content_function' )

?>

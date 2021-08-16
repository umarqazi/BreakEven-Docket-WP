<?php
function easy_list() {
	
	vc_map(
        array(
            'name' => __( 'Fancy List' ),
            'base' => 'd_list_sec',
			"icon" => get_template_directory_uri() . "/images/icon.png",
            'category' => __( 'Easy Component' ),
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
					"type" => "colorpicker",
					"class" => "",
					"heading" => __( "color", "my-text-domain" ),
					"param_name" => "color", 
					"description" => __( "Choose Color", "my-text-domain" )
				),
				
			array(
					"type" => "dropdown",
					"heading"     => __("Style"),
					"param_name"  => "style",
					"admin_label" => true,
					"value"       => array(
					'Style One'   => '1',
					'Style Two'   => '2',
					'Style Three'   => '3',
					),
					"std"         => $defaults['style'],
				),
			
			)
			
			
			));
	}
	add_action( 'vc_before_init', 'easy_list' );
	
	
	function easy_list_function( $atts, $content ) {
    $atts = shortcode_atts(
    array(
        'content' =>__ ('Content'),
		'style' =>__ ('1'),
		'color' =>__ ('#000'),
		
    ), $atts, 'd_list_sec'
);

if(empty($content)) $content = '';
 $heading_style = $atts['style'];
 
 
 
 if ($heading_style == "1"){
     $html = ' <div class="list_style1" style="color:'.$atts['color'].'">
            	'.$content.'
            </div>';      
	}
	
 elseif ($heading_style == "2"){
		  $html = '<div class="list_style2" style="color:'.$atts['color'].'">
              '.$content.'
            </div>'; 
	}
	
elseif ($heading_style == "3"){
		  $html = '<div class="list_style3" style="color:'.$atts['color'].'">
              '.$content.'
            </div>'; 
	}	
	
	
	
return $html;
}
add_shortcode( 'd_list_sec', 'easy_list_function' );   

?>

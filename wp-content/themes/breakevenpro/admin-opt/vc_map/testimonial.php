<?php
function designas_testimonial() {
	
	vc_map(
        array(
            'name' => __( 'Testimonial' ),
            'base' => 'd_testi',
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
                    'type' => 'attach_image',
                    'holder' => '',
                    'class' => '',
                    'heading' => __( 'Client Image' ),
                    'param_name' => 'abt_img',
                    'value' => '',
                    'description' => __( 'Upload Image' ),
                ),
				
				array(
                    'type' => 'attach_image',
                    'holder' => '',
                    'class' => '',
                    'heading' => __( 'Company Logo' ),
                    'param_name' => 'abt_img1',
                    'value' => '',
                    'description' => __( 'Upload Image' ),
                ),
				
			array(
					"type" => "dropdown",
					"heading"     => __("Style"),
					"param_name"  => "style",
					"admin_label" => true,
					"value"       => array(
					'Picture Left'   => '1',
					'Picture Right'   => '2',
					),
					"std"         => $defaults['style'],
				),
			
			)
			
			
			));
	}
	add_action( 'vc_before_init', 'designas_testimonial' );
	
	
	function designas_testimonial_function( $atts, $content ) {
    $atts = shortcode_atts(
    array(
        'content' =>__ ('Content'),
		'abt_img' =>__ (''),
		'abt_img1' =>__ (''),
		'style' =>__ ('1'),
		
    ), $atts, 'd_testi'
);

if(empty($content)) $content = '';
 $img_abt = wp_get_attachment_image_src($atts["abt_img"], "client_image");
 $imgSrc_abt = $img_abt[0];
 
 $img_abt1 = wp_get_attachment_image_src($atts["abt_img1"], "company_logo");
 $imgSrc_abt1 = $img_abt1[0];
 
 $link = vc_build_link($atts['btn_read_more']);
 $heading_style = $atts['style'];
 
 
 
 if ($heading_style == "1"){
     $html = '<div class="testi_moni">
            
            	<div class="col-sm-10">
                	<div class="text-content">
                    <p>'.$content.'</p>
                    </div>
                </div>
                
              <div class="col-sm-2">
                	<div class="client_image"><img src="'.$imgSrc_abt.'" alt="'.$atts['title'].'"></div>
                    <div class="company_logo"><img src="'.$imgSrc_abt1.'" alt="'.$atts['title'].'"></div>
                </div>
                
            </div>';      
	}
	 elseif ($heading_style == "2"){
		  $html = '<div class="testi_moni">
            
              <div class="col-sm-2">
                	<div class="client_image"><img src="'.$imgSrc_abt.'" alt="'.$atts['title'].'"></div>
                    <div class="company_logo"><img src="'.$imgSrc_abt1.'" alt="'.$atts['title'].'"></div>
                </div>
				
				<div class="col-sm-10">
                	<div class="text-content">
                    <p>'.$content.'</p>
                    </div>
                </div>
                
            </div>'; 
		
	}
	
	
return $html;
}
add_shortcode( 'd_testi', 'designas_testimonial_function' );   

?>

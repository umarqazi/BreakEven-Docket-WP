<?php 

//////////////////////////Fancy Content////////////////////////////////
function designas_team() {
    // Title
    vc_map(
        array(
            'name' => __( 'Team' ),
            'base' => 'designas_team_content',
			"icon" => get_template_directory_uri() . "/images/icon.png",
            'category' => __( 'Easy Component' ),
            'params' => array(
			
				array(	
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => __( "Team Member Name", "my-text-domain" ),
					"param_name" => "title", 
					"value" => __( "" ),
					"description" => __( "Enter your content.", "my-text-domain" )
				),
				array(
                    'type' => 'attach_image',
                    'holder' => '',
                    'class' => '',
                    'heading' => __( 'Team Member Image' ),
                    'param_name' => 'abt_img',
                    'value' => '',
                    'description' => __( 'Upload Image' ),
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
				
				
				
				
            )
        )
    );
}
add_action( 'vc_before_init', 'designas_team' );

function designas_team_content_function( $atts, $content ) {
    $atts = shortcode_atts(
    array(
		'title' =>__ (''),
		'abt_img' =>__ (''),
		'content' =>__ ('Content'),
    ), $atts, 'designas_team_content'
);
if(empty($content)) $content = '';
 $img_abt = wp_get_attachment_image_src($atts["abt_img"], "client_image");
 $imgSrc_abt = $img_abt[0];
 
 $html = '
	<div class="team_member">
		<div class="member_image"><img src="'.$imgSrc_abt.'" alt="'.$atts['title'].'"></div>
		<h3>'.$atts['title'].'</h3>
		<p>'.$content.'</p>
	</div>';
return $html;
}
add_shortcode( 'designas_team_content', 'designas_team_content_function' )

?>

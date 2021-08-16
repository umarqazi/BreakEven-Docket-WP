<?php 

//////////////////////////Fancy Content////////////////////////////////
function designas_f_social() {
    // Title
    vc_map(
        array(
            'name' => __( 'Social Media' ),
            'base' => 'designas_f_social_content',
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
                    'heading' => __( 'Facebook Page Url' ),
                    'param_name' => 'fb',
                ),
				
				
				array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => __( 'Twitter Page Url' ),
                    'param_name' => 'tw',
                ),
				
				
				
				array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => __( 'Linkedin Page Url' ),
                    'param_name' => 'in',
                ),
				
				array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => __( 'Youtube Page Url' ),
                    'param_name' => 'yu',
                ),
				
				
			
				
				
            )
        )
    );
}
add_action( 'vc_before_init', 'designas_f_social' );

function designas_f_social_content_function( $atts, $content ) {
    $atts = shortcode_atts(
    array(
        'title' => __( '' ),
		'fb' => __( '' ),
		'tw' => __( '' ),
		'in' =>__ (''),
		'yu' =>__ (''),
		'thmem' =>__ ('light'),
    ), $atts, 'designas_f_social_content'
);
 if(empty($content)) $content = '';
 $html = '<div class="blank soal_add">
 			<div class="blank"><h4>'.$atts['title'].'</h4></div>
 			<div class="blank">
				<ul>
					<li><span class="fa fa-facebook-f"></span> <a href="https://'.$atts['fb'].'" target="_blank">'.$atts['fb'].'</a></li>
					<li><span class="fa fa-twitter"></span> <a href="https://'.$atts['tw'].'" target="_blank">'.$atts['tw'].'</a></li>
					<li><span class="fa fa-linkedin"></span> <a href="https://'.$atts['in'].'" target="_blank">'.$atts['in'].'</a></li>
					<li><span class="fa fa-youtube-play"></span> <a href="https://'.$atts['yu'].'" target="_blank">'.$atts['yu'].'</a></li>
				</ul>
			</div>
			
 </div>';
return $html;
}
add_shortcode( 'designas_f_social_content', 'designas_f_social_content_function' )

?>

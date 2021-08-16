<?php 

//////////////////////////Fancy Content////////////////////////////////
function designas_fv_title() {
    // Title
    vc_map(
        array(
            'name' => __( 'Fancy Title 2' ),
            'base' => 'designas_fv_title_content',
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
					"type" => "dropdown",
					"heading"     => __("Title Tag"),
					"param_name"  => "tag",
					"admin_label" => true,
					"value"       => array(
					'H1'   => 'h1',
					'H2'   => 'h2',
					'H3'   => 'h3',
					'H4'   => 'h4',
					'H5'   => 'h5',
					'H6'   => 'h6',
					),
					"std"         => $defaults['tag'],
				),
				
				array(
					"type" => "dropdown",
					"heading"     => __("Title alignment"),
					"param_name"  => "align",
					"admin_label" => true,
					"value"       => array(
					'Center'   => 'text-center',
					'Left'   => 'text-left',
					'Right'   => 'text-right',
					'Justify'   => 'text-justify',
					),
					"std"         => $defaults['align'],
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
add_action( 'vc_before_init', 'designas_fv_title' );

function designas_fv_title_content_function( $atts, $content ) {
    $atts = shortcode_atts(
    array(
        'title' => __( '' ),
		'tag' =>__ (''),
		'align' =>__ ('text-center'),
		'thmem' =>__ ('light'),
    ), $atts, 'designas_fv_title_content'
);
 if(empty($content)) $content = '';
 $html = '<div class="blank fancy-title '.$atts['thmem'].'">
   <'.$atts['tag'].' class="'.$atts['align'].'">'.$atts['title'].'</'.$atts['tag'].'>
 </div>';
return $html;
}
add_shortcode( 'designas_fv_title_content', 'designas_fv_title_content_function' )

?>

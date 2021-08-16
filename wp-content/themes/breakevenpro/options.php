<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
    // Change this to use your theme slug
    return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'breakevenpro-theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

    // Test data
    $hours_arr = array('1','2','3','4','5','6','7','8','9','10','11','12');
    $min_arr = array(
        '0' => '00',
        '15' => '15',
        '30' => '30'
    );
    $ampm_arr = array('am','pm');



    $options = array();

    $options[] = array(
        'name' => __( 'General', 'breakevenpro-theme' ),
        'type' => 'heading'
    );

    $options[] = array(
        'name' => __( 'Favicon', 'breakevenpro-theme' ),
        'desc' => __( 'Upload favicon of the website here.', 'breakevenpro-theme' ),
        'id' => 'favicon_web',
        'type' => 'upload'
    );

    $options[] = array(
        'name' => __( 'Website Logo', 'breakevenpro-theme' ),
        'desc' => __( 'Upload logo of the website here. Logo height should be around 46px.', 'breakevenpro-theme' ),
        'id' => 'website_logo',
        'type' => 'upload'
    );

    // Contact Number
    $options[] = array(
        'name' => __( 'Contact Number', 'breakevenpro-theme' ),
        'desc' => __( 'Enter contact number of the company here.', 'breakevenpro-theme' ),
        'id' => 'contact_number',
        'type' => 'text'
    );

    // Footer Logo
    $options[] = array(
        'name' => __( 'Footer Logo', 'breakevenpro-theme' ),
        'desc' => __( 'Upload logo of the footers here. Logo height should be around 46px.', 'breakevenpro-theme' ),
        'id' => 'footer_logo',
        'type' => 'upload'
    );
    
    // Copyright field
    $options[] = array(
        'name' => __( 'Copyrights Text', 'breakevenpro-theme' ),
        'desc' => __( 'Enter copyrights text for your website here.', 'breakevenpro-theme' ),
        'id' => 'copyright_text',
        'type' => 'text'
    );

    return $options;
}
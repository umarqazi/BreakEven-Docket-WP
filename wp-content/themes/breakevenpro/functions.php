<?php
//update_option( 'siteurl', 'http://tm.techverx.com/breakevenpro' );
//update_option( 'home', 'http://tm.techverx.com/breakevenpro' );
/**
 * breakevenpro-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package breakevenpro-theme
 */

if ( ! function_exists( 'breakevenpro_theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function breakevenpro_theme_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on breakevenpro-theme, use a find and replace
         * to change 'breakevenpro-theme' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'breakevenpro-theme', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'topbar-menu' => esc_html__( 'Topbar Menu', 'breakevenpro-theme' ),
            'main-menu' => esc_html__( 'Main Menu', 'breakevenpro-theme' ),
            'footer-menu' => esc_html__( 'Footer Menu', 'breakevenpro-theme' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'breakevenpro_theme_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
endif;
add_action( 'after_setup_theme', 'breakevenpro_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function breakevenpro_theme_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'breakevenpro_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'breakevenpro_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function breakevenpro_theme_widgets_init() {

    register_sidebar( array(
        'name'          => esc_html__( 'Homepage Content', 'breakevenpro-theme' ),
        'id'            => 'content-bar',
        'description'   => esc_html__( 'Add widgets here.', 'breakevenpro-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="col-xs-12 nopadding bmargin">',
        'after_swidget'  => '</div><div class="clearfix"></div><br/></div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Page Sidebar', 'breakevenpro-theme' ),
        'id'            => 'page-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'breakevenpro-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="col-xs-12 nopadding bmargin">',
        'after_swidget'  => '</div><div class="clearfix"></div><br/></section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'breakevenpro_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function breakevenpro_theme_scripts() {
    //wp_enqueue_style( 'breakevenpro-theme-style', get_stylesheet_uri() );

    wp_enqueue_script( 'breakevenpro-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'breakevenpro-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'breakevenpro_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */

////////////////Aq_resize///////////////////////


/**
 * Title         : Aqua Resizer
 * Description   : Resizes WordPress images on the fly
 * Version       : 1.2.2
 * Author        : Syamil MJ
 * Author URI    : http://aquagraphite.com
 * License       : WTFPL - http://sam.zoy.org/wtfpl/
 * Documentation : https://github.com/sy4mil/Aqua-Resizer/
 *
 * @param string  $url      - (required) must be uploaded using wp media uploader
 * @param int     $width    - (required)
 * @param int     $height   - (optional)
 * @param bool    $crop     - (optional) default to soft crop
 * @param bool    $single   - (optional) returns an array if false
 * @param bool    $upscale  - (optional) resizes smaller images
 * @uses  wp_upload_dir()
 * @uses  image_resize_dimensions()
 * @uses  wp_get_image_editor()
 *
 * @return str|array
 */
if(!class_exists('Aq_Resize')) {
    class Aq_Exception extends Exception {}
    class Aq_Resize
    {
        /**
         * The singleton instance
         */
        static private $instance = null;
        /**
         * Should an Aq_Exception be thrown on error?
         * If false (default), then the error will just be logged.
         */
        public $throwOnError = false;
        /**
         * No initialization allowed
         */
        private function __construct() {}
        /**
         * No cloning allowed
         */
        private function __clone() {}
        /**
         * For your custom default usage you may want to initialize an Aq_Resize object by yourself and then have own defaults
         */
        static public function getInstance() {
            if(self::$instance == null) {
                self::$instance = new self;
            }
            return self::$instance;
        }
        /**
         * Run, forest.
         */
        public function process( $url, $width = null, $height = null, $crop = null, $single = true, $upscale = false ) {
            try {
                // Validate inputs.
                if (!$url)
                    throw new Aq_Exception('$url parameter is required');
                if (!$width)
                    throw new Aq_Exception('$width parameter is required');
                // Caipt'n, ready to hook.
                if ( true === $upscale ) add_filter( 'image_resize_dimensions', array($this, 'aq_upscale'), 10, 6 );
                // Define upload path & dir.
                $upload_info = wp_upload_dir();
                $upload_dir = $upload_info['basedir'];
                $upload_url = $upload_info['baseurl'];

                $http_prefix = "http://";
                $https_prefix = "https://";
                $relative_prefix = "//"; // The protocol-relative URL

                /* if the $url scheme differs from $upload_url scheme, make them match
                   if the schemes differe, images don't show up. */
                if(!strncmp($url,$https_prefix,strlen($https_prefix))){ //if url begins with https:// make $upload_url begin with https:// as well
                    $upload_url = str_replace($http_prefix,$https_prefix,$upload_url);
                }
                elseif(!strncmp($url,$http_prefix,strlen($http_prefix))){ //if url begins with http:// make $upload_url begin with http:// as well
                    $upload_url = str_replace($https_prefix,$http_prefix,$upload_url);
                }
                elseif(!strncmp($url,$relative_prefix,strlen($relative_prefix))){ //if url begins with // make $upload_url begin with // as well
                    $upload_url = str_replace(array( 0 => "$http_prefix", 1 => "$https_prefix"),$relative_prefix,$upload_url);
                }

                // Check if $img_url is local.
                if ( false === strpos( $url, $upload_url ) )
                    throw new Aq_Exception('Image must be local: ' . $url);
                // Define path of image.
                $rel_path = str_replace( $upload_url, '', $url );
                $img_path = $upload_dir . $rel_path;
                // Check if img path exists, and is an image indeed.
                if ( ! file_exists( $img_path ) or ! getimagesize( $img_path ) )
                    throw new Aq_Exception('Image file does not exist (or is not an image): ' . $img_path);
                // Get image info.
                $info = pathinfo( $img_path );
                $ext = $info['extension'];
                list( $orig_w, $orig_h ) = getimagesize( $img_path );
                // Get image size after cropping.
                $dims = image_resize_dimensions( $orig_w, $orig_h, $width, $height, $crop );
                $dst_w = $dims[4];
                $dst_h = $dims[5];
                // Return the original image only if it exactly fits the needed measures.
                if ( ! $dims || ( ( ( null === $height && $orig_w == $width ) xor ( null === $width && $orig_h == $height ) ) xor ( $height == $orig_h && $width == $orig_w ) ) ) {
                    $img_url = $url;
                    $dst_w = $orig_w;
                    $dst_h = $orig_h;
                } else {
                    // Use this to check if cropped image already exists, so we can return that instead.
                    $suffix = "{$dst_w}x{$dst_h}";
                    $dst_rel_path = str_replace( '.' . $ext, '', $rel_path );
                    $destfilename = "{$upload_dir}{$dst_rel_path}-{$suffix}.{$ext}";
                    if ( ! $dims || ( true == $crop && false == $upscale && ( $dst_w < $width || $dst_h < $height ) ) ) {
                        // Can't resize, so return false saying that the action to do could not be processed as planned.
                        throw new Aq_Exception('Unable to resize image because image_resize_dimensions() failed');
                    }
                    // Else check if cache exists.
                    elseif ( file_exists( $destfilename ) && getimagesize( $destfilename ) ) {
                        $img_url = "{$upload_url}{$dst_rel_path}-{$suffix}.{$ext}";
                    }
                    // Else, we resize the image and return the new resized image url.
                    else {
                        $editor = wp_get_image_editor( $img_path );
                        if ( is_wp_error( $editor ) || is_wp_error( $editor->resize( $width, $height, $crop ) ) ) {
                            throw new Aq_Exception('Unable to get WP_Image_Editor: ' .
                                $editor->get_error_message() . ' (is GD or ImageMagick installed?)');
                        }
                        $resized_file = $editor->save();
                        if ( ! is_wp_error( $resized_file ) ) {
                            $resized_rel_path = str_replace( $upload_dir, '', $resized_file['path'] );
                            $img_url = $upload_url . $resized_rel_path;
                        } else {
                            throw new Aq_Exception('Unable to save resized image file: ' . $editor->get_error_message());
                        }
                    }
                }
                // Okay, leave the ship.
                if ( true === $upscale ) remove_filter( 'image_resize_dimensions', array( $this, 'aq_upscale' ) );
                // Return the output.
                if ( $single ) {
                    // str return.
                    $image = $img_url;
                } else {
                    // array return.
                    $image = array (
                        0 => $img_url,
                        1 => $dst_w,
                        2 => $dst_h
                    );
                }
                return $image;
            }
            catch (Aq_Exception $ex) {
                error_log('Aq_Resize.process() error: ' . $ex->getMessage());
                if ($this->throwOnError) {
                    // Bubble up exception.
                    throw $ex;
                }
                else {
                    // Return false, so that this patch is backwards-compatible.
                    return false;
                }
            }
        }
        /**
         * Callback to overwrite WP computing of thumbnail measures
         */
        function aq_upscale( $default, $orig_w, $orig_h, $dest_w, $dest_h, $crop ) {
            if ( ! $crop ) return null; // Let the wordpress default function handle this.
            // Here is the point we allow to use larger image size than the original one.
            $aspect_ratio = $orig_w / $orig_h;
            $new_w = $dest_w;
            $new_h = $dest_h;
            if ( ! $new_w ) {
                $new_w = intval( $new_h * $aspect_ratio );
            }
            if ( ! $new_h ) {
                $new_h = intval( $new_w / $aspect_ratio );
            }
            $size_ratio = max( $new_w / $orig_w, $new_h / $orig_h );
            $crop_w = round( $new_w / $size_ratio );
            $crop_h = round( $new_h / $size_ratio );
            $s_x = floor( ( $orig_w - $crop_w ) / 2 );
            $s_y = floor( ( $orig_h - $crop_h ) / 2 );
            return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
        }
    }
}
if(!function_exists('aq_resize')) {
    /**
     * This is just a tiny wrapper function for the class above so that there is no
     * need to change any code in your own WP themes. Usage is still the same :)
     */
    function aq_resize( $url, $width = null, $height = null, $crop = null, $single = true, $upscale = false ) {
        /* WPML Fix */
        if ( defined( 'ICL_SITEPRESS_VERSION' ) ){
            global $sitepress;
            $url = $sitepress->convert_url( $url, $sitepress->get_default_language() );
        }
        /* WPML Fix */
        $aq_resize = Aq_Resize::getInstance();
        return $aq_resize->process( $url, $width, $height, $crop, $single, $upscale );
    }
}

///////End Aq_resize///////////


if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/admin-opt/' );
require_once dirname( __FILE__ ) . '/admin-opt/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

function post_short_des($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

function recent_posts_widget(){
    ob_start();
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => '2',
        'tax_query' => array(
        ),
    );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) {
        $loop->the_post();

        $post_thumbnail = get_the_post_thumbnail_url();
        $imageresize = aq_resize($post_thumbnail, 60, 60, true);

        if($imageresize){
            ?>
            <div class="image-left">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo $imageresize; ?>" alt=""/></a>
            </div>
        <?php } ?>
        <div class="text-box-right">
            <h5 class="text-white less-mar3">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h5>
            <div class="footer-post-info">By <?php echo get_the_author(); ?></div>
        </div>
        <div class="divider-line solid dark margin opacity-5"></div>
        <?php
    }
    wp_reset_query();
    return ob_get_clean();
}
add_shortcode( 'recent-posts-footer', 'recent_posts_widget' );

function recent_posts_widget_sidebar(){
    ob_start();
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => '3',
        'tax_query' => array(
        ),
    );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) {
        $loop->the_post();

        $post_thumbnail = get_the_post_thumbnail_url();
        $imageresize = aq_resize($post_thumbnail, 80, 80, true); ?>

        <div class="sidebar-posts">
            <?php if($imageresize){ ?>
                <div class="image-left">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo $imageresize; ?>" alt=""/>
                    </a>
                </div>
            <?php } ?>
            <div class="text-box-right">
                <h6 class="less-mar3 nopadding"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                <div class="post-info"> By <?php echo get_the_author(); ?></div>
            </div>
        </div>
        <!--end item-->

        <?php
    }
    wp_reset_query();
    return ob_get_clean();
}
add_shortcode( 'recent-posts-sidebar', 'recent_posts_widget_sidebar' );

// Fonts Awesome
//function wpb_load_fa() {
//
//    wp_enqueue_style( 'wpb-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
//
//}
//
//add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );

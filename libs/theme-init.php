<?php 
/* 
theme-init.php	 
*/
remove_filter('the_content','wpautop');

function setup_booking_post_type()
{



	/*
	+++ Slides x il tema ++++++
	*/
	register_post_type('slides', array(	'label' => 'Slides','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','map_meta_cap'=>true,'hierarchical' => false,'rewrite' => array('slug' => 'slides'),'query_var' => true,'exclude_from_search' => false,'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes',),'labels' => array (
	  'name' => 'Slides',
	  'singular_name' => 'Slide',
	  'menu_name' => 'Slides',
	  'add_new' => 'Add Slide',
	  'add_new_item' => 'Add New Slide',
	  'edit' => 'Edit',
	  'edit_item' => 'Edit Slide',
	  'new_item' => 'New Slide',
	  'view' => 'View Slide',
	  'view_item' => 'View Slide',
	  'search_items' => 'Search Slides',
	  'not_found' => 'No Slides Found',
	  'not_found_in_trash' => 'No Slides Found in Trash',
	  'parent' => 'Parent Slide',
	),) );
	
	
	/*
	******* Properties (new) ********
	*/
	
	
	register_post_type('accommodations', array(	'label' => 'Accommodations','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'alloggi'),'query_var' => true,'exclude_from_search' => false,'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes',),'labels' => array (
	  'name' => 'Accommodations',
	  'singular_name' => 'Accommodation',
	  'menu_name' => 'Accommodations',
	  'add_new' => 'Add Accommodation',
	  'add_new_item' => 'Add New Accommodation',
	  'edit' => 'Edit',
	  'edit_item' => 'Edit Accommodation',
	  'new_item' => 'New Accommodation',
	  'view' => 'View Accommodation',
	  'view_item' => 'View Accommodation',
	  'search_items' => 'Search Accommodations',
	  'not_found' => 'No Accommodations Found',
	  'not_found_in_trash' => 'No Accommodations Found in Trash',
	  'parent' => 'Parent Accommodation',
	),) );
	
	
	/*
	******* Accommodations (saranno figlie di properties es hotel-> camere)********
	*/
	
	
	register_post_type('properties', array(	'label' => 'Properties','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'prop'),'query_var' => true,'exclude_from_search' => false,'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes',),'labels' => array (
	  'name' => 'Properties',
	  'singular_name' => 'Property',
	  'menu_name' => 'Properties',
	  'add_new' => 'Add Property',
	  'add_new_item' => 'Add New Property',
	  'edit' => 'Edit',
	  'edit_item' => 'Edit Property',
	  'new_item' => 'New Property',
	  'view' => 'View Property',
	  'view_item' => 'View Property',
	  'search_items' => 'Search Property',
	  'not_found' => 'No Property Found',
	  'not_found_in_trash' => 'No Property Found in Trash',
	  'parent' => 'Parent Property',
	),) );
	
	/*
	+++ team ++++++
	*/
	register_post_type('team', array(	'label' => 'Team','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => 'slides'),'query_var' => true,'exclude_from_search' => false,'supports' => array('title','editor','thumbnail','author','page-attributes',),'labels' => array (
	  'name' => 'Team',
	  'singular_name' => 'Team',
	  'menu_name' => 'Team',
	  'add_new' => 'Add Team member',
	  'add_new_item' => 'Add New Team Member',
	  'edit' => 'Edit',
	  'edit_item' => 'Edit Member',
	  'new_item' => 'New Member',
	  'view' => 'View Member',
	  'view_item' => 'View Member',
	  'search_items' => 'Search Member',
	  'not_found' => 'No Member Found',
	  'not_found_in_trash' => 'No Member Found in Trash',
	  'parent' => 'Parent Slide',
	),) );
	
	
	/*
	******* Taxonomy Areas ********
	*/
	
	
	register_taxonomy('areas',array (
	  0 => 'accommodations',
	  1 => 'advertisement',
	),array( 'hierarchical' => true, 'label' => 'Areas','show_ui' => true,'query_var' => true,'rewrite' => array('slug' => 'zone'),'singular_label' => 'Area') );
	
	/*
	******* Taxonomy Type ********
	*/
	
	register_taxonomy('types',array (
	  0 => 'accommodations',
	),array( 'hierarchical' => true, 'label' => 'Types','show_ui' => true,'query_var' => true,'rewrite' => array('slug' => 'property-type'),'singular_label' => 'Type') );
	
	
	/*
	******* Taxonomy Stars (stelle hotel e classificazioni varie ) ********
	*/
	
	register_taxonomy('stars',array (
	  0 => 'accommodations',
	),array( 'hierarchical' => true, 'label' => 'stars','show_ui' => true,'query_var' => true,'rewrite' => array('slug' => 'stars'),'singular_label' => 'Stars') );

	/*
	******* gestione eruoli e capabilities ********
	*/

$result = add_role('customer', 'Customer', array(
    'read' => true, // True allows that capability
    'edit_posts' => false,
    'delete_posts' => false // Use false to explicitly deny
    
));

$result = add_role('property_owner', 'Owner / Manager', array(

));

$result = add_role('sales_agent', 'agente di vendita', array(
    'read' => true, // True allows that capability
    'edit_posts' => false,
    'delete_posts' => false, // Use false to explicitly deny
    'create_users' => true
));




}	


add_action('init', 'setup_booking_post_type');


function request_status(){
	register_post_status( 'pending', array(
		'label'                     => _x( 'pending', 'request' ),
		'public'                    => true,
		'exclude_from_search'       => false,
		'show_in_admin_all_list'    => true,
		'show_in_admin_status_list' => true,
		'label_count'               => _n_noop( 'Pending <span class="count">(%s)</span>', 'Unread <span class="count">(%s)</span>' ),
	) );

	register_post_status( 'quoted', array(
		'label'                     => _x( 'quoted', 'request' ),
		'public'                    => true,
		'exclude_from_search'       => false,
		'show_in_admin_all_list'    => true,
		'show_in_admin_status_list' => true,
		'label_count'               => _n_noop( 'Quoted <span class="count">(%s)</span>', 'Unread <span class="count">(%s)</span>' ),
	) );

	register_post_status( 'accepted', array(
		'label'                     => _x( 'accepted', 'request' ),
		'public'                    => true,
		'exclude_from_search'       => false,
		'show_in_admin_all_list'    => true,
		'show_in_admin_status_list' => true,
		'label_count'               => _n_noop( 'Accepted <span class="count">(%s)</span>', 'Unread <span class="count">(%s)</span>' ),
	) );

}
add_action( 'init', 'request_status' );


//image size
add_theme_support( 'post-thumbnails' );


if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'homepage-thumb', 360, 120, true ); // (ritagliata)
	//add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
	add_image_size( 'homepage-slider', 900, 300, true ); //(cropped)
	add_image_size( 'slider-crop', 900, 450, true ); //(cropped)
	add_image_size( 'slider-no-crop', 900, 450, false); //(cropped)
	add_image_size( 'slider-home', 9999, 480, false); //(cropped)
    add_image_size( 'slider-home-640', 640, 480, true); //(cropped)	
}


//country
function country_init() {

	register_taxonomy(
		'country',
		'post',
		array(
			'hierarchical' => true,
			'label' => __( 'Countries' ),
			'rewrite' => array( 'slug' => 'country' )

		)
	);
}
add_action( 'init', 'country_init' );



/* enable contributors upload */

if ( current_user_can('contributor') && !current_user_can('upload_files') )
add_action('admin_init', 'allow_contributor_uploads');

function allow_contributor_uploads() {
     $contributor = get_role('contributor');
     $contributor->add_cap('upload_files');
}


/* Add colums with thumbbnail to admin post screen */

if ( !function_exists('fb_AddThumbColumn') && function_exists('add_theme_support') ) {
	

	
	function fb_AddThumbColumn($cols) {
		
		$cols['thumbnail'] = __('Thumbnail');
		
		return $cols;
	}
	
	function fb_AddThumbValue($column_name, $post_id) {
			
			$width = (int) 35;
			$height = (int) 35;
			
			if ( 'thumbnail' == $column_name ) {
				// thumbnail of WP 2.9
				$thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
				// image from gallery
				$attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );
				if ($thumbnail_id)
					$thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
				elseif ($attachments) {
					foreach ( $attachments as $attachment_id => $attachment ) {
						$thumb = wp_get_attachment_image( $attachment_id, array($width, $height), true );
					}
				}
					if ( isset($thumb) && $thumb ) {
						echo $thumb;
					} else {
						echo __('None');
					}
			}
	}
	
	// for posts
	add_filter( 'manage_posts_columns', 'fb_AddThumbColumn' );
	add_action( 'manage_posts_custom_column', 'fb_AddThumbValue', 10, 2 );
	
	// for pages
	add_filter( 'manage_pages_columns', 'fb_AddThumbColumn' );
	add_action( 'manage_pages_custom_column', 'fb_AddThumbValue', 10, 2 );

	// for accommodations
	add_filter( 'manage_accommodations_columns', 'fb_AddThumbColumn' );
	add_action( 'manage_accommodations_custom_column', 'fb_AddThumbValue', 10, 2 );

}

	
	
	
/* Add stylesheets and custom js to my theme */
	
	function theme_setup() {
		//all Styles
		$options=load_theme_options();
		
		//wp_enqueue_style( 'theme', get_template_directory_uri().'/css/customized/'.$options['css_select'].'.css');
		wp_enqueue_style( 'theme', get_template_directory_uri().'/css/theme.css');
		wp_enqueue_style( 'carousel', get_template_directory_uri().'/carousel.css');
		wp_enqueue_style( 'flexslider', get_template_directory_uri().'/assets/css/flexslider.css');
				
		wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css' );
		//wp_enqueue_style( 'ekko-lightbox', get_template_directory_uri().'/css/lightbox-themes/ekko-lightbox.css' );
		//wp_enqueue_style( 'dark', get_template_directory_uri().'/css/lightbox-themes/dark.css' );


		//wp_enqueue_style( 'tags-input', get_template_directory_uri().'/css/jquery.tagsinput.css' );
		wp_enqueue_style( 'style', get_stylesheet_uri() );

		//all JS
		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '1.10.2', true );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'holder', get_template_directory_uri() . '/assets/js/holder.js', array(), '1.0.0', true );

		wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/jquery.easing.js', array(), '1.0.0', true );
		wp_enqueue_script( 'mousewheel', get_template_directory_uri() . '/assets/js/jquery.mousewheel.js', array(), '1.0.0', true );
		wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'gmaps', get_template_directory_uri() . '/assets/js/jquery.gmap.js', array(), '1.0.0', true );

		wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/theme.js', array(), '1.0.0', true );
		//wp_enqueue_script( 'tagsinput', get_template_directory_uri() . '/js/jquery.tagsinput.js', array(), '1.0.0', true );
		//wp_enqueue_script( 'ekko-lightbox', get_template_directory_uri() . '/js/ekko-lightbox.js', array(), '1.0.0', true );
		
	}


	add_action( 'wp_enqueue_scripts', 'theme_setup' );


// Register Script
function custom_scripts() {
	wp_enqueue_script( 'googlemaps', 'http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places', array(), '1.0.0', true );
	wp_enqueue_script( 'geocomplete', get_template_directory_uri() . '/assets/js/jquery.geocomplete.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'admin', get_template_directory_uri() . '/assets/js/admin.js', array(), '1.0.0', true );

}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'admin_enqueue_scripts', 'custom_scripts' );


/**
 * CMB Theme Options
 * @version 0.1.0
 */
class myprefix_Admin {

    /**
     * Option key, and option page slug
     * @var string
     */
    protected static $key = 'myprefix_options';

    /**
     * Array of metaboxes/fields
     * @var array
     */
    protected static $theme_options = array();

    /**
     * Options Page title
     * @var string
     */
    protected $title = '';

    /**
     * Constructor
     * @since 0.1.0
     */
    public function __construct() {
        // Set our title
        $this->title = __( 'Site Options', 'myprefix' );
    }

    /**
     * Initiate our hooks
     * @since 0.1.0
     */
    public function hooks() {
        add_action( 'admin_init', array( $this, 'init' ) );
        add_action( 'admin_menu', array( $this, 'add_options_page' ) );
    }

    /**
     * Register our setting to WP
     * @since  0.1.0
     */
    public function init() {
        register_setting( self::$key, self::$key );
    }

    /**
     * Add menu options page
     * @since 0.1.0
     */
    public function add_options_page() {
        $this->options_page = add_menu_page( $this->title, $this->title, 'manage_options', self::$key, array( $this, 'admin_page_display' ) );
    }

    /**
     * Admin page markup. Mostly handled by CMB
     * @since  0.1.0
     */
    public function admin_page_display() {
        ?>
        <div class="wrap cmb_options_page <?php echo self::$key; ?>">
            <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
            <?php cmb_metabox_form( self::option_fields(), self::$key ); ?>
        </div>
        <?php
    }

    /**
     * Defines the theme option metabox and field configuration
     * @since  0.1.0
     * @return array
     */
    public static function option_fields() {

        // Only need to initiate the array once per page-load
        if ( ! empty( self::$theme_options ) )
            return self::$theme_options;

        self::$theme_options = array(
            'id'         => 'theme_options',
            'show_on'    => array( 'key' => 'options-page', 'value' => array( self::$key, ), ),
            'show_names' => true,
            'fields'     => array(
                array(
                    'name' => __( 'Place Name', 'myprefix' ),
                    'desc' => __( 'field description (optional)', 'myprefix' ),
                    'id'   => 'place_name',
                    'type' => 'text_medium',
                ),
				array(
				    'name' => __( 'Facebook page URL', 'cmb' ),
				    'id'   => $prefix . 'facebook_url',
				    'type' => 'text_url',
				    // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
				),
				array(
				    'name' => __( 'Twitter URL', 'cmb' ),
				    'id'   => $prefix . 'twitter_url',
				    'type' => 'text_url',
				    // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
				),
                array(
                    'name'    => __( 'Test Color Picker', 'myprefix' ),
                    'desc'    => __( 'field description (optional)', 'myprefix' ),
                    'id'      => 'test_colorpicker',
                    'type'    => 'colorpicker',
                    'default' => '#ffffff'
                ),
                 array(
                    'name' => __( 'Footer Text', 'myprefix' ),
                    'desc' => __( 'field description (optional)', 'myprefix' ),
                    'id'   => 'footer_text',
                    'type' => 'text',
                ),
            ),
        );
        return self::$theme_options;
    }

    /**
     * Make public the protected $key variable.
     * @since  0.1.0
     * @return string  Option key
     */
    public static function key() {
        return self::$key;
    }

}

// Get it started
$myprefix_Admin = new myprefix_Admin();
$myprefix_Admin->hooks();

/**
 * Wrapper function around cmb_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function myprefix_get_option( $key = '' ) {
    return cmb_get_option( myprefix_Admin::key(), $key );
}


?>
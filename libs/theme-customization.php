<?php 

/*
*********** THEME CUSTOMIZATION *************************** ///////
*/


function bs_theme_customize_register($wp_customize){
    
    $wp_customize->add_section('bs_theme_color_scheme', array(
        'title'    => __('Layout Settings', 'bs_theme'),
        'priority' => 120,
    ));

    //  =============================
    //  = Text Input                =
    //  =============================

    $wp_customize->add_setting('bs_theme_theme_options[jumbotron_h1]', array(
        'default'        => 'Your jumbotron h1!',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('bs_theme_jumbotron_h1', array(
        'label'      => __('Jumbotron h1', 'bs_theme'),
        'section'    => 'bs_theme_color_scheme',
        'settings'   => 'bs_theme_theme_options[jumbotron_h1]',
    ));


    $wp_customize->add_setting('bs_theme_theme_options[city]', array(
        'default'        => 'City name!',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('bs_theme_jumbotron_city', array(
        'label'      => __('City', 'bs_theme'),
        'section'    => 'bs_theme_color_scheme',
        'settings'   => 'bs_theme_theme_options[city]',
    ));



    $wp_customize->add_setting('bs_theme_theme_options[jumbotron_text]', array(
        'default'        => 'Your jumbotron text!',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('bs_theme_jumbotron_text', array(
        'label'      => __('Jumbotron text', 'bs_theme'),
        'section'    => 'bs_theme_color_scheme',
        'settings'   => 'bs_theme_theme_options[jumbotron_text]',
    ));




    $wp_customize->add_setting('bs_theme_theme_options[footer_text]', array(
        'default'        => 'Your footer text!',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('bs_theme_footer_text', array(
        'label'      => __('Text Test', 'bs_theme'),
        'section'    => 'bs_theme_color_scheme',
        'settings'   => 'bs_theme_theme_options[footer_text]',
    ));

    //  =============================
    //  = Radio Input               =
    //  =============================
    $wp_customize->add_setting('bs_theme_theme_options[color_scheme]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    

	$posts = get_posts();
	$posts_to_select = array();
	$i = 0;
	foreach($posts as $post){
	    if($i==0){
	        $default = $post->ID;
	        $i++;
	    }
	    $posts_to_select[$post->ID] = $post->ID;
	}



    $wp_customize->add_control('bs_theme_color_scheme', array(
        'label'      => __('Color Scheme', 'bs_theme'),
        'section'    => 'bs_theme_color_scheme',
        'settings'   => 'bs_theme_theme_options[color_scheme]',
        'type'       => 'dropdown',
        'choices'    => $posts_to_select    
        ));

    //  =============================
    //  = Checkbox                  =
    //  =============================
    $wp_customize->add_setting('bs_theme_theme_options[checkbox_test]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));

    $wp_customize->add_control('display_header_text', array(
        'settings' => 'bs_theme_theme_options[checkbox_test]',
        'label'    => __('Display Header Text'),
        'section'  => 'bs_theme_color_scheme',
        'type'     => 'checkbox',
    ));



    //  =============================
    //  = Select Box css bootstrap               =
    //  =============================
     $wp_customize->add_setting('bs_theme_theme_options[css_select]', array(
        'default'        => 'bootstrap_default',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));
    $wp_customize->add_control( 'css_select', array(
        'settings' => 'bs_theme_theme_options[css_select]',
        'label'   => 'Select Bootstrap Layout:',
        'section' => 'bs_theme_color_scheme',
        'type'    => 'select',
        'choices'    => array(
            'bootstrap_default' => 'Default bootstrap',
            'bootstrap_amelia' => 'Amelia Freak and Vintage',
            'bootstrap_cerulean' => 'Cerulean',
            'bootstrap_flatly' => 'Flatly',
	        'bootstrap_journal' => 'Journal',
	        'bootstrap_simplex' => 'Simplex',
	       	'bootstrap_united' => 'United',
	       	'bootstrap_slate' => 'Slate',
	       	'bootstrap_superhero' => 'Superhero',
	       	'bootstrap_yeti' => 'Yeti',
	       	'bootstrap_spacelab' => 'Spacelab',
	       	'bootstrap_eurocomunicazione' => 'eurocomunicazione',
	       	'bootstrap_eurocom_dark' => 'euro_dark'
        ),
    ));



    //  =============================
    //  = Select Box                =
    //  =============================
     $wp_customize->add_setting('bs_theme_theme_options[layout_select]', array(
        'default'        => 'full-orbit',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));
    $wp_customize->add_control( 'layout_select', array(
        'settings' => 'bs_theme_theme_options[layout_select]',
        'label'   => 'Select Home Layout:',
        'section' => 'bs_theme_color_scheme',
        'type'    => 'select',
        'choices'    => array(
            'full-orbit' => 'full width slider layout',
            'orbit' => 'slider layout with inline reservation panel',

        ),
    ));
    
    //  =============================
    //  = Select Box navbar default / inverse =
    //  =============================
     $wp_customize->add_setting('bs_theme_theme_options[navbar_select]', array(
        'default'        => 'default',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));
    $wp_customize->add_control( 'navbar_select', array(
        'settings' => 'bs_theme_theme_options[navbar_select]',
        'label'   => 'Select Navbar style:',
        'section' => 'bs_theme_color_scheme',
        'type'    => 'select',
        'choices'    => array(
            'default' => 'Default navbar',
            'inverse' => 'Inverse navbar',
        ),
    ));
    










    //  =============logo===============
    //  = Image Upload  logo            =
    //  =============================
    $wp_customize->add_setting('bs_theme_theme_options[image_upload_test]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
        'label'    => __('Logo', 'bs_theme'),
        'section'  => 'bs_theme_color_scheme',
        'settings' => 'bs_theme_theme_options[image_upload_test]',
    )));
    
    
    //  =================background============
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('bs_theme_theme_options[background_image]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'background_image', array(
        'label'    => __('Background Image', 'bs_theme'),
        'section'  => 'bs_theme_color_scheme',
        'settings' => 'bs_theme_theme_options[background_image]',
    )));




    //  =============================
    //  = Color Picker Background            =
    //  =============================
    $wp_customize->add_setting('bs_theme_theme_options[background_color]', array(
        'default'           => 'efefef',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'background_color', array(
        'label'    => __('Background Color', 'bs_theme'),
        'section'  => 'bs_theme_color_scheme',
        'settings' => 'bs_theme_theme_options[background_color]',
    )));

    //  =============================
    //  = Color Picker  LInk            =
    //  =============================
    $wp_customize->add_setting('bs_theme_theme_options[link_color]', array(
        'default'           => '336699',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => __('Link Color', 'bs_theme'),
        'section'  => 'bs_theme_color_scheme',
        'settings' => 'bs_theme_theme_options[link_color]',
    )));

    //  =============================
    //  = Nav background  top            =
    //  =============================
    $wp_customize->add_setting('bs_theme_theme_options[nav_bg_color]', array(
        'default'           => '336699',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_bg_color', array(
        'label'    => __('Nav backgound Color', 'bs_theme'),
        'section'  => 'bs_theme_color_scheme',
        'settings' => 'bs_theme_theme_options[nav_bg_color]',
    )));

    //  =============================
    //  = Nav background  bottom            =
    //  =============================
    $wp_customize->add_setting('bs_theme_theme_options[nav_bg_color_bottom]', array(
        'default'           => '336699',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_bg_color_bottom', array(
        'label'    => __('Nav backgound bottom Color', 'bs_theme'),
        'section'  => 'bs_theme_color_scheme',
        'settings' => 'bs_theme_theme_options[nav_bg_color_bottom]',
    )));



    //  =============================
    //  = Button background color            =
    //  =============================
    $wp_customize->add_setting('bs_theme_theme_options[button_bg_color]', array(
        'default'           => '2BA6CB',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'button_bg_color', array(
        'label'    => __('Button background color', 'bs_theme'),
        'section'  => 'bs_theme_color_scheme',
        'settings' => 'bs_theme_theme_options[button_bg_color]',
    )));


    //  =============================
    //  = button_link_color         =
    //  =============================
    $wp_customize->add_setting('bs_theme_theme_options[button_link_color]', array(
        'default'           => 'ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'button_link_color', array(
        'label'    => __('Button link color', 'bs_theme'),
        'section'  => 'bs_theme_color_scheme',
        'settings' => 'bs_theme_theme_options[button_link_color]',
    )));





    //  =============================
    //  = Page Dropdown             =
    //  =============================
    $wp_customize->add_setting('bs_theme_theme_options[page_test]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('bs_theme_page_test', array(
        'label'      => __('1 Widget', 'bs_theme'),
        'section'    => 'bs_theme_color_scheme',
        'type'    => 'dropdown-pages',
        'settings'   => 'bs_theme_theme_options[page_test]',
    ));

    $wp_customize->add_setting('bs_theme_theme_options[page_test2]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('bs_theme_page_test2', array(
        'label'      => __('2 Widget', 'bs_theme'),
        'section'    => 'bs_theme_color_scheme',
        'type'    => 'dropdown-pages',
        'settings'   => 'bs_theme_theme_options[page_test2]',
    ));
    
    $wp_customize->add_setting('bs_theme_theme_options[page_test3]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('bs_theme_page_test3', array(
        'label'      => __('3 Widget', 'bs_theme'),
        'section'    => 'bs_theme_color_scheme',
        'type'    => 'dropdown-pages',
        'settings'   => 'bs_theme_theme_options[page_test3]',
    ));
    
        //  =============================
    //  = File Upload               =
    //  =============================
    $wp_customize->add_setting('bs_theme_theme_options[upload_test]', array(
        'default'           => 'arse',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'upload_test', array(
        'label'    => __('Upload Test', 'bs_theme'),
        'section'  => 'bs_theme_color_scheme',
        'settings' => 'bs_theme_theme_options[upload_test]',
    )));
}

add_action('customize_register', 'bs_theme_customize_register');

function LogoImage()
{
	$options=get_option('bs_theme_theme_options'); 
	$uploads = wp_upload_dir();
	$logo=$options['image_upload_test'];
	echo $logo;
}


function load_theme_options()
{

    $options=get_option('bs_theme_theme_options'); 
    return $options;
}

	
	
?>
<?php
/**
 * Wordpress Class Theme Customizer
 *
 * @package Wordpress_Class
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wordpress_class_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	class HeadingTitle extends WP_Customize_Control{

	    public function render_content()
        {
            if(!empty($this->label)):
            ?>
            <style>
                h1 {
                    color: red;
                    background-color: gray;
                }
            </style>

           <h1><?php echo esc_html($this->label)?></h1>
     <?php
        endif;
        }

    }


	/*$wp_customize->add_panel('blog_header',array(
        'title'  => esc_html__('Blog'),
        'priority'=>5
    ) );*/


	$wp_customize->add_setting('blog_header_textarea_setting',array(
	    'default'   => 'value',
        'capability' => 'edit_theme_options',
        'sanitize_callback'  => 'blog_text_sanitize'
    ) );

	$wp_customize->add_control('blog_header_textarea_setting', array(
	    'type'    => 'textarea',
	    'label'   => esc_html__('Site Descriptions', 'blog'),
        'description'=> esc_html__('Write for site description','blog'),
        'section' => 'title_tagline',
        'settings' => 'blog_header_textarea_setting',
        'priority' => 10
    ));

    $wp_customize->add_setting('blog_header_checkbox_setting',array(
        'default'   => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback'  => 'blog_sanitize_checkbox'
    ) );

    $wp_customize->add_control('blog_header_checkbox_setting', array(
        'type'     => 'checkbox',
        'label'    => esc_html__('Enable Header', 'blog'),
        'section'  => 'title_tagline',
        'settings' => 'blog_header_checkbox_setting',
        'priority' => 5
    ));


    //setting button checkbox
    $wp_customize->add_setting('blog_button_checkbox_setting',array(
        'default'   => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback'  => 'blog_sanitize_checkbox'
    ) );

    $wp_customize->add_control('blog_button_checkbox_setting', array(
        'type'     => 'text',
        'label'    => esc_html__('Enable Button', 'blog'),
        'section'  => 'title_tagline',
        'settings' => 'blog_button_checkbox_setting',
        'priority' => 5
    ));

    // setting description
    $wp_customize->add_setting('blog_textarea_enable_setting',array(
        'default'   => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback'  => 'blog_sanitize_checkbox'
    ) );

    $wp_customize->add_control('blog_textarea_enable_setting', array(
        'type'     => 'checkbox',
        'label'    => esc_html__('Enable Description', 'blog'),
        'section'  => 'title_tagline',
        'settings' => 'blog_textarea_enable_setting',
        'priority' => 5
    ));

    $wp_customize->add_setting('blog_header_btnText_setting',array(
        'default'   => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback'  => 'blog_text_sanitize'
    ) );

    $wp_customize->add_control('blog_header_btnText_setting', array(
        'type'    => 'text',
        'label'   => esc_html__('Button Text', 'blog'),
        'section' => 'title_tagline',
        'settings' => 'blog_header_btnText_setting',
        'priority' => 5
    ));







    $wp_customize->add_section('blog_header_section',array(
        'title'        => esc_html__('Header','blog'),
        'description' => esc_html__('THis is header section','blog'),
        'priority'    => 5
    ) );


    // site introduction add section
    $wp_customize->add_section('blog_introduction_section',array(
        'title'        => esc_html__('Site Introduction','blog'),
        'description'  => esc_html__('THis is header section','blog'),
        'priority'     => 5
    ) );


    //site introduction add setting
    $wp_customize->add_setting('site_introduction_settinng',array(
        'default'            => '',
        'capability'         => 'edit_theme_options',
        'sanitize_callback'  => 'blog_text_sanitize'
    ) );

    // site introduction add control

    $wp_customize->add_control('site_introduction_settinng', array(
        'type'         => 'textarea',
        'label'        => __('Introduction Details'),
        'section'      => 'blog_introduction_section',
        'setting'      => 'site_introduction_settinng',
        'priority'     => 6
        ));

    // site introduction title setting added
    $wp_customize->add_setting('site_introduction_title_settinng',array(
        'default'            => '',
        'capability'         => 'edit_theme_options',
        'sanitize_callback'  => 'blog_text_sanitize'
    ) );

    // site introduction title control added
    $wp_customize->add_control('site_introduction_title_settinng', array(
        'type'         => 'text',
        'label'        => __('Introduction Title', 'blog'),
        'section'      => 'blog_introduction_section',
        'setting'      => 'site_introduction_settinng',
        'priority'     => 5
        ));

    // site introduction enable/disable button setting added
    $wp_customize->add_setting('site_introduction_enable_btn_settinng',array(
        'default'            => '',
        'capability'         => 'edit_theme_options',
        'sanitize_callback'  => 'blog_text_sanitize'
    ) );

    // site introduction enable/disable button control added

    $wp_customize->add_control('site_introduction_enable_btn_settinng', array(
        'type'         => 'checkbox',
        'label'        => __('Enable / disable Introduction Section', 'blog'),
        'section'      => 'blog_introduction_section',
        'setting'      => 'site_introduction_settinng',
        'priority'     => 10
    ) );

    $wp_customize->add_setting('site_introduction_link_setting',array(
       'default'            => 'http://',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('site_introduction_link_setting',array(
        'label'   => __('Url','blog'),
        'section' => 'blog_introduction_section',
        'setting' => 'site_introduction_link_setting'
    ) );

    $wp_customize->add_setting('site_introduction_color_setting',array(
        'default'            => '#eee',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'blog_hex_sanitize_color',
        'sanitize_js_callback' => 'blog_escaping_color_sanitize'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'site_introduction_color_setting',array(
        'label'   => __('Color','blog'),
        'section' => 'blog_introduction_section',
        'setting' => 'site_introduction_color_setting'
    ) ) );

    $wp_customize->add_setting('site_introduction_background_color_setting',array(
        'default'            => '#eee',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'blog_hex_sanitize_color',
        'sanitize_js_callback' => 'blog_escaping_color_sanitize'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'site_introduction_background_color_setting',array(
        'label'   => __('Back Ground Color','blog'),
        'section' => 'blog_introduction_section',
        'setting' => 'site_introduction_background_color_setting'
    ) ) );

    $wp_customize->add_section('blog_slider_section',array(
        'title'       => esc_html__('Slider','blog'),
        'description' => esc_html__('THis is Slider section','blog'),
        'priority'    => 5
    ) );

    $blog_prod_categories_array = array('-' => __('Select category','blog'));

    $blog_prod_categories = get_categories( array('taxonomy' => 'product_cat', 'hide_empty' => 0, 'title_li' => '') );

    if( !empty($blog_prod_categories) ):
        foreach ($blog_prod_categories as $blog_prod_cat):

            if( !empty($blog_prod_cat->term_id) && !empty($blog_prod_cat->name) ):
                $blog_prod_categories_array[$blog_prod_cat->term_id] = $blog_prod_cat->name;
            endif;


        endforeach;
    endif;

    /* Category */
    $wp_customize->add_setting( 'blog_products_category', array(
        'transport'             =>  'postMessage',
        'capability'            =>  'edit_theme_options',
        'sanitize_callback'     =>  'blog_sanitize_text'
    ));

    $wp_customize->add_control( 'blog_products_category', array(
        'type' 		            =>  'select',
        'label' 	            =>  esc_html__( 'Products category', 'blog' ),
        'description'           =>  esc_html__( 'Pick a product category. WooCommerce latest products are displaying.', 'blog' ),
        'section' 	            =>  'blog_slider_section',
        'choices'               =>  $blog_prod_categories_array,
    ));

   /* for($i=1; $i < 5; $i++) {
        $wp_customize->add_setting('blog_heading_title_setting' . $i, array(
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control(new HeadingTitle($wp_customize, 'blog_heading_title_setting' . $i, array(
            'label' => __('Slider Title ', 'blog') . $i,
            'section' => 'blog_slider_section',
            'setting' => 'blog_heading_title_setting'.$i
        ) ) );

        $wp_customize->add_setting('blog_slider_title_setting' . $i, array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'blog_text_sanitize',
        ));

        $wp_customize->add_control('blog_slider_title_setting' . $i, array(
            'label' => __('Title ', 'blog') . $i,
            'section' => 'blog_slider_section',
            'setting' => 'blog_slider_title_setting'.$i
        ));

        $wp_customize->add_setting('blog_slider_setting' . $i, array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'blog_slider_setting' . $i, array(
            'label' => __('Image', 'blog') . $i,
            'section' => 'blog_slider_section',
            'setting' => 'blog_slider_setting' . $i
        )));
    }*/

    // about ndi  add section
    $wp_customize->add_section('blog_about_ndi_section', array(
        'title'         => __('About Ndi', 'blog'),
        'description'   => __('This is about Section', 'blog'),
        'priority'      => 7
        ));

     // about ndi title setting
    $wp_customize->add_setting('blog_about_ndi_setting', array(
        'default'            => '',
        'capability'         => 'edit_theme_options',
        'sanitize_callback'  => 'blog_about_sanitize'
        ));

    //about ndi title control
    $wp_customize->add_control('blog_about_ndi_setting', array(
        'label'     => __('Title', 'blog'),
        'type'      => 'text',
        'section'   => 'blog_about_ndi_section',
        'setting'   => 'blog_about_ndi_setting',
        'priority'  => 4
        ));

    // about ndi description setting
    $wp_customize->add_setting('blog_about_ndi_desc_setting', array(
        'default'            => '',
        'capability'         => 'edit_theme_options',
        'sanitize_callback'  => 'blog_about_sanitize'
        ));

    //about ndi description control
    $wp_customize->add_control('blog_about_ndi_desc_setting', array(
        'label'     => __('Description', 'blog'),
        'type'      => 'textarea',
        'section'   => 'blog_about_ndi_section',
        'setting'   => 'blog_about_ndi_desc_setting',
        'priority'  => 11
        ));

    // about ndi background image setting
    $wp_customize->add_setting('blog_about_ndi_image_setting', array(
        'capability'            => 'edit_theme_options',
        'sanitize_callback'     => 'blog_about_sanitize'
        ));

    //about ndi background  image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'blog_about_ndi_image_setting', array(
        'label'      => __('Background Image', 'blog'),
        'section'    => 'blog_about_ndi_section',
        'setting'    => 'blog_about_ndi_image_setting',
        'priority'   => 12
        )));

    //about section background color setting
    $wp_customize->add_setting('Blog_about_ndi_section_bg_color_setting', array(
        'default'               => '#eee',
        'capability'            => 'edit_theme_options',
        'sanitize_callback'     => 'about_ndi_bg_color_sanitize',
        'sanitize_js_callback'  => 'about_ndi_js_bg_color_setting'
        ));

    //about section background color control
    $wp_customize->add_control(new WP_Customize_Color_control($wp_customize, 'Blog_about_ndi_section_bg_color_setting', array(
        'label'     => __('Background Color', 'blog'),
        'section'   => 'blog_about_ndi_section',
        'setting'   => 'Blog_about_ndi_section_bg_color_setting',
        'priority'  => 13
        )));

    // about ndi title color setting
    $wp_customize->add_setting('blog_about_title_color_setting', array(
        'default' => '#eee',
        'capability'            => 'edit_theme_options',
        'sanitize_callback'     => 'about_ndi_bg_color_sanitize',
        'sanitize_js_callback'  => 'about_ndi_js_bg_color_setting'
        ));

    //about ndi title color control
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_about_title_color_setting', array(
        'label' => __('Title Color', 'blog'),
        'section' => 'blog_about_ndi_section',
        'setting' => 'blog_about_title_color_setting',
        'priority' => 14
        )));

    // about ndi descriptio color setting
    $wp_customize->add_setting('blog_about_description_color_setting', array(
        'default' => '#eee',
        'capability'            => 'edit_theme_options',
        'sanitize_callback'     => 'about_ndi_bg_color_sanitize',
        'sanitize_js_callback'  => 'about_ndi_js_bg_color_setting'
        ));

    //about ndi title color control
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_about_description_color_setting', array(
        'label' => __('Description Color', 'blog'),
        'section' => 'blog_about_ndi_section',
        'setting' => 'blog_about_description_color_setting',
        'priority' => 15
        )));

    // about ndi read more btn value text setting
    $wp_customize->add_setting('blog_about_ndi_readmore_btn__value_text', array(
        'default'            => 'Read More',
        'capability'         => 'edit_theme_options',
        'sanitize_callback'  => 'blog_about_sanitize'
        ));

    //about ndi read more btn value text control
    $wp_customize->add_control('blog_about_ndi_readmore_btn__value_text', array(
        'label'     => __('Button Text', 'blog'),
        'type'      => 'text',
        'section'   => 'blog_about_ndi_section',
        'seting'    => 'blog_about_ndi_readmore_btn__value_text',
        'priority'  => 16
        ));

    // about ndi read more text color setting
    $wp_customize->add_setting('blog_about_more_btn_color_setting', array(
        'default' => '#eee',
        'capability'            => 'edit_theme_options',
        'sanitize_callback'     => 'about_ndi_bg_color_sanitize',
        'sanitize_js_callback'  => 'about_ndi_js_bg_color_setting'
        ));

    //about ndi read more text color control
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_about_more_btn_color_setting', array(
        'label'     => __('Read More  Color', 'blog'),
        'section'   => 'blog_about_ndi_section',
        'setting'   => 'blog_about_more_btn_color_setting',
        'priority'  => 17
        )));

    // about ndi read more text background color setting
    $wp_customize->add_setting('blog_about_more_btn_bg_color_setting', array(
        'default' => '#eee',
        'capability'            => 'edit_theme_options',
        'sanitize_callback'     => 'about_ndi_bg_color_sanitize',
        'sanitize_js_callback'  => 'about_ndi_js_bg_color_setting'
        ));

    //about ndi read more text background color setting
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_about_more_btn_bg_color_setting', array(
        'label' => __('Read More Background Color', 'blog'),
        'section' => 'blog_about_ndi_section',
        'setting' => 'blog_about_more_btn_bg_color_setting',
        'priority' => 18
        )));

    // about ndi section enable/disable setting
    $wp_customize->add_setting('blog_about_ndi_section_en_ds', array(
        'capability'         => 'edit_theme_options',
        'sanitize_callback'  => 'blog_sanitize_checkbox'
        ));

    //about ndi read more btn value text control
    $wp_customize->add_control('blog_about_ndi_section_en_ds', array(
        'label'     => __('Enble/Disable This Section', 'blog'),
        'type'      => 'select',
        'section'   => 'blog_about_ndi_section',
        'seting'    => 'blog_about_ndi_section_en_ds',
        'priority'  => 20
        ));

    //this section add section
    $wp_customize->add_section('blog_this_section_add_section', array(
        'title' => __('Add This Section', 'blog'),
        'description' => __('This Section Here', 'blog'),
        'priority' => 21
        ));

    //this section add seting
    $wp_customize->add_setting('blog_this_section_setting', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'section_sanitize_callback'
        ));

    //his section add control
    $wp_customize->add_control('blog_this_section_setting', array(
        'label' => __('this section title', 'blog'),
        'type' => 'text',
        'section' => 'blog_this_section_add_section',
        'setting' => 'blog_this_section_setting',
        'priority' => 21
        ));

    //this section add setting description

    $wp_customize->add_setting('blog_desc_setting', array(
        'default' => 'No',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'section_sanitize_callback'
        ));

    //this section add control
    $wp_customize->add_control('blog_desc_setting', array(
        'label' => __('Link Page'),
        'section' => 'blog_this_section_add_section',
        'setting' => 'blog_desc_setting',
        'type' => 'select',
        'choices' => array(
                'No' => 'No',
               'Yes' => 'Yes'
        ),
        ));

    $wp_customize->add_setting('blog_desc_radio_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'section_radio_sanitize_callback'
    ));

    //this section add control
    $wp_customize->add_control('blog_desc_radio_setting', array(
        'label' => __('Link Page'),
        'section' => 'blog_this_section_add_section',
        'setting' => 'blog_desc_setting',
        'type' => 'radio',
        'choices' => array(
            'string1' => esc_html__('Title 1'),
            'string2' => esc_html__('Title 2'),
            'string4' => esc_html__('Title 3'),
            'string5' => esc_html__('Title 4')
        )
    ));

 function section_radio_sanitize_callback($value){
     if(! in_array($value, array('string1','string2','string4','string5'))){
         return 'string1';
     }
     return $value;
 }

    //about ndi sanitize callback function
    function blog_about_sanitize($about_title)
    {
        global $allowedtags;
        return wp_kses($about_title, $allowedtags);
    }

    //about section background callback function
    function about_ndi_bg_color_sanitize($about_bgcolor)
    {
        return sanitize_hex_color($about_bgcolor);
    }

    function about_ndi_js_bg_color_setting($about_js_color)
    {
        return esc_attr($about_js_color);
    }

    function blog_hex_sanitize_color($color)
    {
        return sanitize_hex_color($color);
    }

    function blog_escaping_color_sanitize($input)
    {
        return esc_attr($input);
    }

    function section_sanitize_callback($this_section)
    {
        global $allowedtags;
        return wp_kses($this_section, $allowedtags);
    }

    function blog_text_sanitize($string)
    {
        global $allowedtags;

        return wp_kses($string, $allowedtags);
    }

    function blog_sanitize_checkbox($input){
        if($input == 1)
            return 1;
        else
            return 0;
    }

}
add_action( 'customize_register', 'wordpress_class_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wordpress_class_customize_preview_js() {
	wp_enqueue_script( 'wordpress_class_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}

add_action( 'customize_preview_init', 'wordpress_class_customize_preview_js' );

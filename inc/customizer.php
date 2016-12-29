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
        'description' => esc_html__('THis is header section','blog'),
        'priority'    => 5
    ) );


    //site introduction add setting

    $wp_customize->add_setting('site_introduction_settinng',array(
        'default'   => '',
        'capability' => 'edit_theme_options',
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
        ));





    /*$wp_customize->add_setting('blog_header_checkbox_setting',array(
        'default'   => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback'  => 'blog_sanitize_checkbox'
    ) );

    $wp_customize->add_control('blog_header_checkbox_setting', array(
        'type'    => 'checkbox',
        'label'   => esc_html__('Checkbox', 'blog'),
        'section' => 'blog_header_section',
        'settings' => 'blog_header_checkbox_setting',
        'priority' => 5
    ));*/



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

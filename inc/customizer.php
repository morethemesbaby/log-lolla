<?php
/**
 * Log Lolla Theme Customizer
 *
 * @package Log_Lolla
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 * Also add support for customizing the footer copyright and credits
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function log_lolla_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	$wp_customize->add_setting( 'footer_copyright', array(
	  'type' => 'theme_mod', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => get_bloginfo( 'name' ),
	  'transport' => 'postMessage', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );

	$wp_customize->add_control( 'footer_copyright', array(
	  'type' => 'text',
	  'priority' => 10, // Within the section.
	  'section' => 'title_tagline', // Required, core or custom.
	  'label' => __( 'Copyright text in footer' ),
	  'description' => '',
	  'active_callback' => 'is_front_page',
	) );


	$wp_customize->add_setting( 'footer_copyright_link', array(
	  'type' => 'theme_mod', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => get_bloginfo( 'url' ),
	  'transport' => 'postMessage', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );

	$wp_customize->add_control( 'footer_copyright_link', array(
	  'type' => 'text',
	  'priority' => 10, // Within the section.
	  'section' => 'title_tagline', // Required, core or custom.
	  'label' => __( 'Copyright link in footer' ),
	  'description' => '',
	  'active_callback' => 'is_front_page',
	) );


	$wp_customize->add_setting( 'footer_copyright_display', array(
	  'type' => 'theme_mod', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '1',
	  'transport' => 'postMessage', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );

	$wp_customize->add_control( 'footer_copyright_display', array(
	  'type' => 'checkbox',
	  'priority' => 10, // Within the section.
	  'section' => 'title_tagline', // Required, core or custom.
	  'label' => __( 'Display footer copyright' ),
	  'description' => '',
	  'active_callback' => 'is_front_page',
	) );


	$wp_customize->add_setting( 'footer_credits_display', array(
	  'type' => 'theme_mod', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '1',
	  'transport' => 'postMessage', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );

	$wp_customize->add_control( 'footer_credits_display', array(
	  'type' => 'checkbox',
	  'priority' => 10, // Within the section.
	  'section' => 'title_tagline', // Required, core or custom.
	  'label' => __( 'Display footer credits' ),
	  'description' => __( 'Like Powered By Wordpress and the Log Lolla Theme' ),
	  'active_callback' => 'is_front_page',
	) );


	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'log_lolla_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'log_lolla_customize_partial_blogdescription',
		) );
		$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
			'selector'        => '.footer_copyright',
			'render_callback' => 'log_lolla_customize_partial_footer_copyright',
		) );
		$wp_customize->selective_refresh->add_partial( 'footer_copyright_link', array(
			'selector'        => '.footer_copyright',
			'render_callback' => 'log_lolla_customize_partial_footer_copyright_link',
		) );
	}
}
add_action( 'customize_register', 'log_lolla_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function log_lolla_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function log_lolla_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Render the footer copyright for the selective refresh partial.
 *
 * @return void
 */
function log_lolla_customize_partial_footer_copyright() {
	bloginfo( 'name' );
}


/**
 * Render the footer copyright link for the selective refresh partial.
 *
 * @return void
 */
function log_lolla_customize_partial_footer_copyright_link() {
	bloginfo( 'url' );
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function log_lolla_customize_preview_js() {
	wp_enqueue_script( 'log-lolla-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'log_lolla_customize_preview_js' );
?>

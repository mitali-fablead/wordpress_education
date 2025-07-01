<?php
/**
 * Education Management functions
 */

//Admin css
	add_editor_style( array( 'assets/css/admin.css' ) );

if ( ! function_exists( 'education_management_styles' ) ) :
	function education_management_styles() {
		// Register theme stylesheet.
		wp_register_style('education-management-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'education-management-style' );

		wp_style_add_data( 'education-management-style', 'rtl', 'replace' );

		wp_enqueue_script( 'education-management-custom-script', get_theme_file_uri( '/assets/js/custom-script.js' ), array( 'jquery' ), true );
	}
endif;
add_action( 'wp_enqueue_scripts', 'education_management_styles' );


if ( ! function_exists( 'education_management_setup' ) ) :
function education_management_setup() {

	
	// Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'education_management_custom_background_args', array(
	    'default-color' => 'ffffff',
	    'default-image' => '',
    ) ) );

	/**
	 * About Theme Function
	 */
	require get_theme_file_path( '/about-theme/about-theme.php' );

	/**
	 * Customizer
	 */
	require get_template_directory() . '/inc/customizer.php';

}
endif; 
add_action( 'after_setup_theme', 'education_management_setup' );

<?php
/**
 * Education Elementor manage the Customizer panels.
 *
 * @subpackage education-elementor
 * @since 1.0 
 */

/**
 * General Settings Panel
 */
Kirki::add_panel( 'education_elementor_general_panel', array(
	'priority' => 10,
	'title'    => __( 'General Settings', 'education-elementor' ),
) );

/**
 * Education Elementor Options
 */
Kirki::add_panel( 'education_elementor_options_panel', array(
	'priority' => 20,
	'title'    => __( 'Education Elementor Theme Options', 'education-elementor' ),
) );
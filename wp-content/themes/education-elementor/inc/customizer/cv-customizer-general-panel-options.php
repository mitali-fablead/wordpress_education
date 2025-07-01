<?php
/**
 * Education Elementor manage the Customizer options of general panel.
 *
 * @subpackage education-elementor
 * @since 1.0 
 */
Kirki::add_field(
	'education_elementor_config', array(
		'type'        => 'checkbox',
		'settings'    => 'education_elementor_home_posts',
		'label'       => esc_attr__( 'Checked to hide latest posts in homepage.', 'education-elementor' ),
		'section'     => 'static_front_page',
		'default'     => true,
	)
);

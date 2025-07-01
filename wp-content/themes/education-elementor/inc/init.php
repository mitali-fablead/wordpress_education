<?php 

get_template_part( 'inc/admin-function');

//custom-style
get_template_part( 'inc/education-elementor-custom-style');

// theme-option
get_template_part( 'lib/texture-option/texture-option');

// customizer
get_template_part('customizer/models/class-education-elementor-singleton');
get_template_part('customizer/models/class-education-elementor-defaults-models');
get_template_part('customizer/repeater/class-education-elementor-repeater');

/*customizer*/

get_template_part('customizer/extend-customizer/class-education-elementor-wp-customize-panel');
get_template_part('customizer/extend-customizer/class-education-elementor-wp-customize-section');
get_template_part('customizer/customizer-radio-image/class/class-education-elementor-customize-control-radio-image');
get_template_part('customizer/customizer-range-value/class/class-education-elementor-customizer-range-value-control');

get_template_part('customizer/color/class-control-color');
get_template_part('customizer/customize-buttonset/class-control-buttonset');

get_template_part('customizer/background/class-education-elementor-background-image-control');

get_template_part('customizer/customizer-toggle/class-education-elementor-toggle-control');

get_template_part('customizer/custom-customizer');
get_template_part('customizer/customizer');

/******************************/
// woocommerce
/******************************/
get_template_part( 'inc/woocommerce/woo-core');
get_template_part( 'inc/woocommerce/woo-function');
get_template_part('inc/woocommerce/woocommerce-ajax');
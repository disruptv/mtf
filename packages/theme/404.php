<?php
get_header();

// Elementor `404` location
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {
	get_template_part( 'template-parts/404' );
}

get_footer();
<?php

function bag_files(){
	wp_enqueue_style('bootstrap', get_theme_file_uri('lib/bootstrap/css/bootstrap.min.css'));
	wp_enqueue_style('ionicons', get_theme_file_uri('/lib/ionicons/css/ionicons.min.css'));
	wp_enqueue_style('carousel', get_theme_file_uri('/lib/owlcarousel/assets/owl.carousel.min.css'));
	wp_enqueue_style('magnific-popup', get_theme_file_uri('/lib/magnific-popup/magnific-popup.css'));
	wp_enqueue_style('hover', get_theme_file_uri('/lib/hover/hover.min.css'));
	wp_enqueue_style('form', get_theme_file_uri('/css/form.css'));
	wp_enqueue_style('responsive', get_theme_file_uri('/css/responsive.css'));
	wp_enqueue_style('main_styles', get_stylesheet_uri());










	wp_enqueue_script('jqueryjs', get_theme_file_uri('/lib/jquery/jquery.min.js'), NULL, '1.0', true);
	wp_enqueue_script('jquerymigratejs', get_theme_file_uri('/lib/jquery/jquery-migrate.min.js'), null, '1.0', true);
	wp_enqueue_script('bootstrapjs', get_theme_file_uri('/lib/bootstrap/js/bootstrap.bundle.min.js'), null, '1.0', true);
	wp_enqueue_script('typed', get_theme_file_uri('/lib/typed/typed.js'), null, '1.0', true);
	wp_enqueue_script('owljs', get_theme_file_uri('/lib/owlcarousel/owl.carousel.min.js'), null,'1.0', true);
	wp_enqueue_script('magnific', get_theme_file_uri('lib/magnific-popup/magnific-popup.min.js'), null, '1.0', true);
	wp_enqueue_script('isotope', get_theme_file_uri('lib/isotope/isotope.pkgd.min.js'), null, '1.0', true);
	wp_enqueue_script('contactjs', get_theme_file_uri('/contactform/contactform.js'), null,'1.0', true);

	wp_enqueue_script('main', get_theme_file_uri('js/mains.js'), null, '1.0', true);


}
add_action('wp_enqueue_scripts', 'bag_files');


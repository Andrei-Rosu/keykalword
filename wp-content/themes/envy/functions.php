<?php

function bag_files(){
	wp_enqueue_style('bootstrap', get_theme_file_uri('lib/bootstrap/css/bootstrap.min.css'));
	wp_enqueue_style('font-awesome', get_theme_file_uri('/lib/font-awesome/css/font-awesome.min.css'));
	wp_enqueue_style('ionicons', get_theme_file_uri('/lib/ionicons/css/ionicons.min.css'));
	wp_enqueue_style('carousel', get_theme_file_uri('/lib/owlcarousel/assets/owl.carousel.min.css'));
	wp_enqueue_style('magnific-popup', get_theme_file_uri('/lib/magnific-popup/magnific-popup.css'));
	wp_enqueue_style('hover', get_theme_file_uri('/lib/hover/hover.min.css'));
	wp_enqueue_style('form', get_theme_file_uri('/css/form.css'));
	wp_enqueue_style('main_styles', get_stylesheet_uri());
	wp_enqueue_style('responsive', get_theme_file_uri('/css/responsive.css'));

	wp_enqueue_script('jqueryjs', get_theme_file_uri('/lib/jquery/jquery.min.js'), NULL, '1.0', true);
	wp_enqueue_script('jquerymigratejs', get_theme_file_uri('/lib/jquery/jquery-migrate.min.js'), null, '1.0', true);
	wp_enqueue_script('typed', get_theme_file_uri('/lib/typed/typed.js'), null, '1.0', true);
	wp_enqueue_script('bootstrapjs', get_theme_file_uri('/lib/bootstrap/js/bootstrap.bundle.min.js'), null, '1.0', true);

	wp_enqueue_script('owljs', get_theme_file_uri('/lib/owlcarousel/owl.carousel.min.js'), null,'1.0', true);
	wp_enqueue_script('magnific', get_theme_file_uri('lib/magnific-popup/magnific-popup.min.js'), null, '1.0', true);
	wp_enqueue_script('isotope', get_theme_file_uri('lib/isotope/isotope.pkgd.min.js'), null, '1.0', true);
	wp_enqueue_script('contactjs', get_theme_file_uri('/contactform/contactform.js'), null,'1.0', true);

	wp_enqueue_script('main', get_theme_file_uri('js/mains.js'), null, '1.0', true);


}
add_action('wp_enqueue_scripts', 'bag_files');

function bag_features(){
	register_nav_menu('headerMenuLocation', 'Header Menu Location');
	add_theme_support('title-tag');
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 50, 50);
	add_image_size( 'single-post-thumbnail', 590, 180 );
}
add_action('after_setup_theme', 'bag_features');
function catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];

	if(empty($first_img)){ //Defines a default image
		$first_img = "/img/bees.png";
	}
	return $first_img;
}
add_filter('the_content', 'strip_images',2);

function strip_images($content){
	return preg_replace('/<img[^>]+./','',$content);
}



add_filter('widget_text', 'do_shortcode');

/**
 * Outputs localized string if polylang exists or  output's not translated one as a fallback
 *
 * @param $string
 *
 * @return  void
 */
function pl_e( $string = '' ) {
	if ( function_exists( 'pll_e' ) ) {
		pll_e( $string );
	} else {
		echo $string;
	}
}

/**
 * Returns translated string if polylang exists or  output's not translated one as a fallback
 *
 * @param $string
 *
 * @return string
 */
function pl__( $string = '' ) {
	if ( function_exists( 'pll__' ) ) {
		return pll__( $string );
	}

	return $string;
}

// these function prefixes can be either you are comfortable with.

function your_prefix_after_setup_theme() {

	// register our translatable strings - again first check if function exists.

	if ( function_exists( 'pll_register_string' ) ) {

		pll_register_string( 'ToggleNavigation', 'Toggle navigation', 'envy', false );

		pll_register_string( 'ToggleSearch', 'Toggle Search', 'envy', false );
		pll_register_string( 'We are', 'We are Keykal', 'envy', false );
		pll_register_string( 'We', 'We', 'envy', false );
		pll_register_string( 'Web', 'Web unscripted', 'envy', false );
		pll_register_string( 'who', 'Who are we?', 'envy', false );
		pll_register_string( 'born', 'born', 'envy', false );
		pll_register_string( 'jul', 'jul', 'envy', false );
		pll_register_string( 'juldes', 'juldes', 'envy', false );
		pll_register_string( 'and', 'and', 'envy', false );
		pll_register_string( 'andes', 'andes', 'envy', false );
		pll_register_string( 'work', 'work', 'envy', false );
		pll_register_string( 'all', 'all', 'envy', false );
		pll_register_string( 'mockups', 'mockups', 'envy', false );
		pll_register_string( 'web design', 'web design', 'envy', false );
		pll_register_string( 'branding', 'branding', 'envy', false );
		pll_register_string( 'photography', 'photography', 'envy', false );
		pll_register_string( 'zodes', 'zodes', 'envy', false );
		pll_register_string( 'bades', 'bades', 'envy', false );
		pll_register_string( 'modes', 'modes', 'envy', false );
		pll_register_string( 'plades', 'plades', 'envy', false );
		pll_register_string( 'yendes', 'yendes', 'envy', false );
		pll_register_string( 'cafedes', 'cafedes', 'envy', false );
		pll_register_string( 'blog', 'blog', 'envy', false );
		pll_register_string( 'code', 'code', 'envy', false );
		pll_register_string('404Message', 'It looks like nothing was found. Try getting back to the <a href="%s">home page</a>.', 'YourThemeName', true);

	}
}
add_action( 'after_setup_theme', 'your_prefix_after_setup_theme' );





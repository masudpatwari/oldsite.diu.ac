<?php

/**
 * diu
 */

if ( ! function_exists( 'diu_setup' ) ) :

function diu_setup() {

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'sonargaon' ),
		'social'  => __( 'Social Links Menu', 'sonargaon' ),
	) );

	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

}
endif; // creditcard_setup
add_action( 'after_setup_theme', 'diu_setup' );


 function limit_words($string, $word_limit) {

	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));

}

// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);



function read_api_data_with_GET($api_function_name_and_parameters)
{
	// static $result;
	//
	// if($result)
	// return $result;

	$url =  'https://rms.diu.ac/api/get_all_teacher/' . $api_function_name_and_parameters ;

	$result = file_get_contents($url, false,
			stream_context_create(
								array(
									'ssl' =>
										array(
												#'cafile'=>'/etc/pki/tls/cert.pem',
												'verify_peer' => false,
												'verify_peer_name' => false
											)
									)
								)
				);
	return $result;
}

function get_teacher_json($dept_short_code)
{
	return read_api_data_with_GET($dept_short_code);
}

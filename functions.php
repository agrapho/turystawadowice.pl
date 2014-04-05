<?php

// Theme-Setup
add_action( 'after_setup_theme', 'ilisa_theme_setup' );

function ilisa_theme_setup() {

// This theme supports post thumbnails
        add_theme_support( 'post-thumbnails' );

// This theme supports custom background (with backwards compatibility)
        $args = array(
                'default-color' => 'FFFFFF',
        );

        $args = apply_filters( 'ilisa_custom_background_args', $args );

        if ( function_exists( 'wp_get_theme' ) ) {
                add_theme_support( 'custom-background', $args );
        }
}


function filter_wp_title( $title ) {
	// Get the Site Name
	$site_name = get_bloginfo( 'name' );
	// Prepend it to the default output
	$filtered_title = $site_name ." ". $title;
	// Return the modified title
	return $filtered_title;
}

// Hook into 'wp_title'
add_filter( 'wp_title', 'filter_wp_title' );

function favicon_link() {
	$options = get_option('ilisa_theme_options');
	echo '<link rel="shortcut icon" type="image/x-icon" href="'.esc_url( $options['custom_favicon'] ).' "/>' . "\n";
}
add_action('wp_head', 'favicon_link');

// Load CSS 
function load_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'load_styles' );

// Load jQuery
function enqueue_scripts(){
	wp_enqueue_script('jquery');
	wp_enqueue_script('functions',get_template_directory_uri().'/js/functions.js',array('jquery'), '0.1', true);
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts');


/*==================== CUSTOM FUNCTIONS ==================== */

function trip_date() {
	$start_ts = get_post_meta(get_the_ID(),'wpcf-trip-start-date',TRUE);
        $end_ts = get_post_meta(get_the_ID(),'wpcf-trip-end-date',TRUE);
        if ( $start_ts == $end_ts ) {
            $start_date = date('d.m.Y', $start_ts);
            return $start_date;
        } else {
            $start_year = date('Y', $start_ts);
            $end_year = date('Y', $end_ts);
            if ( $start_year == $end_year)  {
                $start_date = date('d.m', $start_ts);
            } else {
                $start_date = date('d.m.Y', $start_ts);
            }
            $end_date = date('d.m.Y', $end_ts);
            return $start_date . " - " . $end_date;
        }
}

function display_trip_date() {
	$trip_date = trip_date();
	$date_parts = explode(" - ", $trip_date);
	array_walk($date_parts, 'transform_trip_date');
	echo implode(' - ', $date_parts);
}

function transform_trip_date(&$date) {
	$date_large_case = substr($date, 0, 1);
        $date_big_case = substr($date, 1, 1);
        $date_normal_case = substr($date, 2);
        $date = "<large>$date_large_case</large><big>$date_big_case</big>$date_normal_case";
}

function trip_price() {
	$price = get_post_meta(get_the_ID(),'wpcf-trip-price',TRUE);
	return $price;
}

function display_trip_price($pretty) {
	$price = trip_price();
	if ($pretty) {
	 	$price_big_case = substr($price, 0, 1);
        	$price_normal_case = substr($price, 1);
	        echo "<big>$price_big_case</big>$price_normal_case";
	} else {
		echo "$price";
	};
}

function trip_boarding() {
	$boarding = get_post_meta(get_the_ID(),'wpcf-trip-boarding',TRUE);
	return $boarding;
}

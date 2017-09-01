<?php

define( 'ONETONE_THEME_BASE_URL', get_template_directory_uri());
define( 'ONETONE_OPTIONS_FRAMEWORK', get_template_directory().'/admin/' );
define( 'ONETONE_OPTIONS_FRAMEWORK_URI',  ONETONE_THEME_BASE_URL. '/admin/');
define( 'ONETONE_OPTIONS_PREFIXED' ,'onetone_' );
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/admin/' );


require_once get_template_directory() . '/lib/customizer/customizer.php';
require_once get_template_directory() . '/lib/customizer/customizer-data.php';

// Restore customize data
load_template( trailingslashit( get_template_directory() ) . 'admin/customizer.php');
/**
 * Theme Functions
 **/

load_template( trailingslashit( get_template_directory() ) . 'includes/theme-functions.php' );

global $onetone_options_saved, $onetone_old_version, $onetone_option_name, $onetone_default_options,$onetone_model_v;
$onetone_options_saved = false;
$onetone_old_version   = false;
$onetone_model_v       = false;
$onetone_option_name   = onetone_option_name();

if ( $theme_options = get_option($onetone_option_name) ) {

 $onetone_options_saved = true;
if( (isset($theme_options['section_content_0']) &&  $theme_options['section_content_0'] != '') &&
	(isset($theme_options['section_content_1']) && $theme_options['section_content_0'] != '') &&
	(isset($theme_options['section_content_2']) && $theme_options['section_content_0'] != '') ){
	$onetone_old_version = true;

}
if( isset($theme_options['section_content_model_0']) ||
	isset($theme_options['section_content_model_1']) ||
	isset($theme_options['section_content_model_2']) ||
	isset($theme_options['section_content_model_3']) ){
	$onetone_model_v = true;

}

// Version <= 2.0.5
}

$onetone_default_options = onetone_get_default_options();

/**
 * Required: include options framework.
 **/
load_template( trailingslashit( get_template_directory() ) . 'admin/options-framework.php' );

require_once get_template_directory() . '/includes/admin-options.php';

/**
 * Mobile Detect Library
 **/
if(!class_exists("Mobile_Detect")){
	load_template( trailingslashit( get_template_directory() ) . 'includes/Mobile_Detect.php' );
 }
/**
 * Theme setup
 **/

load_template( trailingslashit( get_template_directory() ) . 'includes/theme-setup.php' );

/**
 * Theme breadcrumb
 */
load_template( trailingslashit( get_template_directory() ) . 'includes/breadcrumb-trail.php');

/**
 * Theme widget
 **/
load_template( trailingslashit( get_template_directory() ) . 'includes/theme-widget.php' );

/**
 * Meta box
 **/

load_template( trailingslashit( get_template_directory() ) . 'includes/metabox-options.php' );


// customize

wp_enqueue_style ('component', get_template_directory_uri().'/component.css');
wp_enqueue_style ('demo', get_template_directory_uri().'/demo.css');
wp_enqueue_style ('fxfullwidth', get_template_directory_uri().'/fxfullwidth.css');
wp_enqueue_style ('fxsmall', get_template_directory_uri().'/fxsmall.css');
wp_enqueue_style ('fxtransparent', get_template_directory_uri().'/fxtransparent.css');
wp_enqueue_style ('normalize', get_template_directory_uri().'/normalize.css');

function theme_add_query() {
  wp_enqueue_script( 'jquery-min-js', site_url() . '/jquery.min.js');


  wp_enqueue_script( 'modernizr-custom-js', site_url() . '/modernizr.custom.js');

  // wp_enqueue_script( 'classie-js', site_url() . '/classie.js');
  // wp_enqueue_script( 'main-js', site_url() . '/main.js');

  wp_enqueue_script( 'script-js', site_url() . '/script.js');


}

add_action( 'wp_enqueue_scripts', 'theme_add_query' );


if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Secondary Image',
'id' => 'secondary-image',
'post_type' => 'post'
 ) );

 }

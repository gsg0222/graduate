<?php
/**
 * Functions.
 *
 * @package WP
 */

/**
 * CSSとJSを設定.
 */
function my_enqueue_scripts() {
	define( 'TEMPLATE_DIRE', get_template_directory_uri() );
	define( 'TEMPLATE_PATH', get_template_directory() );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'reset', TEMPLATE_DIRE . '/css/html5reset-1.6.1.css', array(), gmdate( 'YmdGis', filemtime( TEMPLATE_PATH . '/css/html5reset-1.6.1.css' ) ) );
	wp_enqueue_style( 'my_styles', TEMPLATE_DIRE . '/css/style.css', array( 'reset' ), gmdate( 'YmdGis', filemtime( TEMPLATE_PATH . '/css/style.css' ) ) );
	wp_enqueue_script( 'my_script', TEMPLATE_DIRE . '/js/script.min.js', array(), gmdate( 'YmdGis', filemtime( TEMPLATE_PATH . '/css/style.css' ) ), true );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

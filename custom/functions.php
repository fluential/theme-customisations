<?php
/**
 * Functions.php
 *
 * @package  Theme_Customisations
 * @author   WooThemes
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * functions.php
 * Add PHP snippets here
 */
function company_customlogo() {
        add_theme_support( 'custom-logo', array(
             'width'       => 400,
	     'height'      => 120,
	     'flex-width'  => true,
	     'flex-height' => true
        ) );
}
add_action( 'after_setup_theme', 'company_customlogo', 11 );

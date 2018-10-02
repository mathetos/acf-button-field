<?php
/*
Plugin Name: Advanced Custom Fields: Button
Plugin URI: https://github.com/envex/acf-button-field
Description: Creates a set of button fields for the Advanced Custom Fields plugin
Version: 1.0.0
Author: Matt Cromwell
Author URI: http://mattcromwell.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-button-field', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );

/*
*  register_fields
*
*  @description: 
*  @since: 3.6
*  @created: 1/04/13
*/

// version 5+
function register_fields_v5()
{
	include_once('button-v5.php');
}
add_action('acf/include_field_types', 'register_fields_v5');

// version 4+
function register_fields_v4()
{
	include_once('button-v4.php');
}

add_action('acf/register_fields', 'register_fields_v4');	

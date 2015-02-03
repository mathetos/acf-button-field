=== Advanced Custom Fields: Button Field ===
Contributors: webdevmattcrom
Tags: custom fields, acf, add on
Requires at least: 3.4
Tested up to: 4.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Generates a nice button/link to either an external link, or an internal page, similar to the page_link field but will allow you to override the link text.

== Description ==

Generates a nice button/link to either an external link, or an internal page, similar to the page_link field but will allow you to override the link text.

= Compatibility =

This add-on works onle with version 4 and up.

== Installation ==

This add-on can be treated as both a WP plugin and a theme include.

= Plugin =
1. Copy the 'acf-button' folder into your plugins folder
2. Activate the plugin via the Plugins admin page

= Include =
1.	Copy the 'acf-button' folder into your theme folder (can use sub folders). You can place the folder anywhere inside the 'wp-content' directory
2.	Edit your functions.php file and add the code below (Make sure the path is correct to include the acf-button.php file)

`
add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
	include_once('acf-button/acf-button.php');
}
`

== Changelog ==

Forked from: https://github.com/envex/acf-button-field

The original didn't seem to be updated or maintained, and I needed this for a client, so here's the fork. 

Here's a quick list of the updates made:

= 1.0 =

* Removed all ACF 3 code
* Fixed bug with $button = $field['value'];
* Added class names to button output for styling. Class names automatically output based on Field label.

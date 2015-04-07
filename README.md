# ACF { Button Field

Adds a 'Button' field type for the [Advanced Custom Fields](http://wordpress.org/extend/plugins/advanced-custom-fields/) WordPress plugin.

-----------------------
### NEED CONTRIBUTIONS
I have a feature in the works that I'd love a nice pull-request on. If you use this field type, you'll notice that when you select "Internal Link" that it lists the posts of ALL your Post Types. This gets ridiculously unmanageable very quickly.

To address this, [I've manually restricted the post types](https://github.com/mathetos/acf-button-field/blob/master/button-v4.php#L155-L161). But what I'd like to do instead is provide a setting in the field creation screen to add a post type restriction as a multi-select field.

[You can see the beginnings of it on lines 84-111 here](https://github.com/mathetos/acf-button-field/blob/master/button-v4.php#L84-L111). I've populated the post types in a multi-select field, but the values currently cannot be saved. I know I can do this with the WordPress Settings API, but I think there's a more elegant way to do that using ACF conventions instead.

Any tips are appreciated.

### Overview

Generates a nice button/link to either an external link, or an internal page, similar to the page_link field but will allow you to override the link text.

### Compatibility

This add-on works onle with version 4 and up.

### Installation

This add-on can be treated as both a WP plugin and a theme include.

**Install as Plugin**

1. Copy the 'acf-button' folder into your plugins folder
2. Activate the plugin via the Plugins admin page

**Include within theme**

1.	Copy the 'acf-button' folder into your theme folder (can use sub folders). You can place the folder anywhere inside the 'wp-content' directory
2.	Edit your functions.php file and add the code below (Make sure the path is correct to include the acf-button.php file)

```php
include_once('acf-button/acf-button.php');
```

### More Information

Forked from: https://github.com/envex/acf-button-field

The original didn't seem to be updated. Here's a quick list of the updates made:

* Removed all ACF 3 code
* Fixed bug with $button = $field['value'];
* Added class names to button output for styling. Class names automatically output based on Field label.

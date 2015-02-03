# ACF { Button Field

Adds a 'Button' field type for the [Advanced Custom Fields](http://wordpress.org/extend/plugins/advanced-custom-fields/) WordPress plugin.

-----------------------

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

# wizzie 
![screenshot](https://raw.githubusercontent.com/bobbingwide/wizzie/main/screenshot.png)
* Contributors: bobbingwide, vsgloik
* Donate link: https://www.oik-plugins.com/oik/oik-donate/
* Tags: blocks, FSE, Gutenberg, child-theme
* Requires at least: 5.5.1
* Tested up to: 5.8.0
* Version: 0.1.0
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html

Wizzie theme - Experimental WooCommerce Full Site Editing child theme of Fizzie

## Description 
This is an experimental theme attempting to implement Full Site Editing (FSE) with Gutenberg blocks and WooCommerce.

The theme is required to replace the Genesis-a2z theme that is used in [woocommerce.wp-a2z.org](https://woocommerce.wp-a2z.org)

Requirements:
1. Implement Full Site Editing.
2. Similar look and feel as the Fizzie theme
3. With additional WooCommerce specific templates and template parts
3. Support documentation / demonstration of each of the blocks in WooCommerce and/or WooCommerce Blocks
4. Find out what bits are missing from and/or not working on Gutenberg.
5. Implement on woocommerce.wp-a2z.org, when stable.


Contents:

*  templates
*  template parts

The `block-templates` are:

* cart.html
* checkout.html
* front-page.html
* index.html
* single-product.html

* See the template visualization: https://developer.wordpress.org/files/2014/10/Screenshot-2019-01-23-00.20.04.png

The `block-template-parts` are:

* customer-reviews.html
* footer-menu.html
* header-menu.html
* header.html
* page-content.html
* page-footer.html
* product-categories.html


Templates not yet implemented:



* product-category-download or archive-product_cat ?


## Installation 

* Either install Gutenberg 10.8.0 or higher or install and build the latest Gutenberg source.
* Activate Gutenberg.
* Install the parent the Fizzie theme, as you would install any other theme.
* Install and activate the Wizzie theme. Full Site Editing will be enabled automatically.
* For some of the templates and template parts to work properly you will need to install and activate the pre-requisite plugins.

* Pre-requisite plugins: see also Notes

* [oik](https://wordpress.org/plugins/oik/)
* [oik-fields](https://github.com/bobbingwide/oik-fields)
* [oik-a2z](https://github.com/bobbingwide/oik-a2z)
* [sb-breadcrumbs-block](https://github.com/bobbingwide/sb-breadcrumbs-block)
* [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/) - for breadcrumbs logic
* [SB Post Edit block](https://github.com/bobbingwide/sb-post-edit-block)

For the Output Input Debugging custom template

* [oik-block](https://github.com/bobbingwide/oik-block/) - for contents & guts shortcodes
* [oik-css](https://github.com/bobbingwide/oik-css) - for CSS block


## Change Log 

# 0.1.0 
* Changed: Enable Reviews when woocommerce theme support is not specified #7
* Changed: Rename templates and add debug info #1

# 0.0.0 
* Fixed: Set default typography fontFamily and link color. Add two WooCommercey purples
* Added: Add screenshot
* Changed: Support nested template parts which don't specify the theme attribute #4
* Changed: Remove some redundant code. Comment on the current position on adding woocommerce theme support #1
* Added: Add custom templates for cart and checkout. Add single-product template #1
* Changed: Update front-page to be similar to Storefront demo #1
* Changed: Enable editing of front-page using the Site Editor #3
* Added: Copy favicon from Fizzie
* Added: Copy dummy oik-custom.css to avoid an unwanted 404
* Added: Copy theme.json from Fizzie #1
* Added: Implement template part override to allow the child themes to use a parent theme's template parts #1
* Added: Enqueue style.css from the parent theme and override template-part block rendering. #1
* Added: Add style.css - copied from Fizzie but all styling removed. #1

### Block overrides 

Wizzie contains a number of overrides to Gutenberg server rendered blocks which didn't behave the way I expected.

Improvement areas include:

* core/template-part - Loads template parts from child theme then template theme


## Copyright 
(C) Copyright Herb Miller, Bobbing Wide 2021

* This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

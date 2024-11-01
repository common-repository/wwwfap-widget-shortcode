<?php
/*
Plugin Name: wwwFap Widget Shortcode
Description: Plugin to enable shortcode in text widgets and custom html widgets on your WordPress site.
Version: 1.0.0
Author: wwwFap
Author URI: https://adultswag.com/ 
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
Text Domain: wwwfap-widget-shortcode

This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
General Public License version 2, as published by the Free Software Foundation. You may NOT assume 
that you can use any other version of the GPL.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Enable shortcodes in text and custom html widgets
add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', 'do_shortcode' );
add_filter( 'widget_custom_html_content', 'shortcode_unautop' );
add_filter( 'widget_custom_html_content', 'do_shortcode' );

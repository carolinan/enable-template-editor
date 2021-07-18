<?php
/**
 * Enable Template Editor
 *
 * @package           Enable Template Editor
 * @author            Carolina Nymark
 * @copyright         Carolina Nymark 2021
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Enable Template Editor
 * Plugin URI:
 * Description:       This plugin does one thing, it enables the template editor for themes that does not have built in support. This plugin is inteded for testing template editing and custom templates.
 * Version:           1.0.0
 * Requires at least: 5.8-RC
 * Requires PHP:      7.2
 * Author:            Carolina Nymark
 * Author URI:        https://fullsiteediting.com
 * Text Domain:       enable-template-editor
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Enable the template editor theme support.
 */
function enable_template_editor() {
	add_theme_support( 'block-templates' );
}
add_action( 'after_setup_theme', 'enable_template_editor', 0 );

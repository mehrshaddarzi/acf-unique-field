<?php
/**
 * Plugin Name: Unique Field in ACF
 * Description: A Plugin For Create Unique Field in ACF
 * Plugin URI:  https://realwp.net
 * Version:     1.0.0
 * Author:      Mehrshad Darzi
 * Author URI:  https://realwp.net
 * License:     MIT
 * Text Domain: acf-unique-field
 * Domain Path: /languages
 */

add_action('init', 'field_unique_id_load');
function field_unique_id_load()
{
    load_plugin_textdomain('acf-unique-field', false, plugin_basename(dirname(__FILE__)) . '/languages');
}

add_action('acf/include_field_types', 'include_field_unique_id');
function include_field_unique_id()
{
    include_once('fields/acf-unique-id.php');
}

<?php

/**
 * Bismillah
 * 
 * @wordpress-plugin
 * Plugin Name:       wp-ukyyplugin2
 * Plugin URI:        https://github.com/Ukyy/wp-ukyytest.git
 * Description:       Ini Plugin Gweh
 * Version:           1.1.0
 * Author:            Lucky
 * Author URI:        https://github.com/Ukyy
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-ukyyplugin2
 * Domain Path:       /languages
 */

define('TEMP_DIR',plugin_dir_path(__FILE__).'/templates/');
include 'menu/function-menu.php';

include 'function-sql.php';
?>
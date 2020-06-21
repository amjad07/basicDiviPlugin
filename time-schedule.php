<?php
/*
Plugin Name: Time Schedule
Plugin URI:  #
Description: #
Version:     1.0.0
Author:      #
Author URI:  #
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: gary-time-schedule
Domain Path: /languages

Time Schedule is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Time Schedule is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Time Schedule. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'gary_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function gary_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/TimeSchedule.php';
}
add_action( 'divi_extensions_init', 'gary_initialize_extension' );
endif;

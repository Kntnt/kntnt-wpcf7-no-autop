<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt No Auto P for Contact Form 7
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Disables the automatic generation of paragraphs in forms created by Contact Form 7.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined( 'ABSPATH' ) || die;

add_filter('wpcf7_autop_or_not', '__return_false');

<?php
/*
Plugin Name: Shipping by City for Woocommerce
Plugin URI: https://www.c-metric.com/
Description: Calculate Shipping method by City for Woocommerce
Version: 1.0.7
Author: C-Metric
Author URI: https://www.c-metric.com/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! defined( 'WC_CMETRIC_SBCFW_DB_VERSION' ) ) {
      define( 'WC_CMETRIC_SBCFW_DB_VERSION', '1.0.5' );
}

if (!function_exists('is_plugin_active')) {
    include_once(ABSPATH . 'wp-admin/includes/plugin.php');
}

// include all required files here
require_once('class-shipping-by-city-for-woocommerce.php');

/**
 * Get it Started
*/
$GLOBALS['WC_Cmetric_Sbcfw'] = new WC_Cmetric_Sbcfw();	
?>
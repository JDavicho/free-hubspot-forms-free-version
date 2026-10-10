<?php
/**
 * Utilidades auxiliares para HubSpot Forms.
 *
 * @package HubSpot_Forms
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function hubspot_forms_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}

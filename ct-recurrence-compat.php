<?php
/**
 * CT Recurrence Compat Class
 *
 * This version of CT_Recurrence is loaded by ct-recurrence-compat.php when the version
 * of PHP is insufficient. It returns empty values to prevent errors.
 *
 * @package   CT_Recurrence
 * @copyright Copyright (c) 2017, churchthemes.com
 * @link      https://github.com/churchthemes/ct-recurrence
 * @license   GPLv2 or later
 */

// No direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * CT Recurrence Compat Class
 *
 * This methods should return what actual methods in ct-recurrence.php returns on failure.
 *
 * @since 2.0
 */
class CT_Recurrence {

	public function prepare_args( $args ) {
		return false;
	}

	public function get_dates( $args ) {
		return array();
	}

	public function calc_next_future_date( $args ) {
		return false;
	}

}

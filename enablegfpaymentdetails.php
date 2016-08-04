<?php

/*
Plugin Name: Enable Gravity Forms Payment Details
Plugin URI:
Description: Adds a form setting allowing the Payment Details panel to be enabled on the entry detail page for entries not processed by a payment add-on.
Version: 0.2
Author: Richard Wawrzyniak
Author URI: http://www.wawrzyniak.me
------------------------------------------------------------------------
Copyright 2016 Richard Wawrzyniak

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see http://www.gnu.org/licenses.
*/

add_action( 'gform_loaded', array( 'Enable_GF_PaymentDetails_Bootstrap', 'load' ), 5 );

class Enable_GF_PaymentDetails_Bootstrap {

	public static function load() {

		if ( ! method_exists( 'GFForms', 'include_addon_framework' ) ) {
			return;
		}

		require_once( 'class-enable-gf-paymentdetails.php' );

		GFAddOn::register( 'Enable_GF_PaymentDetails' );
	}

}
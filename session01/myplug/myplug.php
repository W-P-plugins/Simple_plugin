<?php
/**
 * @package  AlecadddPlugin
 */
/*
Plugin Name: my_first_plug
Plugin URI: http://betavers.ir/plugs
Description: This is my first attempt on writing a custom Plugin for this amazing tutorial series.
Version: 1.0.0
Author: Phanthomf4321
Author URI: https://github.com/phantomf4321
License: GPLv2 or later
Text Domain: betavers-plug
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/
defined( 'ABSPATH' ) or die( 'sqbco Alert!' );

class AlecadddPlugin
{
	function __construct() {
		add_action( 'init', array( $this, 'custom_post_type' ) );
	}

	function activate() {
		// generated a CPT
		$this->custom_post_type();
		// flush rewrite rules
		flush_rewrite_rules();
	}

	function deactivate() {
		// flush rewrite rules
		flush_rewrite_rules();
	}

	function custom_post_type() {
		register_post_type( 'book', ['public' => true, 'label' => 'Device	'] );
	}
}

if ( class_exists( 'AlecadddPlugin' ) ) {
	$alecadddPlugin = new AlecadddPlugin();
}

// activation
register_activation_hook( __FILE__, array( $alecadddPlugin, 'activate' ) );

// deactivation
register_deactivation_hook( __FILE__, array( $alecadddPlugin, 'deactivate' ) );

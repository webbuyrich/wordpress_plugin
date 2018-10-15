<?php
/*
Plugin Name:  Simple Example Logout - using Plugable Functions
Plugin URI:   https://www.focusedandcreative.com
Description:  Example of using WordPress logout function used from wp-includes/pluggable.php line 558
Version:      1.0
Author:       Richard Peterson
Author URI:   https://www.focusedandcreative.com/webuyrich/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/



*/

// customize logout function
function myplugin_custom_logout(){

	// do something when the user logs out
	
	
}
add_action( 'wp_logout', 'myplugin_custom_logout' );
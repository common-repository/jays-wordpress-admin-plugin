<?php
/*
Plugin Name: Jay's WordPress Admin Theme
Description: Designates a monospaced font in the HTML editor. Maybe more in the future...
Version: 1.0
Author: Jay Robinson
Author URI: http://jayrobinson.org
*/

/*
Copyright (C) 2009 Jay Robinson, http://jayrobinson.org

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


function jays_admin() {
  $url = get_settings('siteurl');
  $url = $url . '/wp-content/plugins/jays-wordpress-admin-plugin/css/style.css';
  echo '<link rel="stylesheet" type="text/css" href="' . $url . '" />';
}

add_action('admin_head', 'jays_admin');

?>
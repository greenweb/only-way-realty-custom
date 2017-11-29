<?php 
/* Plugin Name: Only Way Realty Agent User Role 
 * Plugin URI: https://www.greenvilleweb.us
 * Description: Sets up a new user type calld agent
 * Version: 1.0
 * Author: greenweb
 * Author URI: https://www.greenvilleweb.us
 */

if ( ! defined( 'ABSPATH' ) ) exit;



function owr_add_roles_on_plugin_activation() {
    add_role( 'owr_agent', 'Only Way Agent', array( 'read' => true, 'level_0' => true ) );
}
register_activation_hook( __FILE__, 'owr_add_roles_on_plugin_activation' );
<?php
/**
Plugin Name: Islamic Content Archive For Dawah Skills
Plugin URI: http://www.dawahskills.com
Description: Da`wah Skills is an online source of information and a professional training platform for those engaged in Da`wah (calling to Islam) activities.
Version: 1.1
Author: EDC Team (E-Da`wah Committee)
Author URI: http://www.mawthuq.net/en/
License: Free
*/

define('OPICDS_PLUGIN_PATH',plugin_dir_path( __FILE__ ));
define('OPICDS_PLUGIN_URL',plugin_dir_url( __FILE__ ));
define('OPICDS_Page_SLUG','islamic_content_archive_for_dawah_skills');
define('OPICDS_Input_SLUG','opicds_');
define('DSLIB','lib');
define('DSDS','/');
define('DSCONTROLLERS','controllers');
define('DSMODELS','models');
define('DSDBTable', 'opicds_categories');
define('DSBootstrappath',OPICDS_PLUGIN_PATH.'style'.DSDS);
define('DSLogourl',OPICDS_PLUGIN_URL.'style'.DSDS.'images'.DSDS.'logo'.DSDS);
define('DSIconpath',OPICDS_PLUGIN_PATH.'style'.DSDS.'images'.DSDS.'icons'.DSDS);
define('DSIconurl',OPICDS_PLUGIN_URL.'style'.DSDS.'images'.DSDS.'icons'.DSDS);
define('DSFlagspath',OPICDS_PLUGIN_PATH.'style'.DSDS.'images'.DSDS.'flags'.DSDS);
define('DSFlagsurl',OPICDS_PLUGIN_URL.'style'.DSDS.'images'.DSDS.'flags'.DSDS);

define('DSControlerspath',OPICDS_PLUGIN_PATH.'controllers'.DSDS);
define('DSModelspath',OPICDS_PLUGIN_PATH.'models'.DSDS);
define('DSViewspath',OPICDS_PLUGIN_PATH.'views'.DSDS);
define('DSLayoutpath',OPICDS_PLUGIN_PATH.'views'.DSDS.'layout'.DSDS);
define('DSLangpath',OPICDS_PLUGIN_PATH.'views'.DSDS.'lang'.DSDS);

function OPICDS_plugin_install(){
	$default_lang = 'eng';
	$source = 'Soucre Link';
	add_option(OPICDS_Input_SLUG.'language', $default_lang);
	add_option(OPICDS_Input_SLUG.'source', $source);
	add_option(OPICDS_Input_SLUG.'cronjobtime', 'everyhour');
	add_option(OPICDS_Input_SLUG.'version', '1.0');
}

function OPICDS_plugin_uninstall(){
	$options = get_option(OPICDS_Input_SLUG.'language');
 	if( is_array($options) && $options['uninstall'] === true){
		delete_option(OPICDS_Input_SLUG.'language');
		delete_option(OPICDS_Input_SLUG.'source');
		delete_option(OPICDS_Input_SLUG.'cronjobtime');
		delete_option(OPICDS_Input_SLUG.'version');
	}
}

register_activation_hook(plugin_basename(__FILE__),'OPICDS_plugin_install'); 
register_deactivation_hook(plugin_basename(__FILE__), 'OPICDS_plugin_uninstall');

function OPICDS_table(){
	global $wpdb;
	$wpdb->query("DROP TABLE IF EXISTS ". $wpdb->prefix.DSDBTable);
}
	
register_uninstall_hook(__FILE__,'OPICDS_table');
register_deactivation_hook(__FILE__,'OPICDS_table');

include_once(OPICDS_PLUGIN_PATH.'load.php');
?>
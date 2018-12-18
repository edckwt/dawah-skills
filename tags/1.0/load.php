<?php 
include_once(OPICDS_PLUGIN_PATH.DSLIB.DSDS.'ds_pluginlifeciclye.php');
include_once(OPICDS_PLUGIN_PATH.DSLIB.DSDS.'ds_function.php');
$opicds_lang = fun_ds_loadlang();
 
include_once(OPICDS_PLUGIN_PATH.DSLIB.DSDS.'app_ds_helpers.php');
include_once(OPICDS_PLUGIN_PATH.DSLIB.DSDS.'html_ds_helper.php');
include_once(OPICDS_PLUGIN_PATH.DSLIB.DSDS.'app_ds_controlers.php');
include_once(OPICDS_PLUGIN_PATH.DSLIB.DSDS.'app_ds_models.php');

include_once(DSControlerspath.'main_ds_controller.php');
include_once(OPICDS_PLUGIN_PATH.DSDS.DSLIB.DSDS.'ds_main.php');
include_once(OPICDS_PLUGIN_PATH.DSLIB.DSDS.'app_ds_cronjob.php');
include_once(OPICDS_PLUGIN_PATH.DSLIB.DSDS.'opic_ds_cronjob.php');
include_once(OPICDS_PLUGIN_PATH.DSLIB.DSDS.'opic_ds_shortcode.php');
include_once(OPICDS_PLUGIN_PATH.DSLIB.DSDS.'opic_ds_admin_alert.php');
?>
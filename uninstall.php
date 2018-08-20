<?php
/**
 * Trigger this file on plugin uninstall
 *
 * @package JsDelivrCdn
 */

if(!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

//jsDelivr CDN plugin options name
$option_name = 'jsdelivrcdn_settings';
//delete options
delete_option($option_name);
//delete option for Multisite
delete_site_option($option_name);

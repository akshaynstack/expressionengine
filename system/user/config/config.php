<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['autosave_interval_seconds'] = '10';
$config['enable_dock'] = 'y';
$config['enable_frontedit'] = 'y';
$config['automatic_frontedit_links'] = 'y';
$config['enable_mfa'] = 'y';
$config['legacy_member_templates'] = 'y';
$config['forum_is_installed'] = 'y';
$config['site_license_key'] = '';
$config['save_tmpl_files'] = 'y';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system-configuration-overrides.html

$config['app_version'] = '6.2.4';
$config['encryption_key'] = '0cb0b01ca4b6a74c8c7a5cc023e535028c6d869c';
$config['session_crypt_key'] = 'dd9e3856c747cfab492cc2221002210a22217e4a';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'localhost',
		'database' => 'ee_db',
		'username' => 'ee_user',
		'password' => 'N*/XJ@jrRbl7FARE',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);
$config['show_ee_news'] = 'y';
$config['share_analytics'] = 'y';
$config['allow_php'] = 'y';

// EOF
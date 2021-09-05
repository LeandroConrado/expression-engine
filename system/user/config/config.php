<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['save_tmpl_files'] = 'y';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system-configuration-overrides.html

$config['app_version'] = '6.0.6';
$config['encryption_key'] = 'dcfa2c03524fbde4925c2739375edff97ebc2337';
$config['session_crypt_key'] = 'aa570e87ff678361a5e4fccecbf5fc31ea0304c5';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'localhost',
		'database' => 'imagilabdev_engine',
		'username' => 'imagilabdev_engine',
		'password' => 'L2m221500@!',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);
$config['show_ee_news'] = 'y';
$config['share_analytics'] = 'y';

// EOF